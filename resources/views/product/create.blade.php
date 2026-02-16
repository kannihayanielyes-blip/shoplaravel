@extends('layouts.app')

@section('title', 'Créer un produit')

@section('content')
    <h1>Ajouter un nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Nom du produit :</label>
            <input type="text" name="name" class="border p-2 rounded w-full @error('name') border-red-500" @enderror id="name" value="{{ old('name') }}">

            @error('name')
            <span class="texte-rouge">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <input class="border p-2 rounded w-full @error('description') border-red-500" @enderror value="{{ old('description') }}">
        </div>

        <div class="form-group">
            <label for="price">Prix :</label>
            <input type="number" class="border p-2 rounded w-full @error('price') border-red-500" @enderror name="price" id="price" step="0.01" value="{{ old('price')}}">

            @error('price')
            <span class="texte-rouge">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stock :</label>
            <input name="stock" id="stock" class="border p-2 rounded w-full @error('stock') border-red-500" @enderror value="{{ old('stock') }}">

            @error('stock')
            <span class="texte-rouge">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="active">Active :</label>
            <input name="active" id="active" class="border p-2 rounded w-full @error('active') border-red-500" @enderror value="{{ old('active') }}">

            @error('active')
            <span class="texte-rouge">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-bold mb-2">Choisir une catégorie :</label>
            <select name="category_id" id="category" class="border p-2 w-full rounded" required>
                <option value="">Sélectionnez une option</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                    {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn-primary">Enregistrer le produit</button>
    </form>

@endsection
