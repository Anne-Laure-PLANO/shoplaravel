@extends('layouts.app')

@section('title','Modification produit')

@section('content')
    <h1>Modification de produit</h1>
    <h2>{{$product->name}}</h2>
    <p>Catégorie : {{$product->category}}</p>
    <p>Description : {{$product->description}}</p>
    <p>Prix : {{$product->price}} €</p>
    <p>Stock : {{$product->stock}}</p>

@endsection
