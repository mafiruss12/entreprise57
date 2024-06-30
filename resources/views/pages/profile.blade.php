@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('services.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Service Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
  
</div>
@endsection
