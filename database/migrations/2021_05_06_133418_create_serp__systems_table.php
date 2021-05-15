<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerpSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serp_system', function (Blueprint $table) {
            $table->id('serp_system_id');
            $table->unsignedBigInteger('serp_unit_id');
            $table->string('serp_system_name');
            $table->timestamps();

            $table->foreign('serp_unit_id')->references('serp_unit_id')->on('serp_unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serp_system');
    }
}
