@extends('layouts/app')

@section('title', 'Catalogue')

@section('content')
    <h1>Notre catalogue</h1>
    <p>Voici la liste de nos produits : </p>
    <ul>
        @forelse ($products as $item)
            <li>
                Produit numéro {{$item->id}} : {{$item->name}}, {{$item->price}}€ -> <a href="{{route('products.show', $item->id)}}"><button>Choisir</button></a>
            </li>
            @empty
            <li>Aucun produit n'est disponible.</li>
        @endforelse
    </ul>
@endsection
