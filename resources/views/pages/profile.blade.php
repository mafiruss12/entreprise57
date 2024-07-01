@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profil de {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    @if($user->photo)
        <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo de profil" style="width:150px; height:150px; border-radius:50%;">
    @endif
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Modifier le profil</a>
</div>
@endsection
