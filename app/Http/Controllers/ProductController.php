<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $category_id = $request->category;
        $search = $request->search;
        $products = Product::where('is_available', true);
        if ($category_id) {
            $products = $products->where('category_id', $category_id);
        }
        if ($search) {
            $products = $products->where('name', 'LIKE', "%" . $search . "%");
        }
        $products = $products->orderBy('id', 'desc')->paginate(9);

        return view('product', compact(['products', 'category_id','search']));
    }

    public function getById(Request $request)
    {
        $product = Product::with(['attachments', 'category'])->find($request->id);
        $product->update(['views' => $product->views + 1]);
        return view('detail', compact('product'));
    }
}
