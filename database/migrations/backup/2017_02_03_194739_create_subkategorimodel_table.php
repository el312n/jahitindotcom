<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubkategorimodelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('subkategorimodel', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeSubKategori', 100)->unique();
            $table->string('namaSubKategori',100);
            $table->string('kodeKategori',100);
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
        Schema::drop('subkategorimodel');
    }
}
