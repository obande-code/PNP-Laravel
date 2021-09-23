<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Pnp;
use App\Models\Station;
use App\Models\Violation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
        'message' => 'Invalid login details'
                ], 401);
            }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        // return $request->user();
    }
    public function getTickets()
    {
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
    public function getProfile(Request $request)
    {
        return $request->user();
    }
    public function getPersonnel()
    {
        $products = Pnp::latest()->paginate(10)->sort();
        return $products;
    }
    public function getViolations()
    {
        $products = Violation::latest()->paginate(10)->sort();
        return $products;
    }
    public function getStations()
    {
        $products = Station::latest()->paginate(10)->sort();
        return $products;
    }
    public function addTicket(Request $request)
    {
        Ticket::create($request->all());
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
    public function updateTicket(Request $request, Ticket $ticket)
    {
        $ticket = Ticket::find($request->id);
        $ticket->driversName = $request->driversName;
        $ticket->plateNo = $request->plateNo;
        $ticket->apprehendingOfficer = $request->apprehendingOfficer;
        $ticket->location = $request->location;
        $ticket->amount = $request->amount;
        $ticket->save();
        $products = Ticket::latest()->paginate(10)->sort();
        return $products;
    }
    public function updateProfile(Request $request, User $user)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return $user;
    }
}
