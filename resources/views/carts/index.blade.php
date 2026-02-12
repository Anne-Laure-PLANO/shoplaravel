@extends('layouts.app')

@section('title', 'panier')

@section('content')
    <div class="container my-5">

        <h1 class="text-center mb-4">Mon panier</h1>

        <div class="card shadow-sm p-4">
            @forelse($cart as $product_id => $item)
                <!-- Bloc articles -->

                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">

                        <div class="row align-items-center">

                            <!-- Bloc gauche : infos produit -->
                            <div class="col-md-4 text-center mb-3 mb-md-0">
                                <h5 class="fw-bold">Nom produit{{$item['name']}}</h5>
                                <img src="{{$item['image']}}" class="img-fluid rounded mb-2" style="max-height:150px;">
                                <div>
                                    <a href="{{route('products.show', $item['product_id'])}}" class="btn btn-outline-secondary btn-sm">
                                        Voir détail produit
                                    </a>
                                </div>
                            </div>

                            <!-- Bloc centre : quantité + suppression -->
                            <div class="col-md-5">

                                <div class="d-flex flex-column align-items-center gap-3">

                                    <div class="d-flex align-items-center gap-3">
                                        <a href="{{route('cart.decreaseQuantity', $product_id)}}">
                                            <button type='submit' class="btn btn-outline-dark btn-sm">
                                                -
                                            </button>
                                        </a>
                                        <p class="mb-0">
                                            Quantité : {{$item['quantity']}}
                                        </p>
                                        <a href="{{route('cart.increaseQuantity', $product_id)}}">
                                            <button type='submit' class="btn btn-outline-dark btn-sm">
                                                +
                                            </button>
                                        </a>
                                    </div>

                                    <div>
                                        <a href="{{route('cart.removeItem', $product_id)}}">
                                            <button class="btn btn-outline-danger btn-sm">
                                                Supprimer l'article
                                            </button>
                                        </a>
                                        </form>
                                    </div>

                                </div>

                            </div>

                            <!-- Bloc droite : prix article -->
                            <div class="col-md-3 text-md-end text-center mt-3 mt-md-0">
                                <h6 class="fw-bold">Prix total article : </h6>
                                <p class="fs-5 text-success mb-0">{{number_format(($item['quantity'] * $item['price']), 2, ',', ' ')}} €</p>
                            </div>

                        </div>

                    </div>
                </div>

            @empty
                <div class="text-center py-5">
                    <p class="fs-5">Votre panier est vide</p>
                    <a href="{{route('products.index')}}"><button class="btn btn-primary">
                        Retour au catalogue
                    </button></a>
                </div>
            @endforelse

        </div>

        <!-- Bloc total panier -->
        <div class="card shadow-sm mt-4 p-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

                <div class="mb-3 mb-md-0">
                    <h5 class="fw-bold mb-0">
                        Prix total panier :
                        <span class="text-success"> {{number_format($total, 2 , ',' , ' ')}}€</span>
                    </h5>
                </div>

                <div class="d-flex gap-3">
                    <form action="{{route('cart.clearCart')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">
                            Supprimer panier
                        </button>
                    </form>

                    <button class="btn btn-success">
                        Passer commande
                    </button>
                </div>

            </div>

        </div>

    </div>

@endsection
