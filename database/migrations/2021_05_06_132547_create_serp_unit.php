<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerpUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serp_unit', function (Blueprint $table) {
            $table->id('serp_unit_id');
            $table->unsignedBigInteger('serp_blok_id');
            $table->string('serp_unit_name');
            $table->timestamps();

            $table->foreign('serp_blok_id')->references('serp_blok_id')->on('serp_blok');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serp_unit');
    }
}
