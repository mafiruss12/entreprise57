<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Afficher la liste des services
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    // Afficher le formulaire pour créer un nouveau service
    public function create()
    {
        return view('services.create');
    }

    // Enregistrer un nouveau service
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'availability' => 'required|string',
            'location' => 'required|string',
            'photo' => 'nullable|string',
        ]);

        // Créer et sauvegarder le nouveau service
        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->category = $request->input('category');
        $service->availability = $request->input('availability');
        $service->location = $request->input('location');
        $service->photo = $request->input('photo');
        $service->user_id = auth()->id(); // Lier le service à l'utilisateur connecté
        $service->save();

        return redirect()->route('services');
    }

    // Afficher un service spécifique
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // Afficher le formulaire pour éditer un service existant
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Mettre à jour un service existant
    public function update(Request $request, Service $service)
    {
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'availability' => 'required|string',
            'location' => 'required|string',
            'photo' => 'nullable|string',
        ]);

        // Mettre à jour le service
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->category = $request->input('category');
        $service->availability = $request->input('availability');
        $service->location = $request->input('location');
        $service->photo = $request->input('photo');
        $service->save();

        return redirect()->route('services.index');
    }

    // Supprimer un service existant
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
