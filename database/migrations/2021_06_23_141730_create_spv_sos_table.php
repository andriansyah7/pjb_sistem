<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpvSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spv_so', function (Blueprint $table) {
            $table->increments ('spv_so_id');
            $table->string('ecp_no');
            $table->string('user_nid',10);
            $table->string('staff_so',10);
            $table->string('spv_so_review',5000);
            $table->timestamps();

            $table->foreign('ecp_no')->references('ecp_no')->on('ecp');
            $table->foreign('user_nid')->references('user_nid')->on('user');
            $table->foreign('staff_so')->references('user_nid')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spv_so');
    }
}
