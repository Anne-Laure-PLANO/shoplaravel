<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <!-- Logo à gauche -->
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="logo.png" alt="Logo" height="40">
            </a>

            <!-- Nom de l'entreprise centré -->
            <div class="mx-auto order-0">
                <span class="navbar-text text-white fw-bold fs-4">
                    Ma Boutique
                </span>
            </div>

             <!-- Bouton hamburger pour mobile -->
            <!-- Bouton hamburger pour mobile avec compteur -->
            <button class="navbar-toggler position-relative" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

                <!-- Badge compteur -->
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$cartCount ?? 0}}
                    <span class="visually-hidden">articles dans le panier</span>
                </span>
            </button>


            <!-- Navigation à droite -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
 @auth()
     @if (auth()->User()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin.dashboard')}}">Administrateur</a>
                    </li>
     @endif
@endauth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">Produits</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="{{ route('cart.display') }}">
                            Panier
                            <!-- Badge compteur -->
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$cartCount ?? 0}}
                                <span class="visually-hidden">articles dans le panier</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">À propos</a>
                    </li>
     @auth()
                <form action="{{route('auth.logout')}}" method="post">
                    @csrf
                     <li class="nav-item">
                         <input class="nav-link" type="submit" value="Deconnexion">
                     </li>
                </form>
     @else
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('auth.showForm')}}">S'identifier</a>
                     </li>
     @endauth
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @yield('content')

    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2026 Ma Boutique. Tous droits réservés.
    </footer>
</body>
</html>
