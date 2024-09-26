<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('results', function (Blueprint $table) {
            $table->foreignid('driver id')->nullable();
            $table->integer('bahrain position')->nullable();
            $table->integer('suadi arabia position')->nullable();
            $table->integer('australia position')->nullable();
            $table->integer('azerbaijan position')->nullable();
            $table->integer('miami position')->nullable();
            $table->integer('monaco position')->nullable();
            $table->integer('spain position')->nullable();
            $table->integer('canada position')->nullable();
            $table->integer('austria position')->nullable();
            $table->integer('great britain position')->nullable();
            $table->integer('hungary position')->nullable();
            $table->integer('belgium position')->nullable();
            $table->integer('netherlands position')->nullable();
            $table->integer('italy position')->nullable();
            $table->integer('singapore position')->nullable();
            $table->integer('japan position')->nullable();
            $table->integer('qatar position')->nullable();
            $table->integer('usa position')->nullable();
            $table->integer('mexico position')->nullable();
            $table->integer('brazil position')->nullable();
            $table->integer('las vegas position')->nullable();
            $table->integer('abu dhabi position')->nullable();
            $table->integer('monza position')->nullable();
            $table->integer('china position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
