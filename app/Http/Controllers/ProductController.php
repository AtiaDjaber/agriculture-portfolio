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
        $products = Product::all();
        return response()->json($products);
    }

    public function getById(Request $request)
    {
        $product = Product::with(['attachments', 'category'])->find($request->id);
        return response()->json($product);
    }
}
