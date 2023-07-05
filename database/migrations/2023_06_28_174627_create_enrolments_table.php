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
        Schema::create('enrolments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('managment_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_managment_id');
            $table->string('observacion');

            $table->foreign('managment_id')->references('id')->on('managments');
            $table->foreign('course_managment_id')->references('id')->on('course_managments');
            $table->foreign('student_id')->references('id')->on('students');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolments');
    }
};
