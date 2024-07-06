<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'service_id', 'client_id', 'prestataire_id', 'status', 'description',
    ];

    // Définir la relation avec le service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Définir la relation avec le client
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
