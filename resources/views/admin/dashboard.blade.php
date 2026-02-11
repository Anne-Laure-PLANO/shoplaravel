@extends('layouts.app')

@section('title', 'zone admin')

@section('content')
    <div class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Zone administrateur - gestion des produits</h1>
            <a href="{{ route('products.create') }}" class="btn btn-success">
                Ajouter un nouveau produit
            </a>
        </div>

        @forelse($products as $product)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">

                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p class="mb-1"><strong>Catégorie :</strong> {{ $product->category->name }}</p>
                    <p class="mb-1"><strong>Description :</strong> {{ $product->description }}</p>
                    <p class="mb-1"><strong>Image :</strong> {{ $product->image }}</p>
                    <p class="mb-1"><strong>Prix :</strong> {{ $product->price }} €</p>
                    <p class="mb-1"><strong>Stock :</strong> {{ $product->stock }}</p>

                    <p class="mb-3">
                        <strong>Produit en ligne :</strong>
                        <span class="badge {{ $product->active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $product->active ? 'oui' : 'non' }}
                    </span>
                    </p>

                    <div class="d-flex gap-2">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                            Modifier
                        </a>
                        <form action="{{route('products.destroy', $product->id)}}" method = "post" class="d-inline"
                              onsubmit="return confirm('Attention : toute suppression est définitive. Continuer ?');">
                            @CSRF
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning">
                Aucune donnée enregistrée.
            </div>
        @endforelse

            {{$products->links()}}

    </div>
@endsection
