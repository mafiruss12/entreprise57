
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Connexion</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/logo.jpg">

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
                <a href="{{ route('register') }}" class="signup-image-link">Créez un compte</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">{{ __('Connexion') }}</h2>
                <form method="POST" action="{{ route('login') }}" class="register-form">
                        @csrf

                        <div class="form-group">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                
                                    <label for="remember" class="form-check-label label-agree-term"><span><span></span></span>Se souvenir de moi</label>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                          <center>   <div class="col-md-12">
                               <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Valider') }}
                                </button>
<br>
                                

                            </div></center>@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe Oublié?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
            
            </div>
        </div>
    </div>
</section>

</div>
