<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeliand', function (Blueprint $table) {
            $table->id();
            $table->string('headerId');
            $table->string('kodeBarang');
            $table->integer('qty');
            $table->string('uom1');
            $table->integer('hargaBeli');
            $table->integer('disc');
            $table->integer('discRupiah');
            $table->integer('totalDisc');
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
        Schema::dropIfExists('pembeliand');
    }
}
