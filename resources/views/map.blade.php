
@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="map" style="height: 400px;"></div>
    </div>
@endsection

@push('scripts')
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });

            // Exemple de marqueur artisan (remplacez par vos données réelles)
            var artisanLocations = [
                {lat: -34.397, lng: 150.644},
                {lat: -34.0, lng: 151.0},
                // Ajoutez d'autres coordonnées d'artisans ici
            ];

            artisanLocations.forEach(function(location) {
                new google.maps.Marker({
                    position: location,
                    map: map,
                    title: 'Artisan'
                });
            });
        }
    </script>
@endpush
