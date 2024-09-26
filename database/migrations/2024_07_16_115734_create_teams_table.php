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
        Schema::create('teams', function (Blueprint $table) {
            $table->id('team id');
            $table->string('link name');
            $table->string('colour');
            $table->string('team name');
            $table->string('full');
            $table->string('logo');
            $table->string('team flag');
            $table->string('d1flag');
            $table->string('d2flag');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('entry year');
            $table->string('base location');
            $table->string('current chassis');
            $table->string('team principal');
            $table->string('power unit');
            $table->string('best season');
            $table->string('cpoints');
            $table->string('spoints');
            $table->string('constructors championships');
            $table->string('team bio');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
