<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('id')->on('ad_categories')->onUpdate('cascade')->onDelete('cascade');

            $table->string('link')->nullable();
            $table->integer('image')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('published')->default(0);

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
        Schema::dropIfExists('ad_items');
    }
}
