<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('email',50)->unique();
        //     $table->string('password');
        //     $table->string('apelido');
        //     $table->dateTime('data_nasc');
        //     $table->dateTime('data_parto');
        //     $table->string('telefone');
        //     $table->string('celular')->nullable();
        //     $table->string('conjuge')->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
