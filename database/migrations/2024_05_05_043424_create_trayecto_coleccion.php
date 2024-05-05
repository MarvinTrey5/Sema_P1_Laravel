<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trayecto_coleccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_trayecto');
            $table->date('plazo');
            $table->integer('personal');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trayecto_coleccion');
    }
};
