@extends('layouts.app')

@section('title', 'zone admin')

@section('content')
    <h1>Zone administrateur - gestion des produits</h1>
    @forelse($products as $product)
        <div>
            <h2>nom produit : {{$product->name}}</h2>
            <p>description produit : {{$product->description}}</p>
            <p>prix :{{$product->price}}€</p>
            <a href="/admin/modifyProduct/{{$product->id}}"><button>Modifier</button></a>
            <a href="/admin/deleteProduct/{{$product->id}}"><button>Supprimer</button></a>
        </div>
        @empty
            <p> Aucune donnée enregistrée.</p>
    @endforelse
@endsection
