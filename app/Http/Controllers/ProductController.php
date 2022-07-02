<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::where('is_available', true)->get();

        return view('product', compact('products'));
        // return response()->json($products);
    }

    public function getById(Request $request)
    {
        $product = Product::with(['attachments', 'category'])->find($request->id);
        $product->update(['views' => $product->views + 1]);
        return view('detail', compact('product'));
    }
}
