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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->integer('cliente_id');
            $table->integer('raza_id');
            $table->integer('citas_id');
            $table->timestamps();

            // $table->foreign('cliente_id')
            //       ->references('id')
            //       ->on('clientes')
            //       ->onDelete('cascade');

            
            // $table->foreign('citas_id')
            //       ->references('id')
            //       ->on('citas')
            //       ->onDelete('cascade');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
