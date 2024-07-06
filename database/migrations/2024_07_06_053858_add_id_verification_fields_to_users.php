<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_document')->nullable();
            $table->boolean('id_verified')->default(false);
            $table->boolean('id_approved')->default(false);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_document');
            $table->dropColumn('id_verified');
            $table->dropColumn('id_approved');
        });
    }
};
