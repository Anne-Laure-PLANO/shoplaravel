@extends('layouts/app')

@section('title', 'Nous contacter')

@section('content')
    <style>
        .required-star {
            color: red;
            margin-left: 2px;
        }
        .form-legend {
            font-size: 0.9rem;
            color: #555;
        }
    </style>
    <h1>Nous contacter</h1>

    <form action="/envoyer-message" method="POST">
        <!-- Nom -->
        <div class="mb-3">
            <label for="name" class="form-label">Votre nom<span class="required-star">*</span></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">Nom complet<span class="required-star">*</span></label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Votre Prénom" required>
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail<span class="required-star">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Votre e-mail" required>
        </div>

        <!-- Sujet -->
        <div class="mb-3">
            <label for="subject" class="form-label">Sujet<span class="required-star">*</span></label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet de votre message" required>
        </div>

        <!-- Message -->
        <div class="mb-3">
            <label for="message" class="form-label">Message<span class="required-star">*</span></label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Écrivez votre message ici..." required></textarea>
        </div>
        <p class="form-legend"><span class="required-star">*</span> Champs obligatoires</p>
        <!-- Bouton envoyer -->
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>    

@endsection