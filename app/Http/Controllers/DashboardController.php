<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
  // Récupérer tous les utilisateurs de type client
  $users = User::where('role', 'prestataire')->get();
  $users2 = User::all(); // Fetch all users

  // Retourner la vue avec la liste des clients
  return view('dashboard.index', compact('users'));
    }
    // app/Http/Controllers/DashboardController.php

public function showClients()
{
    $user = Auth::user();

    if ($user->role === 'prestataire') {
        $serviceRequests = ServiceRequest::where('prestataire_id', $user->id)->with('client')->get();
        $clients = $serviceRequests->pluck('client');
    } else {
        $clients = collect(); // Empty collection if not a prestataire
    }

    return view('dashboard.index', compact('clients'));
}

}
