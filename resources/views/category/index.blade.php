@extends('layouts.app')

@section('title', 'Toutes les categories')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Nos Catégories</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($categories as $category)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-blue-600 mb-2">
                    {{$category->name }}
                </h2>
                <p class="text-gray-600">
                    {{$category->description }}
                </p>


                <h3 class="font-bold text-gray-700 mb-2">Produits :</h3>

                <ul class="list-disc pl-5 space-y-1">
                    @forelse($category->products as $product)
                        <li class="text-gray-600">
                            {{ $product->name }}
                            <span class="text-xs text-gray-400">({{ $product->price }} €)</span>
                        </li>
                    @empty
                        <li class="text-gray-400 italic">Aucun produit</li>
                    @endforelse
                </ul>
            </div>
        @endforeach
    </div>
@endsection
