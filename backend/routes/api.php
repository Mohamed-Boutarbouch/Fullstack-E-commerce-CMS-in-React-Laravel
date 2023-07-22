<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BillboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\StoreController;
// use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/test', function () {
//     $product = Product::find('08fc5537-6e5d-44f5-95bc-dd82464f693c')->orders;

//     return response()->json(["data" => $product]);
// });


Route::apiResource('stores', StoreController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('billboards', BillboardController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('images', ImageController::class);
Route::apiResource('sizes', SizeController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('colors', ColorController::class);
