<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Ticket::paginate(10);
        return view('tickets', compact('products'));
    }
    public function ticketCancel(Request $request, Ticket $ticket)
    {
        $ticket = Ticket::find($request->selectTicket['id']);
        $ticket->status = 'Cancel';
        $ticket->save();
        return $ticket;
    }
}
