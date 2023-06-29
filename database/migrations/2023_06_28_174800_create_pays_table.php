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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enrolment_id');
            $table->unsignedBigInteger('tutor_id');
            $table->double('total');
            $table->double('pagado');
            $table->double('descuento');
            $table->enum('metodo',['Efectivo','transferencia','Tarjeta','Otro']);
            $table->string('observacion');
        
            $table->foreign('enrolment_id')->references('id')->on('enrolments');
            $table->foreign('tutor_id')->references('id')->on('tutors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};
