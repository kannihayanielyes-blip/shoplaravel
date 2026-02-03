<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home() {
        return view("home");
    }
    public function about() {
        return view("about");
    }
    public function contact() {
        return view('contact');
    }
    public function show($id) {
        $product = [
            'name'=> 'ouhou',
            'price'=> 100,
            'description'=> 'Description de la boutique'
        ];
        $stock = 0;
        return  view('product', compact('product', 'id', 'stock'));
    }
}
