<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
    



<!-- ss -->


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Entreprise57') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
<body>
    



<div class="mt-5">

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                <a href="{{ route('login') }}" class="signup-image-link">Se Connecter</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">{{ __('Inscription') }}</h2>
                <form method="POST" action="{{ route('register') }}" class="register-form">
                        @csrf
                        <div class="form-group">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

</div>
<div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

</div>
                        <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" required autocomplete="new-password" placeholder="password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                        </div>
                        <div class="form-group">

                        <input id="specialty" type="text" class="form-control @error('specialty') is-invalid @enderror " name="specialty" value="{{ old('specialty') }}" required autocomplete="specialty" placeholder="specialty">
        @error('specialty')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
                        <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password_confirmation">
                        </div>

                        <div class="form-group">

        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror " name="location" value="{{ old('location') }}" required autocomplete="location" placeholder="location">
        @error('location')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                                
                        </div>
                       
<div class="form-group">

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
          

                        <div class="row mb-0">
                          <center>   <div class="col-md-12">
                               <button type="submit" class="btn btn-primary w-100">
                               {{ __('Register') }}
                               </button>
<br>
                                
                            </div></center>
                        </div>
                    </form>
            
            </div>
        </div>
    </div>
</section>

</div>

</body>
</html>