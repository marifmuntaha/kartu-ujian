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
            $table->string('register')->unique();
            $table->string('name');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->enum('gender', ['L', 'P']);
            $table->string('address');
            $table->string('school')->nullable();
            $table->string('father')->nullable();
            $table->string('phone');
            $table->enum('ladder', ['1', '2'])->comment('1. MTS, 2. MA');
            $table->enum('program', ['1', '2'])->comment('1. Tahfidz, 2. Kitab');
            $table->string('room');
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
