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
        Schema::create('alumnomasrs', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre',50);
            $table->string('Apellido',50);
            $table->string('Grado');
            $table->integer('Puntos');
            $table->string('Foto',200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnomasrs');
    }
};
