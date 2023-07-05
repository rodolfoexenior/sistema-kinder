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

        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('paterno');
            $table->string('materno')->nullable();
            $table->enum('sexo', ['Masculino', 'femenino']);
            $table->unsignedBigInteger('city_id');
            $table->bigInteger('num_cedula');
            $table->enum('extension',['SCZ','CBBA','LPZ','OR','PN','BN','SUC','POT','TJ'])->nullable();
            $table->date('nacimiento');
            $table->string('foto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->enum('medio_difusion',['Redes sociales','Amistad','Vecino','Otros']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
