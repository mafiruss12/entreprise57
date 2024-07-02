<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $services = $user->services;

        return view('services', compact('user', 'services'));
    }
    
    public function allServices()
    {
        $user = Auth::user();
        $services = $user->services;

        return response()->json(['services' => $services]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        $service = new Service;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->user_id = $user->id; // Assigner le service à l'utilisateur connecté
        $service->save();

        return redirect()->route('services')->with('success', 'Service ajouté avec succès');
    }
}
