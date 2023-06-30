<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->enum('sexo', ['Masculino', 'femenino']);
            $table->unsignedBigInteger('city_id');
            $table->bigInteger('num_cedula');
            $table->enum('extension',['SCZ','CBBA','LPZ','OR','PN','BN','SUC','POT','TJ'])->nullable();
            $table->date('nacimiento');
            $table->longText('prenatal');
            $table->date('habla');
            $table->date('camina');
            $table->integer('num_certificado')->nullable();
            $table->integer('oficialia')->nullable();
            $table->integer('libro')->nullable();
            $table->integer('partida')->nullable();
            $table->integer('folio')->nullable();
            $table->string('provincia')->nullable();
            $table->date('fecha_registro');

            $table->foreign('city_id')->references('id')->on('cities');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
