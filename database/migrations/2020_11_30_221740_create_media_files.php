<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_files', function (Blueprint $table) {
            $table->id();
            $table->string('filename')->index();
            $table->bigInteger('medias_id')->unsigned()->index();
            $table->string('disk');
            $table->text('path');
            $table->string('extension');
            $table->string('mime');
            $table->string('size');
            $table->integer('download')->default(0);
            $table->bigInteger('created_by')->unsigned()->index();
            $table->bigInteger('updated_by')->unsigned()->index();
            $table->timestamps();

            $table->foreign('medias_id')->references('id')->on('ebooks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_files');
    }
}
