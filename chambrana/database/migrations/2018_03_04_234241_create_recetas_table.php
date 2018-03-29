<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->integer('id_producto')->unsigned();
            $table->integer('id_ingrediente')->unsigned();
            $table->foreign('id_producto')
            ->references('id_producto')->on('productos')
            ->onDelete('cascade');
            $table->foreign('id_ingrediente')
            ->references('id_ingrediente')->on('ingredientes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->dropForeign(['id_producto']);
            $table->dropForeign(['id_ingrediente']);
        });
    }
}
