<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language');
            $table->string('english_heading')->nullable();
            $table->string('nepali_heading')->nullable();
            $table->string('english_sub_heading')->nullable();
            $table->string('nepali_sub_heading')->nullable();
            $table->string('slug')->unique();
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('image')->unsigned()->nullable();

            $table->text('english_content')->nullable();
            $table->text('nepali_content')->nullable();

            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->tinyInteger('main_news')->default(0);

            $table->string('start_publishing')->nullable();
            $table->string('finish_publishing')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('robots')->nullable();

            $table->integer('hits')->default(0);

            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('news');
    }
}
