<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadTrait;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    //
    use UploadTrait;

    public function index()
    {
        $products = Product::orderBy("id","desc")->paginate(10);

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

        $filename = null;
        if ($request->file('image')) {
            $filename = $this->uploadFile($request->file('image'), 'images');
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'category_id' => $request->category_id,
            'is_available' => $request->input('is_available') ? 1 : 0,
            // 'price' => $request->price
        ]);

        if ($request->session()->has('attachments')) {
            foreach ($request->session()->pull('attachments') as $attachment) {
                $product->attachments()->create(['name' => $attachment]);
            }
        }

        return redirect()->route('product.index');
    }

    public function update(Request $request)
    {

        $filename = null;
        if ($request->file('image')) {
            $filename = $this->uploadFile($request->file('image'), 'images');
        }

        $product = Product::find($request->id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename ?? $product->image,
            'category_id' => $request->category_id,
            'is_available' => $request->input('is_available') ? 1 : 0,
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
