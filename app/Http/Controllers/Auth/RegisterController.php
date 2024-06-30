<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        event(new Registered($user));

        auth()->login($user);

        return redirect()->route('dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'specialty' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            // 'role' => ['required', 'string', Rule::in(['artisan', 'client','admin'])], // Validation du champ "role"
        ]);
    }

    protected function create(array $data)
    {
        
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'specialty' => $data['specialty'],
                'location' => $data['location'],
                'role' => $data['role'],
            ]);

        Artisan::create([
            'user_id' => $user->id,
            'specialty' => $data['specialty'],
            'location' => $data['location'],
        ]);

        return $user;
        
    }
}
