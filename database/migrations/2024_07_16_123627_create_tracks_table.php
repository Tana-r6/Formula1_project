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
            $table->id('id');
            $table->string('country');
            $table->string('flag');
            $table->string('colour');
            $table->string('picture');
            $table->string('city');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->string('pic4');
            $table->string('layout');
            $table->string('detailed');
            $table->string('length');
            $table->string("gplength");
            $table->string('full');
            $table->string('turns');
            $table->string('record');
            $table->string('entry');
            $table->string('laps');
            $table->string('gpname');
            $table->string("bio");
            $table->string("gps");
            $table->string("winners");
            $table->string("link_name")->unique();

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
