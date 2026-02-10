@extends('layouts.app')

@section('title', 'Liste des catégories')

@section('content')
    <h1>Liste des catégories </h1>
    <ul>
        @forelse($categories as $category)
            <li><a href="{{route('categories.show', $category)}}">{{$category->name}}</a></li>
        @empty
            <p>Aucune catégorie n'est disponible.</p>
        @endforelse
    </ul>

@endsection
