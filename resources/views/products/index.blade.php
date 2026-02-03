@extends('layouts/app')

@section('title', 'Catalogue')

@section('content')
    <h1>Mon super gros titre</h1>
    <p>Voici la liste de mes produits : </p>
    <ul>
        @forelse ($products as $item)
            <li>
                Produit numéro {{$loop->iteration}} : {{$item['nom']}}, {{$item['prix']}}€
            </li>
            @empty
            <li>Aucun produit n'est disponible.</li>   
        @endforelse
    </ul>
@endsection