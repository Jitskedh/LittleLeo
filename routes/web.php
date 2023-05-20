<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'view'])->name('home');
Route::get('/products',[ProductController::class,'show'])->name('products');
Route::get('/{product:slug}',[ProductController::class,'showInDetail'])->name('product');
Route::post('/{product:slug}',[ProductController::class,'store'])->name('orderSent');




