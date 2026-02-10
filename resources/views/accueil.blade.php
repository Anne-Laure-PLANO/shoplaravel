@extends('layouts.app')

@section('title', 'Accueil')
# get /home
@section('content')
    <h1>Bienvenue sur mon site commercial</h1>
    <p>Ceci est mon paragraphe. Bienvenue.</p>

    <a href="{{route('products.index')}}"><button> Accéder à notre catalogue </button></a><br><br>
    <a href="{{route('categories.index')}}"><button> Nos  catégories de produit</button></a> <br><br>
    <a href="{{route('contact')}}"><button> Nous contacter </button></a> <br><br>
    <a href="{{route('about')}}"><button> A propos de nous </button></a>

@endsection
