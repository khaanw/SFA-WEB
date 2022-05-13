<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kodeBarang')->unique();
            $table->string('namaBarang');
            $table->string('packaging');
            $table->string('groupBarang');
            $table->string('barcode');
            $table->string('supplier');
            $table->string('kodeSupplier');
            $table->string('uom1');
            $table->string('uom2');
            $table->string('uom3');
            $table->integer('conv1');
            $table->integer('conv2');
            $table->integer('conv3');
            $table->integer('hargaBeli');
            $table->integer('hargaJual');
            $table->string('createdBy')->nullable();
            $table->string('modifiedBy')->nullable();
            $table->string('attribute1')->nullable();
            $table->string('attribute2')->nullable();
            $table->string('attribute3')->nullable();
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
        Schema::dropIfExists('barang');
    }
}
