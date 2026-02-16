<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route :: get('/home', [PageController::class, 'home'])->name('home');
Route :: get('/about', [PageController::class, 'about'])->name('about');
Route :: get('/contact', [PageController::class, 'contact'])->name('contact');
Route :: get('/products.create', [ProductController::class, 'create'])->name('products.create');

Route :: resource('products', ProductController::class);
Route :: get('categories', [CategoryController::class, 'index'])->name('pagecategory');
Route :: get('/panier', [CartController::class, 'showCart'])->name('panier');
