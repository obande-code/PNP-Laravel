<?php

namespace App\Http\Controllers;

use App\Models\Violation;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViolationController extends Controller
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
        $products = Violation::latest()->paginate(10);
        return view('violation', compact('products'));
    }
    public function create()
    {
        $categorys = Category::latest()->paginate(10)->sort();
        return view('violationCreate', compact('categorys'));
    }
    public function new(Request $request)
    {
        Violation::create($request->all());

        return redirect()->route('violationCreate');
    }
    public function edit($position)
    {
        return view('violationEdit', ['position' => json_decode($position)]);
    }
    public function change(Request $request, Violation $violation)
    {
        $violation = Violation::find($request->id);
        // $violation->id = $request->id;
        $violation->category = $request->category;
        $violation->violation = $request->violation;
        $violation->amount = $request->amount;
        $violation->save();
        return redirect()->route('violation');
    }
    public function delete($position, Violation $violation)
    {
        $violation = Violation::find(json_decode($position)->id);
        if ($violation) {
            $violation->delete();
        }
        return redirect()->route('violation');
    }
}
