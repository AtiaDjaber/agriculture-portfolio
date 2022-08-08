<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $products = Product::with('category')->orderBy("views", "desc")->take(10)->get();
        $productsCount = Product::count();
        $categoriesCount = Category::count();
        $viewsCount = Product::sum('views');
        $usersCount = User::count();

        return view('admin.dashboard', compact(['products', 'usersCount', 'viewsCount', 'categoriesCount', 'productsCount']));
        // return response()->json($products);
    }
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
        // return response()->json($products);
    }
    public function getById(Request $request)
    {
        $product = Product::with(['attachments', 'category'])->find($request->id);
        $product->update(['views' => $product->views + 1]);
        return view('detail', compact('product'));
    }
}
