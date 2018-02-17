<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtransaksiMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('HTransaksi', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeTrans', 100)->unique();
            $table->datetime('tanggalTrans');
            $table->string('kodeUser', 100);
            $table->string('shipping', 100);
            $table->string('nama', 100);
            $table->string('alamat', 300);
            $table->string('telepon', 60);
            $table->double('Total',15,8);
            $table->string('PembayaranVia', 100);
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
        Schema::drop('HTransaksi');
    }
}
