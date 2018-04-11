<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_colors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('car_models')->onUpdate('cascade')->onDelete('cascade');

            $table->string('color_name')->nullable();
            $table->string('color_code')->nullable();
            $table->integer('image')->unsigned()->nullable();

            $table->integer('created_by');
            $table->integer('updated_by')->nullable();

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
        Schema::dropIfExists('model_colors');
    }
}
