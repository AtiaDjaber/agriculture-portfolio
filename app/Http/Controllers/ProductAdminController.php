<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    //
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.products.index', compact('products'));
        // return response()->json($products);
    }
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
        // return response()->json($products);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('product.index');
    }
    public function getById(Request $request)
    {
        $product = Product::with(['attachments', 'category'])->find($request->id);
        $product->update(['views' => $product->views + 1]);
        return view('detail', compact('product'));
    }
}
