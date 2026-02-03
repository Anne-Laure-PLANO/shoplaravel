@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Gros titre de ma page</h1>
    <p>Ceci est mon paragraphe. Bienvenue.</p>

    @foreach ($products as $key => $product)
        <h2>Produit n° {{$key+1}}</h2>
        @if ($product['etat'])
            <p>Nom produit: {{$product['nom']}}</p>
            <p>quantité produit : {{$product['nbProduits']}}</p>
            <br>
        @else
        <p>Il n'y a plus de : {{$product['nom']}}</p>
        @endif
    @endforeach
@endsection
