<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <!-- Balises meta et liens CSS nécessaires -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Dashboard -Entreprise57</title>

    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        body {
            margin-top: 20px;
            background: #dcdcdc;
        }
        
        .widget-signups__list {
            text-align: center;
        }

        .widget-signups__list > a {
            vertical-align: top;
            margin: 4px 2px;
            display: inline-block;
        }

        .widget-signups__list .avatar-char {
            background-color: #eee;
            color: #000;
        }

        .widget-signups__list .avatar-char,
        .widget-signups__list .avatar-img {
            margin: 0;
        }

        .avatar-img {
            border-radius: 2px;
            width: 3rem;
            height: 3rem;
            margin-right: 1.2rem;
        }

        .avatar-char {
            line-height: 2.9rem;
            font-size: 1.2rem;
            text-align: center;
            font-style: normal;
        }

        .card-title {
            font-size: 1.25rem;
            line-height: 140%;
            margin-top: -5px;
            margin-bottom: 2.1rem;
        }

        .card-subtitle:not(:last-child) {
            margin-bottom: 2rem;
        }

        .card-subtitle {
            font-size: 1rem;
            font-weight: 400;
            margin-top: -1.45rem;
            line-height: 1.5;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="app">
    @include('layouts.app')
</div>

<script>
    $(document).ready(function() {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log("Localisation activée :", position);
            }, function(error) {
                console.error("Erreur de géolocalisation :", error);
                if (error.code === error.PERMISSION_DENIED) {
                    var enableLocation = confirm("Pour utiliser cette fonctionnalité, veuillez activer la localisation de votre navigateur. Cliquez sur OK pour activer.");
                    if (enableLocation) {
                        window.location.href = "chrome://settings/content/location";
                    } else {
                        alert("Vous avez refusé l'activation de la localisation. Certaines fonctionnalités peuvent ne pas être disponibles.");
                    }
                }
            });
        } else {
            console.warn("La géolocalisation n'est pas supportée par ce navigateur.");
        }
    });
</script>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258a1.156 1.156 0 0 0 .732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 4.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zM8 3a.5.5 0 0 1-.5-.5V.675a.5.5 0 0 1 1 0v1.85A.5.5 0 0 1 8 3zm3.5 1.74a.5.5 0 0 1 0-.707l1.174-1.175a.5.5 0 1 1 .707.707L12.207 4.74a.5.5 0 0 1-.707 0zm4.725 3.26a.5.5 0 0 1-.5.5h-1.85a.5.5 0 1 1 0-1h1.85a.5.5 0 0 1 .5.5zM12.207 11.26a.5.5 0 0 1 .707 0l1.175 1.174a.5.5 0 1 1-.707.707l-1.174-1.175a.5.5 0 0 1 0-.707zm-7.67-7.67a.5.5 0 0 1 0 .707L3.362 5.472a.5.5 0 0 1-.707-.707L4.53 3.362a.5.5 0 0 1 .707 0zM4.5 8a.5.5 0 0 1-.5.5H2.15a.5.5 0 0 1 0-1h1.85a.5.5 0 0 1 .5.5zm.658 3.768a.5.5 0 0 1 .707.707L4.69 13.65a.5.5 0 1 1-.707-.707l1.175-1.174zM8 13a.5.5 0 0 1 .5.5v1.85a.5.5 0 0 1-1 0v-1.85a.5.5 0 0 1 .5-.5z"/>
    </symbol>
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258a1.156 1.156 0 0 0 .732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 4.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zM8 3a.5.5 0 0 1-.5-.5V.675a.5.5 0 0 1 1 0v1.85A.5.5 0 0 1 8 3zm3.5 1.74a.5.5 0 0 1 0-.707l1.174-1.175a.5.5 0 1 1 .707.707L12.207 4.74a.5.5 0 0 1-.707 0zm4.725 3.26a.5.5 0 0 1-.5.5h-1.85a.5.5 0 1 1 0-1h1.85a.5.5 0 0 1 .5.5zM12.207 11.26a.5.5 0 0 1 .707 0l1.175 1.174a.5.5 0 1 1-.707.707l-1.174-1.175a.5.5 0 0 1 0-.707zm-7.67-7.67a.5.5 0 0 1 0 .707L3.362 5.472a.5.5 0 0 1-.707-.707L4.53 3.362a.5.5 0 0 1 .707 0zM4.5 8a.5.5 0 0 1-.5.5H2.15a.5.5 0 0 1 0-1h1.85a.5.5 0 0 1 .5.5zm.658 3.768a.5.5 0 0 1 .707.707L4.69 13.65a.5.5 0 1 1-.707-.707l1.175-1.174zM8 13a.5.5 0 0 1 .5.5v1.85a.5.5 0 0 1-1 0v-1.85a.5.5 0 0 1 .5-.5z"/>
    </symbol>
