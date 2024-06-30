<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        // Récupérer l'ID du client connecté
        $clientId = Auth::id();

        // Récupérer les services demandés par le client connecté
        $serviceRequests = ServiceRequest::where('client_id', $clientId)
        ->with(['artisan', 'client', 'service'])
        ->get();

        // Retourner la vue avec la liste des services
        return view('services', compact('serviceRequests'));
    }
}
