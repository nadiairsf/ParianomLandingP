<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjual', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned()->unique();
            $table->string('nama_toko',100);
            $table->string('nik',16)->unique();
            $table->string('alamat',150);
            $table->string('npwp',100)->nullable();
            $table->mediumText('sertif_lain')->nullable();
            $table->string('kec',25);
            $table->mediumText('foto_toko')->nullable();
            $table->mediumText('foto_ktp')->nullable();
            $table->boolean('status_toko')->nullable();
            $table->foreign('id_user')->references('id')->on('user')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjual');
    }
}
