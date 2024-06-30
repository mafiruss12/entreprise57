<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceRequestController extends Controller
{
    public function store(Request $request)
    {
        // Valider la requête
        $validatedData = $request->validate([
            'artisan_service_id' => 'required|exists:artisan_services,id',
            'description' => 'required|string',
        ]);

        // Créer une nouvelle demande de service
        ServiceRequest::create([
            'client_id' => Auth::id(),
            'artisan_service_id' => $validatedData['artisan_service_id'],
            'description' => $validatedData['description'],
            'status' => 'pending',
            'scheduled_at' => null, // ou toute autre logique pour planifier le service
        ]);

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Demande de service créée avec succès.');
    }
}
