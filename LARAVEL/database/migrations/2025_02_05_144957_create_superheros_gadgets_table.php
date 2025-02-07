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
        Schema::create('superheros_gadgets', function (Blueprint $table) {
            $table->foreignId('superheros_id')->constrained('superheros')->onDelete('cascade');
            $table->foreignId('gadgets_id')->constrained('gadgets')->onDelete('cascade');
            $table->primary(['superheros_id', 'gadgets_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheros_gadgets');
    }
};
