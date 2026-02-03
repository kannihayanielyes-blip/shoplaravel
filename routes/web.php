<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route :: get('/home', [PageController::class, 'home'])->name('home');
Route :: get('product/{id}', [PageController::class, 'show'])->name('product.show');
Route :: get('listproduct', [ProductController::class, 'index'])->name('listproducts');
Route :: get('/about', [PageController::class, 'about'])->name('about');
Route :: get('/contact', [PageController::class, 'contact'])->name('contact');
