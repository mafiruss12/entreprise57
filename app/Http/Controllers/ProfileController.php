<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        // Supposons que l'utilisateur connecté est récupéré
        $user = auth()->user();

        // Initialiser $services comme une collection vide par défaut
        $services = collect();

        // Si l'utilisateur est un prestataire, récupérer ses services
        if ($user->role === 'prestataire') {
            $services = $user->services; // Récupérer les services associés à l'utilisateur
        }
        
        return view('pages.profile', compact('user','services'));
    }
    
    public function settings()
    {
        $user = Auth::user();
        $services = $user->services; // Récupère les services de l'utilisateur
        
        return view('profile.settings', compact('user', 'services'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajustez la taille maximale selon vos besoins
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        // Gestion de l'upload de la photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('photos', $filename, 'public');

            // Supprimer l'ancienne photo si elle existe
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }

            // Mettre à jour la photo de l'utilisateur
            $user->photo = $path;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil mis à jour avec succès.');
    }
}
