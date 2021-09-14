<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKajianApprovalSPVSOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian_approval_spvso', function (Blueprint $table) {
            $table->increments ('kajian_spv_approval_id');
            $table->string('kajian_no');
            $table->string('user_nid',10);
            $table->bigInteger('status_kajian_id')->unsigned();
            $table->string('spv_approval_alasan',5000);
            $table->timestamps();

            $table->foreign('kajian_no')->references('kajian_no')->on('kajian_engineering');
            $table->foreign('user_nid')->references('user_nid')->on('user');
            $table->foreign('status_kajian_id')->references('status_kajian_id')->on('status_kajian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kajian_approval_s_p_v_s_o_s');
    }
}
