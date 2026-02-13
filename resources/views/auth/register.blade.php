@extends('layouts.app')

@section('title','inscription')

@section('content')
<div class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm" style="width: 100%; max-width: 450px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Créer un compte</h3>

                <form action="{{route('register.createUser')}}" method="POST">
                    @csrf
                    <!-- Nom -->
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Nom : </label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value = "{{old('lastName')}}" placeholder="Votre nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Prénom : </label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value = "{{old('firstName')}}" placeholder="Votre prénom" required>
                    </div>
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

                    <!-- Confirmation mot de passe -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="********" required>
                    </div>

                    <!-- Bouton inscription -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-success">S'inscrire</button>
                    </div>

                    <!-- Liens -->
                    <div class="text-center">
                        <p>Déjà un compte ? <a href="{{route('auth.showForm')}}">Se connecter</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
