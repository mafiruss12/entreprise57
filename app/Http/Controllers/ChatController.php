<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('chat', compact('users'));
    }

    public function fetchMessages($id)
    {
        $messages = Message::where(function ($query) use ($id) {
            $query->where('sender_id', Auth::id())
                  ->orWhere('receiver_id', Auth::id());
        })->where(function ($query) use ($id) {
            $query->where('sender_id', $id)
                  ->orWhere('receiver_id', $id);
        })->get();

        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json($message);
    }
}
