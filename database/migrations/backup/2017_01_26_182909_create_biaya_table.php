<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('biaya', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('kodeBiaya')->unique();
            $table->string('NamaBiaya', 100);
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
        Schema::drop('biaya');
    }
}
