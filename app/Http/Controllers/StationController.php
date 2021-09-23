<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
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
        $products = Station::latest()->paginate(10);
        return view('station', compact('products'));
    }
    public function create()
    {
        return view('stationCreate');
    }
    public function new(Request $request)
    {
        Station::create($request->all());

        return redirect()->route('stationCreate');
    }
    public function edit($position)
    {
        return view('stationEdit', ['position' => json_decode($position)]);
    }
    public function change(Request $request, Station $station)
    {
        $station = Station::find($request->id);
        // $violation->id = $request->id;
        $station->name = $request->name;
        $station->address = $request->address;
        $station->save();
        return redirect()->route('station');
    }
    public function delete($position, Station $station)
    {
        $station = Station::find(json_decode($position)->id);
        if ($station) {
            $station->delete();
        }
        return redirect()->route('station');
    }
}
