@extends('layouts.app')

@section('title','S\'authentifier')

@section('content')

<div class="bg-light">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Connexion</h3>

                <form action="{{route('auth.testLog')}}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@domaine.com" required>
                    </div>

                    <!-- Mot de passe -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                    </div>

                    <!-- Remember me -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="remember" type="checkbox" value="" id="remember">
                        <label class="form-check-label" for="remember">
                            Se souvenir de moi
                        </label>
                    </div>

                    <!-- Bouton connexion -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>

                    <!-- Liens -->
                    <div class="text-center">
                        <a href="#">Mot de passe oublié ?</a><br>
                        <a href="{{route('register.showForm')}}">Créer un compte</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
