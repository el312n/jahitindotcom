<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodekategori',100);
            $table->string('blogcode',100);
            $table->string('judul');
            $table->string('author');
            $table->string('userID',100);
            $table->longText('blogContains');
            $table->integer('like');
            $table->integer('dislike');
            $table->integer('lihat');
            $table->integer('typeBlog');
            $table->dateTime('tanggal');
            $table->string('tag');
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
        Schema::drop('blog');
    }
}
