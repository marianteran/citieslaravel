<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudads', function (Blueprint $table) {
            $table->id();
            $table->string('namecity')->nullable();
            $table->string('country')->nullable();
            $table->string('description')->nullable();
            $table->string('language')->nullable();
            $table->string('slogan')->nullable();
            $table->string('flag')->nullable();
            $table->string('currency')->nullable();
            $table->string('continent')->nullable();
            $table->string('region')->nullable();
            $table->string('imagepri')->nullable();
            $table->string('imagesec')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudads');
    }
};
