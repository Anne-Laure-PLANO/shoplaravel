@extends('layouts.app')

@section('title', 'Création d\'un nouveau produit')

@section('content')
    <h1>Enregistrement d'un nouveau produit</h1>
    <form action="{{Route('products.create')}}" method="POST">
    @CSRF
        <p>Veuillez saisir les informations produit :</p>
        <div>
            <select id = "category_id" name="category_id"> Choisissez une catégorie :
            @foreach($categories as $category)
                <option name = "category_id" value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select><br>
            <label for="name">nom :*</label>
            <input type="text" name="name" value = "{{old('name')}}" id="name"><br>
            <label for="description">description :</label>
            <input type="text" name="description" value = "{{old('description')}}" id="description"><br>
            <label for="image">lien image :</label>
            <input type="text" name="image" value = "{{old('image')}}" id="image"><br>
            <label for="price">prix :*</label>
            <input type="number" name="price" value = "{{old('price')}}" id="price"><br>
            <label for="stock">stock :*</label>
            <input type="number" name="stock" value = "{{old('stock')}}" id="stock"><br>br
            <p> Affichage immédiat ?
                <label for="actived"> Oui </label>
                <input type="radio" name="active" value = "true" id="actived" checked>
                <label for="inactived"> Non </label>
                <input type="radio" name="active" value = "false" id="inactived">

            </p>
            <br>

            <p>* : champs obligatoires</p>
        </div>
        <button type="submit"> Valider </button>
    </form>

@endsection
