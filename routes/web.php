<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/products', function () {
    return view('pages.products');
});


Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/store/products', [ProductController::class, 'store']);
Route::get('/products/{product}', [ProductController::class, 'edit'])->name('pages.edit');

