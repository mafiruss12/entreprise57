<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver_id', 'sender_id'
    ];

    // Définir la relation avec l'utilisateur
    public function message()
    {
        return $this->hasMany(Message::class);
    }
}
