@include('dashboard.index')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Services Demandés</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@section('content')
 <div class="container mt-5">
        <h1>Liste des Services Demandés</h1>
        <div class="row">
            @foreach($serviceRequests as $request)
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card bg-dark text-white">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">{{ $request->artisan->name }}</p>
                                <h4 class="mb-0">{{ $request->service->description }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            @if($request->status === 'pending')
                                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">En attente de validation</span></p>
                            @elseif($request->status === 'completed')
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Terminé</span></p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    

    </div>
</body>
</html>
