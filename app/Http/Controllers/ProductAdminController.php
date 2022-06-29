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
    public function create(Request $request)
    {
        $request->session()->forget('attachments');
        $categories = Category::all();
        // dd($request->session()->get('attachments'));


        return view('admin.products.create', compact('categories'));
        // return response()->json($products);
    }

    public function edit(Request $request)
    {
        $request->session()->forget('attachments');

        $categories = Category::all();
        $product = Product::with('attachments')->find($request->id);
        return view('admin.products.edit', compact('categories', 'product'));
        // return response()->json($products);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        if ($request->session()->has('attachments')) {
            foreach ($request->session()->pull('attachments') as $attachment) {
                $product->attachments()->create(['name' => $attachment]);
            }
        }

        return redirect()->route('product.index');
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            // 'price' => $request->price
        ]);

        if ($request->session()->has('attachments')) {
            foreach ($request->session()->pull('attachments') as $attachment) {
                $product->attachments()->create(['name' => $attachment]);
            }
        }

        return redirect()->route('product.index');
    }

    public function getById(Request $request)
    {
        $product = Product::with(['attachments', 'category'])->find($request->id);
        $product->update(['views' => $product->views + 1]);
        return view('detail', compact('product'));
    }
}
