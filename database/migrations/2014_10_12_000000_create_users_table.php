<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('role', ['client', 'prestataire']);
            $table->string('photo')->nullable(); // Champ pour la photo
            $table->string('password');
            $table->rememberToken(); // Ajoute la colonne remember_token
            $table->timestamps(); // Ajoute les colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

