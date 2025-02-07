<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100)->unique();
        });
    }

    public function down() {
        Schema::dropIfExists('equipes');
    }
};
