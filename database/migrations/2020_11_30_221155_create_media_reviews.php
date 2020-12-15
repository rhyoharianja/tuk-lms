<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reviewer_id')->unsigned()->index()->nullable();
            $table->string('reviewer_name');
            $table->bigInteger('ebook_id')->unsigned()->index();
            $table->integer('rating');
            $table->text('comment');
            $table->enum('is_approved', [true, false]);
            $table->timestamps();

            $table->foreign('ebook_id')->references('id')->on('ebooks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_reviews');
    }
}
