<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/create-products', [PagesController::class, 'createProducts']);
Route::get('/product/{id}', [PagesController::class, 'showProduct'])->name('product.show');
Route::get('/redirect', [RedirectController::class, '__invoke']);
