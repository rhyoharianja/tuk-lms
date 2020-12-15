<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name');
            $table->string('menu_desc');
            $table->string('menu_icon', 30);
            $table->string('menu_route');
            $table->string('menu_type', 15);
            $table->integer('menu_level');
            $table->integer('menu_order');
            $table->enum('menu_active', [true, false]);
            $table->bigInteger('parent_id')->unsigned();
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
        Schema::dropIfExists('menus');
    }
}
