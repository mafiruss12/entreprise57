<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="images/logo.jpg">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Entreprise57') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
</head>
<body>
    
<div id="app" style="position: fixed; width: 100%; z-index: 111; top: 0;">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{ url('/dashboard') }}" style="text-decoration:none;font-size:20px;color:black;">
                {{ config('app.name', 'Laravel') }}
            </a>

            <!-- Search bar -->
            <div class="d-none d-md-block search-form" style="margin-left:20px;">
                <form class="d-flex">
                    <input class="form-control me-2 search-input" type="search" placeholder="{{ __('search') }}" aria-label="Search" style="background:white;color:black">
                    <button class="btn btn-outline-success search-button" type="submit">{{ __('search') }}</button>
                </form>
            </div>
         
            <!-- Add this button for the sidebar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <!-- Add any left-side navigation items if needed -->
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    <!-- Message icon with badge -->
                    <li class="nav-item position-relative" >
                        <a class="nav-link" href="{{ route('chat.index') }}">
                            <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="20" height="20" style="color:black">
                                <path d="M128 0C110.3 0 96 14.3 96 32V224h96V192c0-35.3 28.7-64 64-64H480V32c0-17.7-14.3-32-32-32H128zM256 160c-17.7 0-32 14.3-32 32v32h96c35.3 0 64 28.7 64 64V416H576c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32H256zm240 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM64 256c-17.7 0-32 14.3-32 32v13L187.1 415.9c1.4 1 3.1 1.6 4.9 1.6s3.5-.6 4.9-1.6L352 301V288c0-17.7-14.3-32-32-32H64zm288 84.8L216 441.6c-6.9 5.1-15.3 7.9-24 7.9s-17-2.8-24-7.9L32 340.8V480c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V340.8z"/>
                            </svg>
                            <span class="badge bg-primary position-absolute top-0 start-100 translate-middle">4</span>
                        </a>
                    </li>

                    <!-- Notification icon with badge -->
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#">
                            <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20" style="color:black">
                                <path d="M224 512c35.3 0 64-28.7 64-64H160c0 35.3 28.7 64 64 64zm215.4-149.1c-19.9-20.8-55.4-51.7-55.4-154.9c0-77.7-54.5-139.2-128-155.2V32c0-17.7-14.3-32-32-32s-32 14.3-32 32v20.8C118.5 69.8 64 131.3 64 209c0 103.3-35.5 134.1-55.4 154.9c-6 6.3-8.6 14.5-8.6 22.7c0 16.4 13.3 32.4 32 32.4H416c18.7 0 32-16 32-32.4c0-8.2-2.6-16.4-8.6-22.7z"/>
                            </svg>
                            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">3</span>
                        </a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ config('languages')[App::getLocale()]['flag'] }}" alt="{{ config('languages')[App::getLocale()]['name'] }}" style="width: 20px; height: 20px;">
              {{ config('languages')[App::getLocale()]['name'] }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach (config('languages') as $lang => $language)
                <li>
                  <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                    <img src="{{ $language['flag'] }}" alt="{{ $language['name'] }}" style="width: 20px; height: 20px;">
                    {{ $language['name'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
                        <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:black" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    @if(auth()->user()->photo)
        <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="User Photo" class="img-fluid rounded-circle" width="30" height="30">
    @else
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
    @endif
    &nbsp; {{ Auth::user()->name }}
</a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}">
                                <svg class="bi"><use xlink:href="#people"/></svg>
                                {{ __('profile') }}</a>
                                <a class="dropdown-item" href="{{ route('profile.settings') }}"><svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                                {{ __('settings') }} </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   <svg class="bi"><use xlink:href="#door-closed"/></svg>
                                   {{ __('logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</div>




</body>
</html>
