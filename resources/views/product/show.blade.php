@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="product-detail">
        <h1>{{ $product->name }}</h1>

        <img src="{{ $product->image }}" alt="{{ $product->name }}" style="max-width: 300px;">

        <p class="description">
            {{ $product->description }}
        </p>

        <hr>
        <a href="{{ route('products.index') }}" class="btn">⬅️ Retour au catalogue</a>
    </div>

@endsection
