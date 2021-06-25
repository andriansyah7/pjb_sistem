<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateECMReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecm_review', function (Blueprint $table) {
            $table->increments ('ecm_review_id');
            $table->string('ecp_no');
            $table->string('user_nid',15);
            $table->string('ecm_review_alasan',5000);
            $table->timestamps();

            $table->foreign('ecp_no')->references('ecp_no')->on('ecp');
            $table->foreign('user_nid')->references('user_nid')->on('user');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecm_review');
    }
}
