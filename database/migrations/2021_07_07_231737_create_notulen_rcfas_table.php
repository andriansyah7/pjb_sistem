<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotulenRcfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulen_rcfa', function (Blueprint $table) {
            $table->increments ('notulen_rcfa_id');
            $table->string('rcfa_no');
            $table->string('notulen_pimpinan_rapat',10);
            $table->string('notulen_notulis',10);
            $table->timestamp('notulen_tanggal');
            $table->time('notulen_waktu');
            $table->string('notulen_tempat');
            $table->string('notulen_rapat');
            $table->string('notulen_agenda');
            $table->text('notulen_peserta');
            $table->text('notulen_pembahasan');
            $table->text('notulen_permasalahan');
            $table->text('notulen_hasil_pembahasan');
            $table->timestamps();

            $table->foreign('rcfa_no')->references('rcfa_no')->on('rcfa');
            $table->foreign('notulen_pimpinan_rapat')->references('user_nid')->on('user');
            $table->foreign('notulen_notulis')->references('user_nid')->on('user');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notulen_rcfa');
    }
}
