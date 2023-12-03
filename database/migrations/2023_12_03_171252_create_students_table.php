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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // Student Info
            $table->string('name');
            $table->string('national_id')->unique();
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->string('gender');

            // Contact Info
            $table->string('phone_number');
            $table->string('address');

            // Dorm Infos
            $table->unsignedBigInteger('room_number')->nullable();
            $table->foreign('room_number')->references('id')->on('rooms')->nullOnDelete();

            // Other Properties
            $table->unsignedBigInteger('major_id')->nullable();
            $table->foreign('major_id')->references('id')->on('majors')->nullOnDelete();

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