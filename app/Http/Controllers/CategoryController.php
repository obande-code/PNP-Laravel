<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $products = Category::paginate(10);
        $all = Category::get();
        return view('category', compact('products'));
    }
    public function create()
    {
        return view('categoryCreate');
    }
    public function new(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'category'   => 'required'
        ]);
        Category::create($request->all());

        return redirect()->route('categoryCreate');
    }
    public function edit($position)
    {
        return view('categoryEdit', ['position' => json_decode($position)]);
    }
    public function change(Request $request, Category $category)
    {
        $category = Category::find($request->id);
        // $violation->id = $request->id;
        $category->position = $request->position;
        $category->category = $request->category;
        $category->save();
        return redirect()->route('category');
    }
    public function delete($position, Category $category)
    {
        $category = Category::find(json_decode($position)->id);
        if ($category) {
            $category->delete();
        }
        return redirect()->route('category');
    }
}
