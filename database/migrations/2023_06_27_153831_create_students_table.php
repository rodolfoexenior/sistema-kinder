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
            $table->string('paterno');
            $table->string('materno')->nullable();
            $table->enum('sexo', ['Masculino', 'femenino']);
            $table->unsignedBigInteger('city_id');//cedula
            $table->bigInteger('num_cedula');
            $table->date('nacimiento');
            $table->longText('prenatal');
            $table->date('habla');
            $table->date('camina');
            $table->integer('num_certificado')->nullable();
            $table->integer('oficialia')->nullable();
            $table->integer('libro')->nullable();
            $table->integer('partida')->nullable();
            $table->integer('folio')->nullable();
            $table->unsignedBigInteger('province_id');
            $table->string('direccion');
            $table->string('foto')->nullable();
            $table->date('fecha_registro')->nullable();

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('province_id')->references('id')->on('provinces');

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
