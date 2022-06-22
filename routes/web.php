<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login', function () {
    return view("admin.sign_in");
});
Route::get('/admin/dashboard', function () {
    return view("admin.dashboard");
});
Route::prefix('admin')->group(function () {

    Route::prefix('product')->group(function () {
        Route::get('/create', ['App\Http\Controllers\ProductAdminController', "create"]);
        Route::get('/edit', [ProductAdminController::class, 'edit']);
        Route::get('/delete', [ProductAdminController::class, 'destroy']);
    });
});
Route::get('/products', [ProductController::class, "index"]);
Route::get('/product/{id}', [ProductController::class, "getById"]);
