<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onUpdate('cascade')->onDelete('cascade');

            $table->string('model_year')->nullable();
            $table->string('body_type')->nullable();

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
        Schema::dropIfExists('car_models');
    }
}
