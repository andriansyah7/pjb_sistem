<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
   
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->id('unit_id',200);
            $table->string('unit_name',300);
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('unit');
    }
}
