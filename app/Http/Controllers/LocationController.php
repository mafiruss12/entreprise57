<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
     public function save(Request $request)
    {
        // Validation des données de requête
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Mise à jour de la localisation dans la table des utilisateurs
        $user = auth()->user(); // Récupère l'utilisateur authentifié
        
        if ($user) {
            // Mettre à jour l'attribut location de l'utilisateur
            $user->location = json_encode([
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                
            ]);
            
            $user->save();
            
            return response()->json(['message' => 'Localisation de l\'utilisateur mise à jour avec succès'], 200);
        } else {
            return response()->json(['error' => 'Utilisateur non trouvé'], 404);
        }
    }
}
