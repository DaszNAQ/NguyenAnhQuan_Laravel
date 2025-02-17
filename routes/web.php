<?php

use App\Http\Controllers\frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('product', [ProductController::class, 'index']);
Route::get('product-detail', [ProductController::class, 'product_detail']);
// Route::get('detail',[ProductController::class,'product_detail']);

Route::get('contact', [ContactController::class, 'index']);
// Route::get('blog', [BlogController::class, 'index']);
