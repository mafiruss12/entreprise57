@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profil de {{ $user->name }}</h1>
    <!-- Affichage des informations du profil -->
    <p>Email: {{ $user->email }}</p>
    <p>Nom: {{ $user->name }}</p>
    <!-- Autres informations du profil -->

    <!-- Bouton Modifier le profil -->
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Modifier le profil</a>
</div>
@endsection
