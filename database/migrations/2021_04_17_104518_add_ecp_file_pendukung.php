<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEcpFilePendukung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ecp', function (Blueprint $table) {
            $table->text('ecp_file_pendukung')->after('ecp_approval_2');
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
            $table->dropColumn('ecp_file_pendukung');
        });
    }
}
