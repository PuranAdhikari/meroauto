<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();

            $table->integer('image')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('published')->default(0);

            $table->string('start_publishing')->nullable();
            $table->string('finish_publishing')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('robots')->nullable();

            $table->integer('hits')->default(0);

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
        Schema::dropIfExists('pages');
    }
}
