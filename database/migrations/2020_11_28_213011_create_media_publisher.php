<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaPublisher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_publisher', function (Blueprint $table) {
            $table->id();
            $table->string('pu_company');
            $table->text('pu_photo');
            $table->date('pu_since');
            $table->string('pu_email', 150);
            $table->string('pu_phone', 20);
            $table->text('pu_address');
            $table->string('pu_nationality', 100);
            $table->longtext('pu_synopsis');
            $table->enum('pu_active', [true, false]);
            $table->enum('pu_verified', [true, false]);
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
        Schema::dropIfExists('media_publisher');
    }
}
