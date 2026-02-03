@extends('layouts.app') @section('title', 'Liste des Produits')

@section('content') <h1 class="text-3xl font-bold mb-6 text-gray-800">Notre Catalogue</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    @forelse($products as $product)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h2 class="text-xl font-bold text-blue-600 mb-2">{{ $product['name'] }}</h2>
            <p class="text-gray-700 text-lg">Prix : {{ $product['price'] }} €</p>
        </div>
    @empty
        <div class="col-span-3 text-center">
            <p class="text-red-500 text-xl">Aucun produit trouvé dans la boutique.</p>
        </div>
    @endforelse

</div>
@endsection
