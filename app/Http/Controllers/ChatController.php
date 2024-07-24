<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatRequest; // Assurez-vous d'importer la classe ChatRequest

class ChatController extends Controller
{
    // Envoyer une demande de chat
    public function sendRequest(Request $request)
    {
        $chatRequest = ChatRequest::create([
            'client_id' => auth()->id(),
            'prestataire_id' => $request->prestataire_id,
        ]);

        return response()->json(['message' => 'Demande envoyée avec succès.']);
    }

    // Accepter une demande de chat
    public function acceptRequest($id)
    {
        $chatRequest = ChatRequest::find($id);
        $chatRequest->update(['is_accepted' => true]);

        return response()->json(['message' => 'Demande acceptée avec succès.']);
    }

    // Liste des discussions acceptées
    public function getChats()
    {
        $user = auth()->user();
        $chats = ChatRequest::where(function ($query) use ($user) {
            $query->where('client_id', $user->id)
                  ->orWhere('prestataire_id', $user->id);
        })->where('is_accepted', true)->get();

        return view('chats.index', compact('chats'));
    }

    // Méthode index pour la liste des chats (optionnel)
    public function index()
    {
        return $this->getChats();
    }
}
