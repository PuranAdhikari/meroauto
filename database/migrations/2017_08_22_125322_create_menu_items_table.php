<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('menu')->unsigned();
            $table->foreign('menu')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('menu_items')->onUpdate('cascade')->onDelete('cascade');

            $table->tinyInteger('published')->default(0);
            $table->integer('ordering')->nullable();

            $table->string('menu_item_type');

            $table->integer('news')->unsigned()->nullable();
            $table->foreign('news')->references('id')->on('news')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('page')->unsigned()->nullable();
            $table->foreign('page')->references('id')->on('pages')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('category')->unsigned()->nullable();
            $table->foreign('category')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

            $table->string('custom_link')->nullable();

            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();

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
        Schema::dropIfExists('menu_items');
    }
}
