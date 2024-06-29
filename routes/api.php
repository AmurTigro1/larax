<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// Route::put('/products/{product}', 'ProductController@update')->middleware('api');
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}/delete', [ProductController::class, 'destroy']);