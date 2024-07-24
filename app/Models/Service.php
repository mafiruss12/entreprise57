<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'category', 'availability', 'location', 'photo', 'user_id',
    ];

    // Définir la relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Définir la relation avec les demandes de service
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
