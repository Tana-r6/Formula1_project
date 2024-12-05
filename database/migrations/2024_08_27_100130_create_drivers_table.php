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
            $table->id('id');
            $table->string('name');
            $table->string('colour');
            $table->string('potrait');
            $table->string('team');
            $table->string('driver_number');
            $table->string('link_name');
            $table->string('size');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->string('pic4');
            $table->string('flag');
            $table->string('team_id');
            $table->string('age');
            $table->string('debut');
            $table->string('best');
            $table->string('podiums');
            $table->string('cpoints');
            $table->string('spoints');
            $table->string("wdc");
            $table->string("bio");

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
