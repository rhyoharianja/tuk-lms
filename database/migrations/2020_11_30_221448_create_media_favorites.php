<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaFavorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_favorites', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('ebook_id')->unsigned();
            $table->timestamps();

            $table->primary(['user_id', 'ebook_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ebook_id')->references('id')->on('ebooks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_favorites');
    }
}
