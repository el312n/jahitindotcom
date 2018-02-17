<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kain', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeKain', 100)->unique();
            $table->string('namaKain',100);
            $table->double('Harga',15,8);
            $table->string('kodeKategori', 100);
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
        Schema::drop('kain');
    }
}
