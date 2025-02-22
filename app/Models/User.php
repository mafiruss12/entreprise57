<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'surname', 'email', 'phone', 'address', 'role', 'password', 'photo','two_factor_secret',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // App\Models\User.php
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class, 'client_id');
    }
// Ajoutez cette méthode ou un attribut si vous utilisez un package pour l'authentification à deux facteurs
public function getTwoFactorEnabledAttribute()
{
    // Retournez true ou false selon que l'authentification à deux facteurs est activée
    return $this->two_factor_secret !== null;
}
public function routeNotificationForVonage(Notification $notification): string
{
    return $this->phone;
}

public function conversation(){
    return $this->hasMany(Conversation::Class,'sender_id');
}

public function chatRequestsSent()
    {
        return $this->hasMany(ChatRequest::class, 'client_id');
    }

    public function chatRequestsReceived()
    {
        return $this->hasMany(ChatRequest::class, 'prestataire_id');
    }
}
