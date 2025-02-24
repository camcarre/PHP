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
        Schema::table('superheroes', function (Blueprint $table) {
            $table->unsignedBigInteger('equipe_id')->nullable()->after('image');
            $table->unsignedBigInteger('gadget_id')->nullable()->after('equipe_id');
            $table->unsignedBigInteger('vehicule_id')->nullable()->after('gadget_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('superheroes', function (Blueprint $table) {
            $table->dropColumn('equipe_id');
            $table->dropColumn('gadget_id');
            $table->dropColumn('vehicule_id');
        });
    }
};
