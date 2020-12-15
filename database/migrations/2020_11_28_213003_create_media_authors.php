<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_authors', function (Blueprint $table) {
            $table->id();
            $table->string('au_fullname');
            $table->string('au_photo');
            $table->string('au_bod');
            $table->string('au_email', 150);
            $table->string('au_phone', 20);
            $table->text('au_address');
            $table->string('au_nationality', 100);
            $table->longtext('au_synopsis');
            $table->enum('au_active', [true, false]);
            $table->enum('au_verified', [true, false]);
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
        Schema::dropIfExists('media_authors');
    }
}
