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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->unsignedBigInteger('id_kategori');
            $table->string('kode_produk')
            ->unique();
            $table->string('nama_produk')->unique();
            $table->decimal('harga_produk', 12, 2);;
            $table->string('berat');
            $table->string('material');
            $table->string('size');
            $table->string('pelapis');
            $table->integer('stok');
            $table->string('deskripsi');
            $table->string('image');
            $table->tinyInteger('diskon')->default(0);
            $table->foreign('id_kategori')
            ->references('id_kategori')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
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
        Schema::dropIfExists('products');
    }
};
