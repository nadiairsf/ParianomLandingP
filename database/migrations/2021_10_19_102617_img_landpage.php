<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImgLandpage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_landpage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gbr1');
            $table->string('gbr2');
            $table->string('gbr3');
            $table->string('gbr4');
            $table->string('gbr5');
            $table->string('gbr6');
            $table->string('gbr7');
            $table->string('gbr8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_landpage');
    }
}
