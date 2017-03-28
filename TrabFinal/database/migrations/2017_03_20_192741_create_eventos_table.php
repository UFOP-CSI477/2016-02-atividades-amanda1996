<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('eventos', function (Blueprint $table) {
        $table->increments('id');
        $table->datetime('fechaIni');
        $table->datetime('fechaFin')->nullable();
        $table->boolean('todoeldia')->nullable();
        $table->string('color')->nullable();
        $table->mediumText('titulo')->nullable();
        $table->integer('user_id');
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
        Schema::dropIfExists('eventos');
    }
}
