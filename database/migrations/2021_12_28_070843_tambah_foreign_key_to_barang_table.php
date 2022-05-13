<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahForeignKeyToBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('barang', function (Blueprint $table) {
        //     $table->unsignedInteger('group')->change();
        //     $table->foreign('group')
        //             ->references('id')
        //             ->on('groupbarang')
        //             ->onDelete('restrict')
        //             ->onUpdate('restrict');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            // $table->integer('group')->change();
            // $table->dropForeign('barang_group_foreign');
        });
    }
}
