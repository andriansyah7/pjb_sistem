<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindaklanjutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindaklanjut', function (Blueprint $table) {
            $table->increments ('tindaklanjut_id');
            $table->string('ecp_no');
            $table->string('tindaklanjut_notulis',10);
            $table->text('tindaklanjut_deskripsi');
            $table->timestamps();

            
            $table->foreign('ecp_no')->references('ecp_no')->on('ecp');
            $table->foreign('tindaklanjut_notulis')->references('user_nid')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindaklanjut');
    }
}
