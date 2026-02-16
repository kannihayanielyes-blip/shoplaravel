@extends('layouts.app')

@section('title', 'Modif un produit')

@section('content')
    <h1>Modif du produit {{$product->name}}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nom du produit :</label>
            <input type="text" name="name" id="name" value="{{$product->name }}" required>
        </div>

        <br>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea name="description" id="description"></textarea>
        </div>

        <br>

        <div class="form-group">
            <label for="price">Prix :</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $product->stock) }}" required>
        </div>

        <br>

        <div class="mb-4">
            <label for="stock">Stock :</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="border p-2 w-full" required>
        </div>

        <br>

        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="active" value="1" {{ $product->active ? 'checked' : '' }} class="mr-2">
                Produit Actif / En ligne
            </label>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-bold mb-2">Choisir une catégorie :</label>
            <select name="category_id" id="category" class="border p-2 w-full rounded" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        @method('PUT') <button type="submit" class="btn-primary">Enregistrer le produit</button>
    </form>

@endsection
