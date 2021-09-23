<?php

namespace App\Http\Controllers;

use App\Models\Pnp;
use Illuminate\Http\Request;

class PersonalController extends Controller
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
        $products = Pnp::latest()->paginate(10);
        return view('personal', compact('products'));
    }
    public function create()
    {
        return view('personalCreate');
    }
    public function new(Request $request)
    {
        Pnp::create($request->all());

        return redirect()->route('personalCreate');
    }
    public function edit($position)
    {
        return view('personalEdit', ['position' => json_decode($position)]);
    }
    public function change(Request $request, Pnp $pnp)
    {
        $pnp = Pnp::find($request->id);
        // $violation->id = $request->id;
        $pnp->name = $request->name;
        $pnp->Rank = $request->Rank;
        $pnp->station = $request->station;
        $pnp->home = $request->home;
        $pnp->email = $request->email;
        $pnp->save();
        return redirect()->route('personal');
    }
    public function delete($position, Pnp $pnp)
    {
        $pnp = Pnp::find(json_decode($position)->id);
        if ($pnp) {
            $pnp->delete();
        }
        return redirect()->route('personal');
    }
}
