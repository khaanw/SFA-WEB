<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('kodeSupplier');
            $table->integer('dpp');
            $table->integer('ppn');
            $table->integer('disc');
            $table->integer('discRupiah');
            $table->integer('totalDisc');
            $table->integer('total');
            $table->string('createdBy')->nullable();
            $table->string('updatedBy')->nullable();
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
        Schema::dropIfExists('pembelian');
    }
}
