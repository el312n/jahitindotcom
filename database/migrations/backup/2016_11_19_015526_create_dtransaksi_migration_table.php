<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtransaksiMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DTransaksi', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeTrans', 100);
            $table->string('kodeModel', 100);
            $table->string('kodeKain', 100);
            $table->string('pilihKain', 100);
            $table->string('pilihUkur', 100);
            $table->string('gender', 100);
            $table->datetime('tanggalUkur');
            $table->double('Qty',15,8);
            $table->double('Harga',15,8);
            $table->double('Punggung',15,8);
            $table->double('LingkarD',15,8);
            $table->double('PanjangL',15,8);
            $table->double('LingkarGul',15,8);
            $table->double('LingkarGang',15,8);
            $table->integer('statusJahitan');
            $table->string('ukurStandar', 50);
            $table->string('kodeUser', 100);
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
        Schema::drop('DTransaksi');
    }
}
