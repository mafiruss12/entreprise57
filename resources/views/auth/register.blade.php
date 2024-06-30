<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
    
<div class="container" style="display: flex;
        align-items: center;
        justify-content: center;margin-top:100px">

<div class="card w-50 " style="box-shadow:2px 1px 2px 1px  gray;border-raduis:10px" >
    <div class="header " class="card " style="box-shadow:2px 1px 2px 1px  gray;border-raduis:10px" >
        <div class="title bg-success p-4 text-white">
<center>S'INSCRIRE  </center>     
 </div>
    </div>
    <div class="card-body">

   

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div class="form-group">
        <label for="specialty">{{ __('Specialty') }}</label>
        <input id="specialty" type="text" class="form-control @error('specialty') is-invalid @enderror " name="specialty" value="{{ old('specialty') }}" required autocomplete="specialty">
        @error('specialty')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="location">{{ __('Location') }}</label>
        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror " name="location" value="{{ old('location') }}" required autocomplete="location">
        @error('location')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
    <label for="role">{{ __('Role') }}</label>
    <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
        <option value="">Sélectionner un rôle</option>
        <option value="artisan" @if(old('role') == 'artisan') selected @endif>Artisan</option>
        <option value="client" @if(old('role') == 'client') selected @endif>Client</option>
    </select>
    @error('role')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

    <div class="form-group mb-0 p-2">
        <button type="submit" class="btn btn-primary  ">
            {{ __('Register') }}
        </button>
    </div>
</form>
</div>
</div>
</div>
</body>
</html>