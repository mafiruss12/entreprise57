<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $services = $user->services; // Récupère les services de l'utilisateur
        
        return view('pages.profile', compact('user', 'services'));
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
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as per your requirement
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
       // Handle avatar upload
   
       if ($request->hasFile('avatar')) {
        // Delete the old avatar if it exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Store the new avatar
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $avatarPath;
    }
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil mis à jour avec succès');
    }
}

