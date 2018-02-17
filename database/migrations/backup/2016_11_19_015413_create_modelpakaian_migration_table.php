<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelpakaianMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ModelPakaian', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeKategori', 100);
            $table->string('kodeSubKategori', 100);
            $table->string('kodeModel',100)->unique();
            $table->string('namaModel',100);
            $table->string('kodeKain',100);
            $table->integer('lamaMenjahit');
            $table->text('Keterangan');
            $table->string('kodeUser', 100);
            $table->double('Harga',15,8);
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
        //
        Schema::drop('ModelPakaian');
    }
}
