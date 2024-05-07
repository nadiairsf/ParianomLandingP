<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_produk')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_penjual')->unsigned();
            $table->string('kode_pesanan',50);
            $table->integer('jumlah');
            $table->integer('total');
            $table->boolean('status')->nullable();
            $table->timestampTz('timestamp',$precision=0);
            $table->foreign('id_user')->references('id')->on('user')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penjual')->references('id')->on('penjual')
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
        Schema::dropIfExists('pesanan');
    }
}
