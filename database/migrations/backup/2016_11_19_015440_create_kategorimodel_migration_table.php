<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategorimodelMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kategoriModel', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeKategori', 100)->unique();
            $table->string('namaKategori',100);
            $table->double('HargaMin',15,8);
            $table->double('HargaMax',15,8);
            $table->boolean('stsActive')->default(true);
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
        Schema::drop('kategoriModel');
    }
}
