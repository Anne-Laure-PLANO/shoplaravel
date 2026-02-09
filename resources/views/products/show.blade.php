@extends('layouts.app');

@section('title','détail produit');

@section('content')
    <h1>Détail du produit n° {{$product->id}}</h1>
    <p>Nom produit : {{$product->name}}</p>
    <p>Prix produit : {{$product->price}}€</p>
    <br>
    <a href="{{route('products.index')}}"><button>Retour au Catalogue</button></a>

@endsection
