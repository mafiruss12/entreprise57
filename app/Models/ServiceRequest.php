<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'artisan_service_id',
        'description',
        'status',
        'scheduled_at',
    ];

    // Relation to the User model (Client)
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    // Relation to the ArtisanService model
    public function artisanService()
    {
        return $this->belongsTo(ArtisanService::class, 'artisan_service_id');
    }

    // Relation to the User model (Artisan) through ArtisanService
    public function artisan()
    {
        return $this->artisanService->artisan();
    }
}