</svg>





    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
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
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
        </ul>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggle = document.getElementById('bd-theme');
            const themeItems = document.querySelectorAll('.dropdown-item');
            const body = document.body;

            themeItems.forEach(item => {
                item.addEventListener('click', function () {
                    themeItems.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                        btn.querySelector('svg.d-none')?.classList.add('d-none');
                    });

                    this.classList.add('active');
                    this.setAttribute('aria-pressed', 'true');
                    this.querySelector('svg.d-none')?.classList.remove('d-none');

                    const theme = this.getAttribute('data-bs-theme-value');
                    switchTheme(theme);
                });
            });

            function switchTheme(theme) {
                if (theme === 'light') {
                    body.classList.remove('theme-dark');
                    body.classList.add('theme-light');
                } else if (theme === 'dark') {
                    body.classList.remove('theme-light');
                    body.classList.add('theme-dark');
                } else {
                    body.classList.remove('theme-light', 'theme-dark');
                }

                localStorage.setItem('selectedTheme', theme);
            }

            const savedTheme = localStorage.getItem('selectedTheme') || 'auto';
            switchTheme(savedTheme);

            document.querySelector(`[data-bs-theme-value="${savedTheme}"]`).classList.add('active');
            document.querySelector(`[data-bs-theme-value="${savedTheme}"]`).setAttribute('aria-pressed', 'true');
            document.querySelector(`[data-bs-theme-value="${savedTheme}"] svg.d-none`)?.classList.remove('d-none');
        });
    </script>



@include('layouts.sidebar')



    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top:100px">
  

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="container">
  <!-- Modal Bootstrap pour demander la pièce d'identité -->
<!-- Modal Bootstrap pour demander la pièce d'identité -->
<div class="modal fade" id="idVerificationModal" tabindex="-1" role="dialog" aria-labelledby="idVerificationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="idVerificationModalLabel">Vérification de l'identité</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="idVerificationForm" method="POST" enctype="multipart/form-data" action="{{ route('verify.id') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idDocument">Télécharger votre pièce d'identité</label>
                        <input type="file" class="form-control" id="idDocument" name="idDocument" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script pour afficher le popup si l'utilisateur n'a pas vérifié son identité -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @auth // Vérifie si l'utilisateur est connecté
            @if(Auth::user()->id_verified && !Auth::user()->id_approved)
            @elseif(!Auth::user()->id_verified)
                alert('Votre pièce d\'identité a été rejetée. Veuillez soumettre une nouvelle pièce.'); // Message d'alerte si la pièce d'identité est rejetée
                $('#idVerificationModal').modal('show'); // Affiche le modal si la pièce d'identité est vérifiée mais non approuvée
                @endif
        @endauth
    });
