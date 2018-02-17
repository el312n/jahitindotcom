<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('komentarblog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodekomentar',100);
            $table->string('blogcode',100);
            $table->string('nama');
            $table->longText('isi');
            $table->dateTime('tanggal');
            $table->boolean('stsActive')->default(false);
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
        Schema::drop('komentarblog');
    }
}
