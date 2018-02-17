<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeUser', 100);
            $table->string('email')->unique();
            $table->string('name', 100);
            $table->string('password', 60);
            $table->string('alamat', 300);
            $table->string('telepon', 60);
            $table->integer('role_id')->unsigned();
            $table->boolean('confirmed')->default(false);
            $table->string('confirmedcode', 60);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
    }
}
