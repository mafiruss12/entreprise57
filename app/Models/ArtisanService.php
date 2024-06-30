<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisanService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'artisan_id', // assuming each service is linked to an artisan
    ];

    // Relation to the User model (Artisan)
    public function artisan()
    {
        return $this->belongsTo(User::class, 'artisan_id');
    }

    // Relation to the ServiceRequest model
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
