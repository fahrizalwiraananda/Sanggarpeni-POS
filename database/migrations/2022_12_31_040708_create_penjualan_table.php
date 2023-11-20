<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id('id_penjualan');
            $table->unsignedBigInteger('id_member')->nullable();
            $table->integer('total_item');
            $table->decimal('total_harga', 12, 2);
            $table->tinyInteger('diskon')->default('0');
            $table->decimal('bayar', 12, 2)->default('0');
            $table->decimal('diterima', 12, 2)->default('0');
            $table->unsignedBigInteger('id_user');
            //$table->date('tanggal_beli');
            //$table->foreign('id_member')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
            //o$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
};
