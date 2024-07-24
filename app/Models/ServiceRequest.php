<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'service_id', 'client_id', 'prestataire_id', 'status', 'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    // Définir la relation avec le prestataire
    public function prestataire()
    {
        return $this->belongsTo(User::class, 'prestataire_id');
    }
}
