<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Landpage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landpage', function (Blueprint $table) {
            $table->increments('id');
            $table->text('teks1');
            $table->text('teks2');
            $table->text('teks3');
            $table->text('teks4');
            $table->text('teks5');
            $table->text('teks6');
            $table->text('teks7');
            $table->text('teks8');
            $table->text('teks9');
            $table->text('teks10');
            $table->text('teks11');
            $table->text('teks12');
            $table->text('teks13');
            $table->text('teks14');
            $table->text('teks15');
            $table->text('teks16');
            $table->text('teks17');
            $table->text('teks18');
            $table->text('teks19');
            $table->text('teks20');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landpage');
    }
}
