@extends('layouts.app') @section('title', 'Liste des Produits')

@section('content') <h1 class="text-3xl font-bold mb-6 text-gray-800">Notre Catalogue</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    @forelse($products as $product)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <h2 class="text-xl font-bold text-blue-600 mb-2">{{ $product->name}}</h2>
            <p class="text-gray-700 text-lg">Prix : {{ $product->price}} €</p>
            <p class="text-gray-700 text-lg">Categorie :
                <span class="font-semibold text-blue-500">
                    {{$product->category->name ?? 'Aucune catégorie'}}
                </span>
                <br>
            <a href="{{ route('products.show', $product->id) }}">Voir le produit</a>
            <br>
            <br>
            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:text_yellow-700">Modifier le produit</a>
            <br>
            <br>
            <form action="{{ route('products.destroy', $product) }}" method="POST"
                  onsubmit="return confirm('Êtes-vous sûr ?')">
                @csrf
                @method('DELETE')

                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                    Supprimer
                </button>
            </form>
        </div>
    @empty
        <div class="col-span-3 text-center">
            <p class="text-red-500 text-xl">Aucun produit trouvé dans la boutique.</p>
        </div>
    @endforelse

</div>
@endsection
