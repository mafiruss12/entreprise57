<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/jpg" href="images/logo.jpg">
<link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

</head>
<body>



@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil de {{ Auth::user()->name }}</h1>
        <p>Email:{{ Auth::user()->email }}</p>

        <h2>Services</h2>
        @if($services->isEmpty())
            <p>Aucun service trouvé.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom du Service</th>
                        <th>Description</th>
                        <th>Date de Création</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->created_at }}</td>
                            <td>{{ $service->user_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h2>Ajouter un Service</h2>
        <form action="{{ route('services.store') }}" method="POST"  class="register-form">
            @csrf
            <div class="form-group">
                <label for="title">Nom du Service</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
  
</body>
</html>