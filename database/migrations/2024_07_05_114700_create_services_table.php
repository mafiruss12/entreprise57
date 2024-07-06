<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('availability');
            $table->string('location');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Assumes user is a prestataire
            $table->string('photo')->nullable(); // Champ pour la photo
            $table->timestamps(); // Ajoute les colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
