<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
}
