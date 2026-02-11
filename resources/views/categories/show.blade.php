@extends('layouts.app')

@section('title', 'détail de catégorie')

@section('content')
    <h1>Sélection par catégorie : {{$category->name}}</h1>
    {{(!empty($category->description))?"<p>$category->description </p>": ''}}
    <ul>
        @forelse($products as $product)
            <li>{{$product->name}}</li>
        @empty
            <p>Aucun produit n'est disponible.</p>
        @endforelse
    </ul>
    <div class="row">
        <div class="col d-flex justify-content-center m-5">

            {{$products->links()}}
        </div>
    </div>
@endsection
