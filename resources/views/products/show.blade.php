@extends('layouts.app');

@section('title','détail produit');

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h1 class="card-title fw-bold mb-4">{{$product->name}}</h1>
                <img src="{{$product->image}}" class="img-fluid rounded mb-4" alt="{{$product->name}}">
                <p class="mb-2"><strong>Catégorie :</strong> {{$product->category->name}}</p>
                <p class="mb-2"><strong>Description :</strong> {{$product->description}}</p>
                <p class="mb-2"><strong>Stock :</strong> {{$product->stock}}</p>
                <p class="mb-3"><strong>Prix produit :</strong> {{$product->price}}€</p>

                <div class="d-flex gap-2">
                    <a href="{{route('cart.addItem', $product)}}" class="btn btn-success flex-grow-1">Ajouter au panier</a>
                    <a href="{{route('products.index')}}" class="btn btn-secondary flex-grow-1">Retour au Catalogue</a>
                </div>
            </div>
        </div>
    </div>

@endsection
