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
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('nom_reel');
        $table->string('pseudo')->unique();
        $table->enum('sexe', ['Homme', 'Femme', 'Autre']);
        $table->text('description')->nullable();
        $table->foreignId('ville_protection_id')->nullable()->constrained('villes')->onDelete('set null');
        $table->foreignId('planete_origine_id')->nullable()->constrained('planetes')->onDelete('set null');
        $table->foreignId('equipe_id')->nullable()->constrained('equipes')->onDelete('set null');
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
