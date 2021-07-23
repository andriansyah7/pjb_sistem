<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKajianEngineeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian_engineering', function (Blueprint $table) {
            $table->string('kajian_no', 50);
            $table->string('kajian_spv', 10);
            $table->string('kajian_requester',10);
            $table->string('kajian_judul', 500);
            $table->string('kajian_deskripsi',5000);
            $table->string('kajian_sumber_informasi');
            $table->string('kajian_pihak_terlibat',10);
            $table->string('kajian_disposisi_staff_so',10);
            $table->timestamps();

            $table->foreign('kajian_spv')->references('user_nid')->on('user');
            $table->foreign('kajian_requester')->references('user_nid')->on('user');
            $table->foreign('kajian_pihak_terlibat')->references('user_nid')->on('user');
            $table->foreign('kajian_disposisi_staff_so')->references('user_nid')->on('user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kajian_engineering');
    }
}
