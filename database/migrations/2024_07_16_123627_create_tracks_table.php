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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id('track id');
            $table->string('date of event');
            $table->string('grand prix name');
            $table->string('fastest lap time (holder)');
            $table->integer('laps');
            $table->string('flag');
            $table->string('country');
            $table->string('track photo');
            $table->string('detailed track');
            $table->string('circuit length');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
