<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_penjual')->unsigned();
            $table->string('kategori');
            $table->string('kategori_sub');
            $table->string('nama');
            $table->bigInteger('harga');
            $table->integer('stok');
            $table->mediumText('foto_produk');
            $table->mediumText('foto_produk2');
            $table->mediumText('foto_produk3');
            $table->mediumText('foto_produk4');
            $table->mediumText('foto_produk5');
            $table->longText('deskripsi');
            $table->boolean('status_deleted')->default(false);
            $table->timestampTz('timestamp',$precision=0);
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
        Schema::dropIfExists('produk');
    }
}
