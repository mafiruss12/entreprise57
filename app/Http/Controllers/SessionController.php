<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    
    public function index()
    {
        $sessions = Auth::user()->tokens; // Retrieve active sessions of the user

        return view('profile.settings', compact('sessions')); // Pass sessions to the profile settings view
    }

    public function revoke($tokenId)
    {
        $token = Auth::user()->tokens()->findOrFail($tokenId);
        $token->delete();

        return redirect()->route('sessions.index')->with('success', 'Session revoked successfully.');
    }
}
