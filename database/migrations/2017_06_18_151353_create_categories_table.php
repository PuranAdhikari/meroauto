<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('image')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('published')->default(0);

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('robots')->nullable();

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
        Schema::dropIfExists('categories');
    }
}
