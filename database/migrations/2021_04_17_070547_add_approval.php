<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApproval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ecp', function (Blueprint $table) {
            $table->string('ecp_approval_1')->after('ecp_alasan');
            $table->string('ecp_approval_2')->after('ecp_approval_1');
          
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
            $table->dropColumn('ecp_approval_1');
            $table->dropColumn('ecp_approval_2');
        });
    }
}
