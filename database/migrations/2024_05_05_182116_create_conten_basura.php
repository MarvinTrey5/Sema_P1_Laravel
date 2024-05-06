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
        Schema::create('conten_basura', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('lugar',20);
            $table->string('tipo_conten',25);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conten_basura');
    }
};
