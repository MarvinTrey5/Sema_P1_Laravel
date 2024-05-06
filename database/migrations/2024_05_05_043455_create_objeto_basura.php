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
        Schema::create('objeto_basura', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_objeto');
            $table->string('nombre_objeto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objeto_basura');
    }
};
