<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('superheros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nom_reel', 100);
            $table->string('pseudo', 100);
            $table->enum('sexe', ['Homme', 'Femme', 'Autre']);
            $table->text('description')->nullable();
            $table->foreignId('ville_protection_id')->nullable()->constrained('villes')->onDelete('set null');
            $table->foreignId('planete_origine_id')->nullable()->constrained('planetes')->onDelete('set null');
            $table->foreignId('equipe_id')->nullable()->constrained('equipes')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('superheros');
    }
};