<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRcfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcfa', function (Blueprint $table) {
            $table->string('rcfa_no', 50);
            $table->string('user_nid',10);
            $table->string('rcfa_deskripsi', 5000);
            $table->string('rcfa_file_pendukung');
            $table->timestamps();

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
        Schema::dropIfExists('rcfa');
    }
}
