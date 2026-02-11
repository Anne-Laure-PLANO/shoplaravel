@extends('layouts.app')

@section('title','Modification de produit')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Modification de produit</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ Route('products.update', $product) }}" method="POST" class="needs-validation">
                            @csrf
                            @method('PUT')
                            <p>Veuillez modifier les informations produit :</p>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Catégorie :</label>
                                <select id="category_id" name="category_id" class="form-select">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id }}" {{ ($category->id == old('category_id', $product->category_id)) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nom :*</label>
                                <input type="text" name="name" value="{{ old('name', $product->name) }}" id="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description :</label>
                                <input type="text" name="description" value="{{ old('description', $product->description) }}" id="description" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Lien image :</label>
                                <input type="text" name="image" value="{{ old('image', $product->image) }}" id="image" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Prix en € :*</label>
                                <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}" id="price" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stock :</label>
                                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" id="stock" class="form-control">
                            </div>

                            <div class="mb-3">
                                <p>Produit affiché ?</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="active" value='1' id="actived" class="form-check-input" {{ old('active', $product->active) ? 'checked' : '' }}>
                                    <label for="actived" class="form-check-label">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="active" value='0' id="inactived" class="form-check-input" {{ old('active', !$product->active) ? 'checked' : '' }}>
                                    <label for="inactived" class="form-check-label">Non</label>
                                </div>
                            </div>

                            <p class="text-muted">* : champs obligatoires</p>

                            <button type="submit" class="btn btn-primary w-100"> Modifier </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
