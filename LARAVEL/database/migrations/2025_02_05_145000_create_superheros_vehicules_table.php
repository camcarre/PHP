<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('superheros_vehicules', function (Blueprint $table) {
        $table->foreignId('superheros_id')->constrained('superheros')->onDelete('cascade');
        $table->foreignId('vehicules_id')->constrained('vehicules')->onDelete('cascade');
        $table->primary(['superheros_id', 'vehicules_id']);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheros_vehicules');
    }
};
