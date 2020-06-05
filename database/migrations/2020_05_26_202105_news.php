<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('title');
            $table->string('excerpt');
            $table->text('text')->default(null);
            $table->string('thumb_square')->default(null);
            $table->string('thumb_43')->default(null);
            $table->string('thumb_169')->default(null);
            $table->string('thumb_169_big')->default(null);
            $table->string('img')->default(null);
            $table->integer('author_id')->default(null);
            $table->integer('category_id')->default(null);
            $table->boolean('is_local')->default(false);
            $table->boolean('is_hidden')->default(false);
            $table->integer('views')->default(null);
            $table->integer('rating')->default(null);
            $table->integer('comments')->default(null);

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
    }
}
