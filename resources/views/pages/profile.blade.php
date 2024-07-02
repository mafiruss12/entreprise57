<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <!-- Mettez ici les balises meta et les liens CSS nécessaires -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Ajoutez jQuery pour faciliter la mise en œuvre de votre question -->
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Profil</title>
    <link rel="icon" type="image/jpg" href="images/logo.jpg">



<link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap-5.3.3-dist/js/color-modes.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
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

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap-5.3.3-dist/css/dashboard.css" rel="stylesheet"></head>
<body>
<div id="app">
        @include('layouts.app')
    </div>

    <script>
        $(document).ready(function() {
            // Vérifier si la géolocalisation est activée
            if ("geolocation" in navigator) {
                // La géolocalisation est disponible
                navigator.geolocation.getCurrentPosition(function(position) {
                    // Succès : l'utilisateur a autorisé la localisation
                    console.log("Localisation activée :", position);
                }, function(error) {
                    // Erreur : l'utilisateur a refusé la localisation ou une erreur est survenue
                    console.error("Erreur de géolocalisation :", error);
                    // Afficher un message ou un popup pour demander à l'utilisateur d'activer la localisation
                    if (error.code === error.PERMISSION_DENIED) {
                        var enableLocation = confirm("Pour utiliser cette fonctionnalité, veuillez activer la localisation de votre navigateur. Cliquez sur OK pour activer.");
                        if (enableLocation) {
                            // Rediriger vers les paramètres de localisation
                            window.location.href = "chrome://settings/content/location";
                        } else {
                            alert("Vous avez refusé l'activation de la localisation. Certaines fonctionnalités peuvent ne pas être disponibles.");
                        }
                    }
                });
            } else {
                // La géolocalisation n'est pas disponible sur ce navigateur
                console.warn("La géolocalisation n'est pas supportée par ce navigateur.");
            }
        });
    </script>

    
       

    
    </main>
    </div>
   
    <!doctype html>
  <head>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
  <symbol id="door-closed" viewBox="0 0 16 16">
    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
  </symbol>
  <symbol id="file-earmark" viewBox="0 0 16 16">
    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
  </symbol>
  <symbol id="file-earmark-text" viewBox="0 0 16 16">
    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
  </symbol>
  <symbol id="gear-wide-connected" viewBox="0 0 16 16">
    <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
  </symbol>
  <symbol id="graph-up" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
  </symbol>
  <symbol id="house-fill" viewBox="0 0 16 16">
    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
  </symbol>
  <symbol id="list" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
  </symbol>
  <symbol id="people" viewBox="0 0 16 16">
    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
  </symbol>
  <symbol id="plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </symbol>
  <symbol id="puzzle" viewBox="0 0 16 16">
    <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238l-.244-2.855zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557H4.605z"/>
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
  </symbol>
</svg>


