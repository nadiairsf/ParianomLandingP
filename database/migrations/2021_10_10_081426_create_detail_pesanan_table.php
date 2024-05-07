<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_penjual')->unsigned();
            $table->bigInteger('id_produk')->unsigned();
            $table->bigInteger('id_pesanan')->unsigned();
            $table->foreign('id_user')->references('id')->on('user')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penjual')->references('id')->on('penjual')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pesanan')->references('id')->on('pesanan')
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
        Schema::dropIfExists('detail_pesanan');
    }
}
