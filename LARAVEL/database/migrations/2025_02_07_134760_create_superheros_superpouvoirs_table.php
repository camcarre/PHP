<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('superheros_superpouvoirs', function (Blueprint $table) {
            $table->foreignId('superheros_id')->constrained('superheros')->onDelete('cascade');
            $table->foreignId('superpouvoirs_id')->constrained('superpouvoirs')->onDelete('cascade');
            $table->primary(['superheros_id', 'superpouvoirs_id']);
        });
    }

    public function down() {
        Schema::dropIfExists('superheros_superpouvoirs');
    }
};