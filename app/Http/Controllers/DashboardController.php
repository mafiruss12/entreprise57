<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
  // Récupérer tous les utilisateurs de type client
  $users = User::where('role', 'prestataire')->get();

  // Retourner la vue avec la liste des clients
  return view('dashboard.index', compact('users'));
    }
}
