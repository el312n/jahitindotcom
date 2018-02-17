<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjahitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('penjahit', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeUser', 100);
            $table->string('tempatLahir', 100);
            $table->datetime('tanggalLahir');
            $table->string('jenisKelamin', 100);
            $table->string('Domisili', 100);
            $table->string('Propinsi', 100);
            $table->string('Kota', 100);
            $table->string('Kecamatan', 100);
            $table->string('KodePos', 100);
            $table->string('KTP', 100);
            $table->string('NPWP', 100);
            $table->string('FB', 100);
            $table->double('Rating',5,2);
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
        Schema::drop('penjahit');
    }
}
