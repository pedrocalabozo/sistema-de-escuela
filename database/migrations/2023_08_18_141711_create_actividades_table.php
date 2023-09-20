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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();


            $table->string('Titulo',300);
            $table->string('Contenido',3000);
            //$table->string('categoria',30);
            $table->string('Grado',20);
            $table->string('Foto',100);
            $table->string('Autor',50);
            $table->timestamps();
        
          


            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');
        });
    }

    /**p
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
