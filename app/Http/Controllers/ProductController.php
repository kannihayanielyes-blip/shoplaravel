<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function show($id) {
        return 'Détails du produit n° ' . $id;
    }
    public function index()
    {
        $products = [
            [
            'id'=> 1,
            'name'=> 'product1',
            'price'=> 667,
        ],
        [
            'id'=> 2,
            'name'=> 'product2',
            'price'=> 270,
        ],
        [
            'id'=> 3,
            'name'=> 'product3',
            'price'=> 007,
        ],
        [
            'id'=> 4,
            'name'=> 'product4',
            'price'=> 27,
        ],
        [
            'id'=> 5,
            'name'=> 'product5',
            'price'=> 93,
        ],
        ];
        return view('product.index', ['products' => $products]);
    }
}
