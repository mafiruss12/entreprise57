<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();
        
        // Supprimez l'utilisateur
        $user->delete();

        // Déconnectez l'utilisateur après la suppression
        Auth::logout();

        // Redirigez vers la page d'accueil avec un message de succès
        return redirect('/')->with('success', 'Votre compte a été supprimé avec succès.');
    }
    public function verifyId(Request $request)
    {
        $request->validate([
            'idDocument' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        $user = Auth::user();
        if ($request->hasFile('idDocument')) {
            $path = $request->file('idDocument')->store('id_documents', 'public');
            $user->id_document = $path;
            $user->id_verified = true; // Champ pour indiquer que le document a été soumis
            $user->id_approved = false; // Champ pour indiquer si le document est approuvé
            $user->save();
        }

        return redirect()->back()->with('success', 'Votre pièce d\'identité a été soumise avec succès et est en attente de validation.');
    }

    public function approveId($userId)
    {
        $user = User::findOrFail($userId);
        $user->id_approved = true;
        $user->save();

        // Envoyer une notification ou un email pour informer l'utilisateur
        // Vous pouvez utiliser les notifications Laravel pour cela

        return redirect()->back()->with('success', 'La pièce d\'identité a été approuvée avec succès.');
    }

    public function rejectId($userId)
    {
        $user = User::findOrFail($userId);
        $user->id_verified = false; // Rejet de la pièce
        $user->id_approved = false;
        $user->id_document = null; // Optionnel : supprimer le document rejeté
        $user->save();

        // Envoyer une notification ou un email pour informer l'utilisateur
        // Vous pouvez utiliser les notifications Laravel pour cela

        return redirect()->back()->with('error', 'La pièce d\'identité a été rejetée. Veuillez soumettre une nouvelle pièce.');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Old password is incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully');
    }
    public function enableTwoFactor(Request $request)
    {
        $user = Auth::user();
        // Logique pour activer l'authentification à deux facteurs
        // Génération d'un secret, affichage d'un QR code, etc.

        // Exemple d'activation :
        $user->two_factor_secret = 'secret_key_here'; // Remplacez par la logique réelle
        $user->save();

        return back()->with('success', 'Two-factor authentication enabled');
    }

}
