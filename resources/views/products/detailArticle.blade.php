@extends('layouts.app');

@section('title','détail produit');

@section('content')
    <h1>Détail du produit n° {{$product->id}}</h1>
    <p>Nom produit : {{$product->name}}</p>
    <p>Prix produit : {{$product->price}}€</p>
    <div>
        <a href="/index"><button>Retour au catalogue</button></a>
    </div>

@endsection