</script>
<div class="Container">
    <h3>Filtrer Par </h3>
    <div class="card">
       <div class="card-body">
        <form method="GET" action="{{ route('dashboard.client') }}">
            <div class="row">
                <div class="col-3">
                    <span>Services</span>
                    <input type="text" name="service" class="form-control" placeholder="Rechercher un service" value="{{ request('service') }}">
                </div> 
                <div class="col-3">
                    <span>Localisation</span>
                    <input type="text" name="location" class="form-control" placeholder="Rechercher une Localisation" value="{{ request('location') }}">
                </div> 
                <div class="col-3">
                    <span>Prestataire</span>
                    <input type="text" name="prestataire" class="form-control" placeholder="Rechercher un Prestataire" value="{{ request('prestataire') }}">
                </div> 
                <div class="col-3">
                    <span>&nbsp;</span>
                    <select name="availability" class="form-control">
                        <option value="" class="disabled">Selecionner une Disponibilité</option>
                        <option value="disponible" {{ request('availability') == 'non disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="non disponible" {{ request('availability') == 'non disponible' ? 'selected' : '' }}>Non Disponible</option>
                    </select>
                </div> 
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Filtrer</button>
            </div>
        </form>
      </div>   
  </div>
</div>


<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
@foreach ($services as $service)
    <div class="col mt-5">
        <div class="card radius-10 border-start border-0 border-3 border-info">
            <div class="title">
                @if ($service->photo)
                    <img src="{{ asset('storage/' . $service->photo) }}" alt="Service Photo" class="" style="height: 120px; width: 100%;">
                @else
                    <img src="{{ asset('images/default-avatar.jpg') }}" alt="Default Service Photo" class="" style="height: 120px; width: 100%;">
                @endif
            </div>    
            <div class="card-body align-items-center">
                <div class="d-flex">   
                    <div>
                        @if ($service->user->photo)
                            <img src="{{ asset('storage/' . $service->user->photo) }}" alt="User Avatar" class="rounded-circle" style="width: 50px; height: 50px;">
                        @else
                            <img src="{{ asset('images/default-avatar.jpg') }}" alt="Default Avatar" class="rounded-circle" style="width: 50px; height: 50px;">
                        @endif
                    </div>
                    <div class="ms-3">
                        <h4 class="my-1 text-info">{{ $service->user->name }} {{ $service->user->surname }}</h4>
                        <p class="mb-0 badge bg-primary rounded-pill d-inline">{{ $service->title }}</p>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
            </div> 
            <button class="btn btn-primary w-30 request-service-button" data-service-id="{{ $service->id }}" data-prestataire-id="{{ $service->user_id }}" style="position:absolute;">Demander un service</button>
        </div>
    </div>
@endforeach

<!-- Add a modal for entering desired date and description -->
<div class="modal fade" id="serviceRequestModal" tabindex="-1" aria-labelledby="serviceRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceRequestModalLabel">Request Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="serviceRequestForm">
                    <div class="mb-3">
                        <label for="desired_date" class="form-label">Desired Date</label>
                        <input type="date" class="form-control" id="desired_date" name="desired_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitServiceRequest">Request Service</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.request-service-button').forEach(button => {
        button.addEventListener('click', function() {
            const serviceId = this.getAttribute('data-service-id');
            const prestataireId = this.getAttribute('data-prestataire-id');
            
            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('serviceRequestModal'));
            modal.show();

            document.getElementById('submitServiceRequest').onclick = function() {
                const desiredDate = document.getElementById('desired_date').value;
                const description = document.getElementById('description').value;

                fetch('{{ route('request-service') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ 
                        service_id: serviceId, 
                        prestataire_id: prestataireId,
                        desired_date: desiredDate,
                        description: description
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Response:', data);  // Log the response data for debugging
                    if (data.status) {
                        button.innerText = data.status === 'pending' ? 'Pending' : 'Accepted';
                        button.disabled = true;
                    }
                    modal.hide();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error processing your request.');
                });
            };
        });
    });
</script>




</div>



                    </div>
                </div>
                </div>
                </div>
</div>
       
          

   
    </main>
  </div>
</div>

</body>
</html>
