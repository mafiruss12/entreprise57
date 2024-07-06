<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class MessageController extends Controller
{
    // public function fetchMessages($userId)
    // {
    //     $messages = Message::where(function ($query) use ($userId) {
    //         $query->where('sender_id', Auth::id())->where('recipient_id', $userId);
    //     })->orWhere(function ($query) use ($userId) {
    //         $query->where('sender_id', $userId)->where('recipient_id', Auth::id());
    //     })->get();

    //     return response()->json(['messages' => $messages]);
    // }

    // public function sendMessage(Request $request)
    // {
    //     $request->validate([
    //         'recipient_id' => 'required|integer|exists:users,id',
    //         'content' => 'required|string',
    //     ]);

    //     $message = new Message();
    //     $message->sender_id = Auth::id();
    //     $message->recipient_id = $request->recipient_id;
    //     $message->content = $request->content;
    //     $message->save();

    //     return response()->json(['success' => true, 'message' => $message]);
    // }
}

