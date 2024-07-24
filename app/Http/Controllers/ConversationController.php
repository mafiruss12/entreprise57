<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = Conversation::where('sender_id', auth()->id())
                        ->orWhere('receiver_id', auth()->id())
                        ->get();

        return view('conversations.index', compact('conversations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
        ]);

        $conversation = Conversation::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
        ]);

        return redirect()->route('conversations.show', $conversation);
    }

    public function show(Conversation $conversation)
    {
        $this->authorize('view', $conversation);

        return view('conversations.show', compact('conversation'));
    }
}
