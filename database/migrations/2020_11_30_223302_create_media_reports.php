<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medias_id')->unsigned()->index();
            $table->bigInteger('reported_by')->unsigned()->index();
            $table->text('r_reason');
            $table->timestamps();

            $table->foreign('reported_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('media_reports');
    }
}
