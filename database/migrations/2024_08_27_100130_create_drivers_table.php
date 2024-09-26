<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('driver id');
            $table->string('link name');
            $table->string('colour');
            $table->string('name');
            $table->string('flag');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('team');
            $table->string('driver number');
            $table->string('age');
            $table->string('debut');
            $table->string('best season (points)');
            $table->string('podiums');
            $table->string('career points');
            $table->string('season points');
            $table->string('drivers championship');
            $table->string('driver bio');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
