@extends('layouts/app')

@section('title', 'Catalogue')

@section('content')
    <h1>Notre catalogue</h1>
    <p>Voici la liste de nos produits : </p>
    <div class="row">
        @forelse ($products as $product)
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Image du produit -->
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">

                    <div class="card-body d-flex flex-column">
                        <!-- Titre -->
                        <h5 class="card-title">{{ $product->name }}</h5>

                        <!-- Catégorie -->
                        <p class="text-muted mb-1">
                            Catégorie : {{ $product->category->name }}
                        </p>

                        <!-- Description -->
                        <p class="card-text">{{ $product->description }}</p>

                        <!-- Prix et stock -->
                        <div class="mb-3">
                            <span class="fw-bold">{{ number_format($product->price, 2) }} €</span>
                            <span class="text-muted">({{ $product->stock }} en stock)</span>
                        </div>
                        <a href="{{route('products.show', $product)}}">voir le détail</a>

                        <!-- Bouton Ajouter au panier -->
                        <a href=" " class="btn btn-primary mt-auto">
                            Ajouter au panier
                        </a>
                    </div>
                </div>
            </div>

            @empty
            <p>Aucun produit n'est disponible.</p>
        @endforelse
    </div>
@endsection
