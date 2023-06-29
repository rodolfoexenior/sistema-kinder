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
        Schema::create('detail_enrolment', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolment_id');
            $table->unsignedBigInteger('turn_id');
            $table->double('precio');
            $table->string('meses');

            $table->foreign('enrolment_id')->references('id')->on('enrolments');
            $table->foreign('turn_id')->references('id')->on('turns');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_enrolment');
    }
};
