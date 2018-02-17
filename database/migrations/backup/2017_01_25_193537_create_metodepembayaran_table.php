<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodepembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MetodePembayaran', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('MetodePembayaran')->unique();
            $table->string('Description', 100);
            $table->string('isKodeSakti', 1);
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
        Schema::drop('MetodePembayaran');
    }
}
