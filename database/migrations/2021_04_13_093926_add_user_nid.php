<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserNid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ecp', function (Blueprint $table) {
            $table->string('user_nid',10)->after('ecp_no')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::table('ecp', function (Blueprint $table) {
            $table->dropColumn('user_nid');
        });
    }
}
