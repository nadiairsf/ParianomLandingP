<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_penjual')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->string('kategori_pengaduan',50);
            $table->mediumText('deskripsi');
                $table->mediumText('bukti_pengaduan',150);
            timestampTz('timestamp',$precision=0);
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
        Schema::dropIfExists('pengaduan');
    }
}
