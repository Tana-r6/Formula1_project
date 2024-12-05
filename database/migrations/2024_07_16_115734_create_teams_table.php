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
            $table->id('id');
            $table->string('team_name');
            $table->string('colour');
            $table->string('drivers');
            $table->string('logo_small');
            $table->string('car_pic');
            $table->string('link_name');
            $table->string('size');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->string('pic4');
            $table->string('d1flag');
            $table->string('d2flag');
            $table->string('complogo');
            $table->string('d1id');
            $table->string('d2id');
            $table->string('full');
            $table->string('entry');
            $table->string('base');
            $table->string('chassis');
            $table->string('principal');
            $table->string('powerunit');
            $table->string('best');
            $table->string('spoints');
            $table->string("wcc");
            $table->string("bio");
            $table->string("driver1");    
            $table->string("driver2");
            $table->string("flag");
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
