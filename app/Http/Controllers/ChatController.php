<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Auth;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function index(User $artisan)
    {
        $client = Auth::user();
        $messages = Message::where(function($query) use ($client, $artisan) {
            $query->where('sender_id', $client->id)->where('receiver_id', $artisan->id);
        })->orWhere(function($query) use ($client, $artisan) {
            $query->where('sender_id', $artisan->id)->where('receiver_id', $client->id);
        })->get();

        return view('chat.index', compact('artisan', 'messages'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        $message = Message::create([
            'service_request_id' => $request->service_request_id,
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);

        // Broadcast the event if using Pusher or another WebSocket service
        broadcast(new MessageSent($message))->toOthers();

        return response()->json($message);
    }
}
