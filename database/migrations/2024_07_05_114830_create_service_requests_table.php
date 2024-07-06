<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->date('desired_date');
            $table->text('description');
            $table->enum('status', ['pending', 'accepted', 'refused', 'completed']);
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade'); // Assumes user is a client
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->timestamps(); // Ajoute les colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
}

