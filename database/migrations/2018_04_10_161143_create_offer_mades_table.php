<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferMadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_mades', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('variant_id')->unsigned();
            $table->foreign('variant_id')->references('id')->on('car_variants')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('offered_price')->nullable();
            $table->string('financing_required')->nullable();
            $table->text('comments')->nullable();
            $table->string('preferred_contact')->nullable();

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
        Schema::dropIfExists('offer_mades');
    }
}
