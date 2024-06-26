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


Route::get('/api/products', [ProductController::class, 'index']);
  
Route::post('/store/products', [ProductController::class, 'store']);