<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy("id", "desc")->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }


    public function create(Request $request)
    {

        return view('admin.categories.create',);
        // return response()->json($products);
    }

    public function edit(Request $request)
    {
       
        $category = Category::find($request->id);
        return view('admin.categories.edit', compact('category'));
        // return response()->json($products);
    }

    public function store(Request $request)
    {
        $product = Category::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);


        return redirect()->route('admin.categories.index');
    }

    public function update(Request $request)
    {

        $category = Category::find($request->id);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.categories.index');
    }
}
