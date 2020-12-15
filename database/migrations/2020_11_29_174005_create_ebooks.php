<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->id();
            $table->string('b_title');
            $table->string('b_subtitle');
            $table->text('b_cover');
            $table->longtext('b_synopsis');
            $table->string('b_slug');
            $table->text('isbn');
            $table->text('b_pin');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('media_group_id');
            $table->unsignedBigInteger('media_cat_id');
            $table->enum('b_featured', [true, false]);
            $table->enum('b_private', [true, false]);
            $table->enum('b_active', [true, false]);
            $table->enum('b_deleted', [true, false]);
            $table->unsignedBigInteger('b_created_by');
            $table->timestampTz('delete_at', 0);
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('media_authors');
            $table->foreign('publisher_id')->references('id')->on('media_publisher');
            $table->foreign('media_group_id')->references('id')->on('media_group');
            $table->foreign('media_cat_id')->references('id')->on('media_category');
            $table->foreign('b_created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebooks');
    }
}
