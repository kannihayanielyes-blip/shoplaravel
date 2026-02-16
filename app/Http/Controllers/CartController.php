<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController
{
    public function showCart()
    {
        return view('cart.index');
    }
    public function addToCart(Request $request)
    {

    }
    public function removeFromCart(Request $request)
    {

    }
    public function updateCart(Request $request)
    {

    }
    public function updateQuantity(Request $request)
    {

    }
    public function removeall(Request $request)
    {

    }
}
