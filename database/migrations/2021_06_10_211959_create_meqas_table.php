<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeqasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meqa_cek', function (Blueprint $table) {
            $table->increments ('meqa_approval_id');
            $table->string('ecp_no');
            $table->string('user_nid',20);
            $table->bigInteger('status_ecp_id')->unsigned();
            $table->string('drawings');
            $table->string('operating_manual');
            $table->string('SOP'); 
            $table->string('maint_manual'); 
            $table->string('predictive_maint_schedules'); 
            $table->string('preventative_maint_schedules'); 
            $table->string('MIMS_equipment'); 
            $table->string('process_control_system'); 
            $table->string('business_process'); 
            $table->timestamps();
           

            $table->foreign('ecp_no')->references('ecp_no')->on('ecp');
            $table->foreign('user_nid')->references('user_nid')->on('user');
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
        Schema::dropIfExists('meqa_cek');
    }
}