<div class="container-fluid  " style="posi">
  <div class="row ">
   <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary " style="height:100vh;position:fixed;top: 55px;">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3" style="overflow-y: auto;">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 active" href="{{ route('dashboard') }}" class=" aria-current="page" href="#">
            <svg class="bi"><use xlink:href="#house-fill"/></svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ route('services') }}" class="">
          <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 448V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zM96 96c-8.8 0-16 7.2-16 16s7.2 16 16 16h80c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zm0 64c-8.8 0-16 7.2-16 16s7.2 16 16 16h80c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zm54.2 221.8L160 349l16.7 55.6c1.9 6.3 7.4 10.8 13.9 11.3s12.8-2.9 15.7-8.8l10.6-21.3c.6-1.2 1.8-1.9 3.1-1.9s2.5 .7 3.1 1.9l10.6 21.3c2.7 5.4 8.3 8.8 14.3 8.8h40c8.8 0 16-7.2 16-16s-7.2-16-16-16H257.9l-6.2-12.4c-6-12-18.3-19.6-31.7-19.6c-8.6 0-16.8 3.1-23.1 8.6l-11.3-37.5C182.2 311.7 171.8 304 160 304s-22.2 7.7-25.6 19.1l-14.9 49.5c-2 6.8-8.3 11.4-15.3 11.4H96c-8.8 0-16 7.2-16 16s7.2 16 16 16h8.2c21.2 0 39.9-13.9 46-34.2z"/></svg>            Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="http://127.0.0.1:8000/chat">
          <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0C110.3 0 96 14.3 96 32V224h96V192c0-35.3 28.7-64 64-64H480V32c0-17.7-14.3-32-32-32H128zM256 160c-17.7 0-32 14.3-32 32v32h96c35.3 0 64 28.7 64 64V416H576c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32H256zm240 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM64 256c-17.7 0-32 14.3-32 32v13L187.1 415.9c1.4 1 3.1 1.6 4.9 1.6s3.5-.6 4.9-1.6L352 301V288c0-17.7-14.3-32-32-32H64zm288 84.8L216 441.6c-6.9 5.1-15.3 7.9-24 7.9s-17-2.8-24-7.9L32 340.8V480c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V340.8z"/></svg>
                      Chat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#" class=">
          <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>                      Localisation
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#graph-up"/></svg>
            Reports
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#puzzle"/></svg>
            Integrations
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <svg class="bi"><use xlink:href="#plus-circle"/></svg>
        </a>
      </h6>
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Year-end sale
          </a>
        </li>
      </ul>

      <hr class="my-3">

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
            Settings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <svg class="bi"><use xlink:href="#door-closed"/></svg>
            {{ __('Logout') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  


    <style>
  body{
background-color:#f1f5f9;
}
.card {
    border: 0;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,20,.08), 0 1px 2px rgba(0,0,20,.08);
}
.rounded-bottom {
    border-bottom-left-radius: 0.375rem !important;
    border-bottom-right-radius: 0.375rem !important;
}

.avatar-xxl {
    height: 7.5rem;
    width: 7.5rem;
}
.nav-lt-tab {
    border-top: 1px solid var(--dashui-border-color);
}
.px-4 {
    padding-left: 1rem!important;
    padding-right: 1rem!important;
}

.avatar-sm {
    height: 2rem;
    width: 2rem;
}

.nav-lt-tab .nav-item {
    margin: -0.0625rem 1rem 0;
}
.nav-lt-tab .nav-item .nav-link {
    border-radius: 0;
    border-top: 2px solid transparent;
    color: var(--dashui-gray-600);
    font-weight: 500;
    padding: 1rem 0;
}

.pt-20 {
    padding-top: 8rem!important;
}

.avatar-xxl.avatar-indicators:before {
    bottom: 5px;
    height: 16%;
    right: 17%;
    width: 16%;
}
.avatar-online:before {
    background-color: #198754;
}
.avatar-indicators:before {
    border: 2px solid #FFF;
    border-radius: 50%;
    bottom: 0;
    content: "";
    display: table;
    height: 30%;
    position: absolute;
    right: 5%;
    width: 30%;
}

.avatar-xxl {
    height: 7.5rem;
    width: 7.5rem;
}
.mt-n10 {
    margin-top: -3rem!important;
}
.me-2 {
    margin-right: 0.5rem!important;
}
.align-items-end {
    align-items: flex-end!important;
}
.rounded-circle {
    border-radius: 50%!important;
}
.border-2 {
    --dashui-border-width: 2px;
}
.border {
    border: 1px solid #dcdcdc !important;
}

.py-6 {
    padding-bottom: 1.5rem!important;
    padding-top: 1.5rem!important;
}

.bg-gray-300 {
    --dashui-bg-opacity: 1;
    background-color: #cbd5e1!important;
}

.mb-6 {
    margin-bottom: 1.5rem!important;
}
.align-items-center {
    align-items: center!important;
}


.mb-4 {
    margin-bottom: 1rem!important;
}

.mb-8 {
    margin-bottom: 2rem!important;
}
.shadow-none {
    box-shadow: none!important;
}

.card>.list-group:last-child {
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    border-bottom-width: 0;
}
.card>.list-group:first-child {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    border-top-width: 0;
}
.card>.list-group {
    border-bottom: inherit;
    border-top: inherit;
}

.avatar-xl {
    height: 5rem;
    width: 5rem;
}
.avatar {
    display: inline-block;
    height: 3rem;
    position: relative;
    width: 3rem;
}
.mt-n7 {
    margin-top: -1.75rem!important;
}
.ms-4 {
    margin-left: 1rem!important;
}

.avatar img {
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
}
</style>
<div class="container " style="margin-top:100px;">

  <div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
      <!-- Bg -->
      <div class="pt-20 rounded-top" style="background:
        url(images/th.png) no-repeat;
        background-size: cover;height:50vh">
      </div>
      <div class="card rounded-bottom smooth-shadow-sm">
        <div class="d-flex align-items-center justify-content-between
          pt-4 pb-6 px-4">
          <div class="d-flex align-items-center">
            <div class="avatar-xxl avatar-indicators avatar-online me-2
              position-relative d-flex justify-content-end
              align-items-end mt-n10">
              <img src="https://bootdey.com/img/Content/avatar/avatar8.png" class="avatar-xxl
              rounded-circle border border-2 " alt="Image">
            </div>
            <div class="lh-1">
              <h2 class="mb-0"> {{ Auth::user()->name }}
             
              </h2>   <a href="#!" class="text-decoration-none">
                
              <p class="mb-0 d-block">{{ Auth::user()->email }}</p>
            </div>
          </div>
          <div>
            <a href="{{ route('profile.edit') }}"  class="btn btn-outline-primary
              d-none d-md-block">Edit Profile</a>
          </div>
        </div>
        <div class="container">
    <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <div style="display: flex; align-items: center;">
                    @foreach($services as $service)
                        <div class="btn btn-primary btn-sm mx-1">{{ $service->title }}</div>
                    @endforeach
                </div>
            </a>
        </li>
    </ul>
</div>



    </div>
  </div>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- resources/views/services_all.blade.php -->

<div class="container">
    <h1>Mes Services</h1>
    <ul>
        @foreach($services as $service)
            <li>{{ $service->name }} - {{ $service->description }}</li>
        @endforeach
    </ul>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <div class="py-6">
    <div class="row">
      <div class="col-lg-4 col-12">
        <!-- card -->
        <div class="card mb-5 rounded-3">
          <div>
            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
          </div>
          <!-- avatar -->
          <div class="avatar avatar-xl mt-n7 ms-4">
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image" class="rounded-circle border-4
              border-white-color-40">
          </div>
          <!-- card body -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="mb-1">Karina Clark</h4>
            <p>UX Desginer</p>
            <div>
              <!-- Dropdown -->
              <div class="d-flex justify-content-between
                align-items-center">
                <a href="#!" class="btn btn-outline-primary">Follow</a>
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOne">
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2 icon-xxs dropdown-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Report</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>Block</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <!-- card -->
        <div class="card mb-5 rounded-3">
          <div>
            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
          </div>
          <!-- avatar -->
          <div class="avatar avatar-xl mt-n7 ms-4">
            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Image" class="rounded-circle border-4
              border-white-color-40">
          </div>
          <!-- card body -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="mb-1">Dianna Smiley</h4>
            <p>Full Stack Developer</p>
            <div>
              <!-- Dropdown -->
              <div class="d-flex justify-content-between
                align-items-center">
                <a href="#!" class="btn btn-outline-secondary">Following</a>
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuTwo">
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2 icon-xxs dropdown-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Report</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>Block</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <!-- card -->
        <div class="card mb-5 rounded-3">
          <div>
            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
          </div>
          <!-- avatar -->
          <div class="avatar avatar-xl mt-n7 ms-4">
            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Image" class="rounded-circle border-4
              border-white-color-40">
          </div>
          <!-- card body -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="mb-1">Anne Brewer</h4>
            <p>Content Marketing Managers</p>
            <div>
              <!-- Dropdown -->
              <div class="d-flex justify-content-between
                align-items-center">
                <a href="#!" class="btn btn-outline-primary">Follow</a>
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownMenuThree" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuThree">
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2 icon-xxs dropdown-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Report</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>Block</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <!-- card -->
        <div class="card mb-5 rounded-3">
          <div>
            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
          </div>
          <!-- avatar -->
          <div class="avatar avatar-xl mt-n7 ms-4">
            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Image" class="rounded-circle border-4
              border-white-color-40">
          </div>
          <!-- card body -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="mb-1">Diane Baughman</h4>
            <p>Senior UX Designer</p>
            <div>
              <!-- Dropdown -->
              <div class="d-flex justify-content-between
                align-items-center">
                <a href="#!" class="btn btn-outline-primary">Follow</a>
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuFour" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuFour">
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2 icon-xxs dropdown-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Report</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>Block</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <!-- card -->
        <div class="card mb-5 rounded-3">
          <div>
            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
          </div>
          <!-- avatar -->
          <div class="avatar avatar-xl mt-n7 ms-4">
            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Image" class="rounded-circle border-4
              border-white-color-40">
          </div>
          <!-- card body -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="mb-1">Roland Thomas</h4>
            <p>Front-End Enginee</p>
            <div>
              <!-- Dropdown -->
              <div class="d-flex justify-content-between
                align-items-center">
                <a href="#!" class="btn btn-outline-secondary">Following</a>
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuFive" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuFive">
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2 icon-xxs dropdown-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Report</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>Block</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <!-- card -->
        <div class="card mb-5 rounded-3">
          <div>
            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
          </div>
          <!-- avatar -->
          <div class="avatar avatar-xl mt-n7 ms-4">
            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Image" class="rounded-circle border-4
              border-white-color-40">
          </div>
          <!-- card body -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="mb-1">Joshua George</h4>
            <p>UX Desginer</p>
            <div>
              <!-- Dropdown -->
              <div class="d-flex justify-content-between
                align-items-center">
                <a href="#!" class="btn btn-outline-primary">Follow</a>
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuSix" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSix">
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2 icon-xxs dropdown-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Report</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash me-2 icon-xxs dropdown-item-icon"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>Block</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            </div>
            
    </div>

    </main>
  </div>
</div>

@section('content')

<div class="card-body">
                    <div id="map" style="height: 500px;"></div>
                </div>
<!-- Inclure les fichiers CSS et JS de Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Script pour initialiser la carte et gérer la géolocalisation -->
<script>
    $(document).ready(function() {
        // Vérifier si la géolocalisation est activée
        if ("geolocation" in navigator) {
            // La géolocalisation est disponible
            navigator.geolocation.getCurrentPosition(function(position) {
                // Succès : l'utilisateur a autorisé la localisation
                console.log("Localisation activée :", position);

                // Récupérer les coordonnées
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;

                // Initialiser la carte avec les coordonnées de l'utilisateur
                const map = L.map('map').setView([lat, lon], 13);

                // Ajouter une couche de tuiles (tile layer)
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Ajouter un marqueur à la position de l'utilisateur
                L.marker([lat, lon]).addTo(map)
                    .bindPopup('Vous êtes ici.')
                    .openPopup();

                // Envoyer les coordonnées au serveur pour les enregistrer (facultatif)
                $.ajax({
                    url: '/save-location', // Changez l'URL selon votre route backend
                    method: 'POST',
                    data: {
                        latitude: lat,
                        longitude: lon,
                        _token: '{{ csrf_token() }}' // Pour les applications Laravel
                    },
                    success: function(response) {
                        console.log('Localisation enregistrée avec succès.');
                    },
                    error: function(error) {
                        console.error('Erreur lors de l\'enregistrement de la localisation :', error);
                    }
                });
            }, function(error) {
                // Erreur : l'utilisateur a refusé la localisation ou une erreur est survenue
                console.error("Erreur de géolocalisation :", error);
                // Afficher un message ou un popup pour demander à l'utilisateur d'activer la localisation
                if (error.code === error.PERMISSION_DENIED) {
                    var enableLocation = confirm("Pour utiliser cette fonctionnalité, veuillez activer la localisation de votre navigateur. Cliquez sur OK pour activer.");
                    if (enableLocation) {
                        // Rediriger vers les paramètres de localisation
                        window.location.href = "chrome://settings/content/location";
                    } else {
                        alert("Vous avez refusé l'activation de la localisation. Certaines fonctionnalités peuvent ne pas être disponibles.");
                    }
                }
            });
        } else {
            // La géolocalisation n'est pas disponible sur ce navigateur
            console.warn("La géolocalisation n'est pas supportée par ce navigateur.");
        }
    });
</script>
@endsection

<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="bootstrap-5.3.3-dist/js/dashboard.js"></script>
</body>
</html>
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
        <form action="{{ route('services') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom du Service</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
