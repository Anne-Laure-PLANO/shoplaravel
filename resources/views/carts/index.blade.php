@extends('layouts.app')

@section('title', 'panier')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Mon Panier</h1>

        @if(session()->has('cart') && count(session('cart')) > 0)
            <ul class="list-group">
                @foreach(session('cart') as $productId => $details)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <!-- Section produit -->
                            <div class="me-4">
                                <h5>{{ $details['name'] }}</h5>
                                <p>Prix : {{ number_format($details['price'], 2) }}€</p>
                            </div>

                            <!-- Section quantité -->
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-danger btn-sm me-2" data-id="{{ $productId }}">-</button>
                                <input type="number" class="form-control form-control-sm" style="width: 60px;" value="{{ $details['quantity'] }}" id="quantity-{{ $productId }}" min="1">
                                <button class="btn btn-outline-success btn-sm ms-2" data-id="{{ $productId }}">+</button>
                            </div>
                        </div>

                        <!-- Bouton supprimer -->
                        <button class="btn btn-outline-danger btn-sm" data-id="{{ $productId }}">Supprimer</button>
                    </li>
                @endforeach
            </ul>

            <!-- Total Panier et Actions -->
            <div class="d-flex justify-content-between my-4">
                <h3>Total : {{ number_format($totalPrice, 2) }}€</h3>
                <div>
                    <a href="{{ route('cart.clear') }}" class="btn btn-warning me-2">Vider le panier</a>
                    <a href="{{ route('checkout') }}" class="btn btn-primary">Valider ma sélection</a>
                </div>
            </div>
        @else
            <div class="alert alert-info" role="alert">
                Votre panier est vide.
            </div>
        @endif
    </div>

    <script>
        document.querySelectorAll('.btn-outline-danger').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.dataset.id;
                // Appeler une méthode pour supprimer ce produit du panier via AJAX ou recharger la page
            });
        });

        document.querySelectorAll('.btn-outline-success').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.dataset.id;
                // Appeler une méthode pour augmenter la quantité du produit via AJAX
            });
        });

        document.querySelectorAll('.btn-outline-danger').forEach(button => {
            button.addEventListener('click', function() {
                let productId = this.dataset.id;
                // Appeler une méthode pour diminuer la quantité du produit via AJAX
            });
        });
    </script>
@endsection



@section('content')
    <h1>Panier</h1>
    <li>
        <div>
            <div>
                <h2>nom produit</h2>
                <p>quantité </p>
                <p>prix </p>
            </div>
            <div>
                <button> - </button> AffichageQuantitéProduit <button> + </button>
                <button>supprimer</button>
            </div>
        </div>
    </li>

    <button> Valider ma sélection </button>
    <button> Supprimer mon panier </button>
@endsection
