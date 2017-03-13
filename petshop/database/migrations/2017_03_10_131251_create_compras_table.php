<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {

        $table->engine = 'InnoDB';

        $table->increments('id');
        $table->integer('produto_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->smallInteger('quantidade');
        $table->dateTime('data');
        $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('compras');
    }
}
