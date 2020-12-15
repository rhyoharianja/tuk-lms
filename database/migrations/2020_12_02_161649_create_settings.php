<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('company_ico');
            $table->text('company_logo');
            $table->longtext('company_address');
            $table->string('company_phone');
            $table->string('company_email');
            $table->text('company_fb');
            $table->text('company_twitter');
            $table->text('company_linkedin');
            $table->longtext('company_description');
            $table->string('company_lat');
            $table->string('company_long');
            $table->string('copyright');
            $table->bigInteger('last_update');
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
        Schema::dropIfExists('settings');
    }
}
