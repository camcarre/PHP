<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('superheros', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->string('nom_reel')->nullable();
            $table->string('planete_origine')->nullable();
            $table->string('pouvoirs')->nullable();
            $table->string('ville_protegee')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('superheroes');
    }
};
