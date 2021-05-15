<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusEcpId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ecp', function (Blueprint $table) {
            $table->unsignedBigInteger('status_ecp_id')->after('ecp_no')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::table('ecp', function (Blueprint $table) {
            $table->dropColumn('status_ecp_id');
        });
    }
}
