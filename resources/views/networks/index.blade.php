<!DOCTYPE html>
<html>
<head>
    <title>Plan d'Adressage Réseau</title>
</head>
<body>
    <h1>Plan d'Adressage Réseau</h1>
    <ul>
        @foreach ($networks as $network)
            <li>{{ $network['country'] }}: {{ $network['network_address'] }}</li>
        @endforeach
    </ul>
</body>
</html>

