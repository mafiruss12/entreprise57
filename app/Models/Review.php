<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_request_id', 'client_id', 'artisan_id', 'rating', 'comment'
    ];

    public function serviceRequest()
    {
        return $this->belongsTo(ServiceRequest::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
