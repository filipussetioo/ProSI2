<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_berlangganan_awal');
            $table->date('tanggal_berlangganan_akhir');
            $table->bigInteger('jumlah_paket');
            $table->bigInteger('total_harga');
            $table->string('catatan_tambahan')->nullable();
            $table->text('bukti_pembayaran')->nullable();
            $table->boolean('status_pembayaran')->default(false);
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->bigInteger('alamat_id')->unsigned()->nullable();
            $table->bigInteger('paket_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('alamat_id')->references('id')->on('alamats');
            $table->foreign('paket_id')->references('id')->on('pakets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
