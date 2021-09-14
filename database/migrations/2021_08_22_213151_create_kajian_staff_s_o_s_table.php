<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKajianStaffSOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian_staff_so', function (Blueprint $table) {
            $table->id('kajian_staff_id', 50);
            $table->string('kajian_no', 50);
            $table->string('kajian_judul', 500);
            $table->string('kajian_nama_staff',10);
            $table->longText('kajian_analisa');
            $table->text('kajian_file');
            $table->timestamps();

            $table->foreign('kajian_no')->references('kajian_no')->on('kajian_engineering');
            $table->foreign('kajian_nama_staff')->references('user_nid')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kajian_staff_so');
    }
}
