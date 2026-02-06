@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue sur mon site commercial</h1>
    <p>Ceci est mon paragraphe. Bienvenue.</p>

    <a href="/index"><button> Accéder à notre catalogue </button></a><br><br>
    <a href="/contact"><button> Nous contacter </button></a> <br><br>
    <a href="/about"><button> A propos de nous </button></a>

@endsection
