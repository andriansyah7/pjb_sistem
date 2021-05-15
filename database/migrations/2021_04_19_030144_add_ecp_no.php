<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEcpNo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notulen', function (Blueprint $table) {
            $table->string('ecp_no')->after('notulen_id');

            $table->foreign('ecp_no')->references('ecp_no')->on('ecp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notulen', function (Blueprint $table) {
            $table->dropColumn('ecp_no');
        });
    }
}
