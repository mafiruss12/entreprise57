<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isClient()
    {
        return $this->role === 'client';
    }

    public function isArtisan()
    {
        return $this->role === 'artisan';
    }

    public function services()
    {
        if ($this->isArtisan()) {
            return $this->hasMany(Service::class, 'artisan_id');
        }
        return null;
    }

    public function serviceRequests()
    {
        if ($this->isClient()) {
            return $this->hasMany(ServiceRequest::class, 'client_id');
        } elseif ($this->isArtisan()) {
            return $this->hasMany(ServiceRequest::class, 'artisan_id');
        }
        return null;
    }

    public function reviews()
    {
        if ($this->isClient()) {
            return $this->hasMany(Review::class, 'client_id');
        } elseif ($this->isArtisan()) {
            return $this->hasMany(Review::class, 'artisan_id');
        }
        return null;
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
    public function artisanServices()
{
    return $this->hasMany(ArtisanService::class);
}
}
