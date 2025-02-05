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
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('pseudo')->unique();
            $table->string('gender');
            $table->string('planet_origin')->nullable();
            $table->text('description')->nullable();
            $table->json('superpowers')->nullable();
            $table->string('protection_city')->nullable();
            $table->json('gadgets')->nullable();
            $table->string('team')->nullable();
            $table->string('vehicle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
