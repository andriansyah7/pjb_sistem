<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeqaApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meqa_approval', function (Blueprint $table) {
            $table->increments ('meqa_approval_id');
            $table->string('ecp_no');
            $table->string('user_nid',10);
            $table->string('spv_so',10);
            $table->bigInteger('status_ecp_id')->unsigned();
            $table->string('meqa_approval_alasan',5000);
            $table->timestamps();

            $table->foreign('ecp_no')->references('ecp_no')->on('ecp');
            $table->foreign('user_nid')->references('user_nid')->on('user');
            $table->foreign('spv_so')->references('user_nid')->on('user');
            $table->foreign('status_ecp_id')->references('status_ecp_id')->on('status_ecp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meqa_approval');
    }
}
