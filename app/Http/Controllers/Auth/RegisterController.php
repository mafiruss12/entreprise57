<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Service;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:client,prestataire'],
            'photo' => ['nullable', 'image', 'max:2048'],
        ]);
    }

    protected function create(array $data)
    {
        $photoPath = isset($data['photo']) ? $data['photo']->store('photos', 'public') : null;

        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'photo' => $photoPath,
        ]);


        return $user;
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    protected function redirectPath()
    {
        if (auth()->user()->role == 'prestataire') {
            return '/dashboard';
        }

        return '/dashboard/client';
    }
}
