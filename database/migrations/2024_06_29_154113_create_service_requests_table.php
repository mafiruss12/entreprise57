<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('artisan_service_id');
            $table->text('description');
            $table->enum('status', ['pending', 'accepted', 'completed'])->default('pending');
            $table->dateTime('scheduled_at')->nullable();
            $table->timestamps();
        
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('artisan_service_id')->references('id')->on('artisan_services')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
};
