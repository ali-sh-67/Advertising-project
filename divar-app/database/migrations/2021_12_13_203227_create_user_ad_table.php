<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAdTable extends Migration
{



    public function up()
    {
        Schema::create('User_ad', function (Blueprint $table) {
            $table->bigInteger('User_id');
            $table->bigInteger('ad_id');
            $table->enum('favorite',['favorite','not'])->default('not');
        });
    }




    public function down()
    {
        Schema::dropIfExists('User_ad');
    }
}
