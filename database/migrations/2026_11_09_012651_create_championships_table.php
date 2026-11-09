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
        Schema::create('championships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger('season')->unique();
            $table->string('constructor')->nullable();
            $table->unsignedTinyInteger('wins')->nullable();
            $table->unsignedTinyInteger('podiums')->nullable();
            $table->unsignedTinyInteger('poles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('championships');
    }
};
