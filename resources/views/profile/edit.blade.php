@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:80px">
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto" style="width: 140px;">
                                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                @if(auth()->user()->photo)
                                                    <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="User Photo" class="img-fluid rounded">
                                                @else
                                                    <p>No photo available</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $user->name }}</h4>
                                            <p class="mb-0">{{ Auth::user()->email }}</p>
                                            Last seen {{ \Carbon\Carbon::parse($user->last_login_at)->diffForHumans() }}
                                            <div class="mt-2">
                                                <label for="photo" class="btn btn-primary disabled">
                                                    <i class="fa fa-fw fa-camera"></i>
                                                    <span>Change Photo</span>
                                                    <input id="photo" type="file" name="photo" style="display: none;" accept="image/*">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center text-sm-right">
                                            <span class="badge badge-secondary">administrator</span>
                                            <div class="text-muted"><small>Modifier le: {{ $user->updated_at }}</small></div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Paramettre</a></li>
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">{{ __('E-Mail Address') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">{{ __('Phone') }}</label>
                                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" autocomplete="phone">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="address">{{ __('Address') }}</label>
                                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" autocomplete="address">
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                              </div>
                                            <div class="form-group">
                                                <label for="photo">{{ __('Modifier la photo') }}</label>
                                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" accept="image/*">
                                                @error('photo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-0 mt-2" style="display: flex; justify-content: right; align-items: center;">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Modifier Profil') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="px-xl-3">
                                <a class="btn btn-block btn-secondary" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>
                                    <span>{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Assistant Client</h6>
                            <p class="card-text">Get fast, free help from our friendly assistants.</p>
                            <button type="button" class="btn btn-primary">Contactez-nous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
        </li>
        <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
</div>
@endsection
