<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_produk', 100);
            $table->double('cost');
            $table->integer('status_produk');
            $table->integer('durasi');
            $table->dateTime('tgl_aktif');
            $table->dateTime('tgl_expired');
            $table->longText('keterangan');
            $table->bigInteger('id_produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
