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
        Schema::create('conocidos', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
            $table->string('usuario',25);
            $table->string('clave')->nullable(false);// Definir la password
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conocidos');
    }
};
