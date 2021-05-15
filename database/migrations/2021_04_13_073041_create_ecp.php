<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecp', function (Blueprint $table) {
            $table->string('ecp_no', 50);
            $table->string('ecp_deskripsi', 500);
            $table->string('ecp_desktambahan',5000);
            $table->string('ecp_alasan',5000);
            $table->string('ecp_file_pendukung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecp');
    }
}
