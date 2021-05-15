<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJabatanId extends Migration
{
  
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            
            $table->unsignedBigInteger('jabatan_id')->after('user_name')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

      $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatan');
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('jabatan_id');
        });
    }
}
