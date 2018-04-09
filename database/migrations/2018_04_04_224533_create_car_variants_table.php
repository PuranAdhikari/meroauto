<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_variants', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('car_model_id')->unsigned();
            $table->foreign('car_model_id')->references('id')->on('car_models')->onUpdate('cascade')->onDelete('cascade');

            $table->string('on_road_price')->nullable();
            $table->string('ex_showroom')->nullable();
            $table->string('insurance')->nullable();
            $table->string('rto_amount')->nullable();
            $table->string('tcs')->nullable();

            $table->string('warranty')->nullable();
            $table->longText('vehicle_overview')->nullable();

            $table->string('engine_type')->nullable();
            $table->string('power')->nullable();
            $table->string('displacement')->nullable();
            $table->string('torque')->nullable();
            $table->string('no_of_cylinder')->nullable();
            $table->string('drive_train')->nullable();

            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('wheelbase')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('boot_space')->nullable();
            $table->string('kerb_weight')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('front_track')->nullable();
            $table->string('rear_track')->nullable();
            $table->string('min_turning_radius')->nullable();
            $table->string('no_of_doors')->nullable();
            $table->string('seating_capacity')->nullable();

            $table->string('no_of_gears')->nullable();
            $table->string('clutch_type')->nullable();

            $table->string('wheel_type')->nullable();
            $table->string('tyre_type')->nullable();
            $table->string('front_tyre_size')->nullable();
            $table->string('rear_tyre_size')->nullable();

            $table->string('front_brake_type')->nullable();
            $table->string('rear_brake_type')->nullable();

            $table->string('front_suspension')->nullable();
            $table->string('rear_suspension')->nullable();

            $table->string('mileage_city')->nullable();
            $table->string('mileage_highway')->nullable();
            $table->string('mileage')->nullable();
            $table->string('fuel_tank_capacity')->nullable();

            $table->string('power_steering')->nullable();
            $table->string('steering_type')->nullable();
            $table->string('adjustable_power_steering')->nullable();

            $table->string('performance_0_100')->nullable();
            $table->string('max_speed')->nullable();

            $table->tinyInteger('airbags')->default(0);
            $table->tinyInteger('passenger_airbags')->default(0);
            $table->tinyInteger('side_airbags')->default(0);
            $table->tinyInteger('abs')->default(0);
            $table->tinyInteger('elec_bkfrc_dis')->default(0);
            $table->tinyInteger('brake_assist')->default(0);
            $table->tinyInteger('hill_assist')->default(0);
            $table->tinyInteger('elec_stab_prm')->default(0);
            $table->tinyInteger('tractional_control')->default(0);
            $table->tinyInteger('engine_immobilizer')->default(0);
            $table->tinyInteger('central_locking')->default(0);
            $table->tinyInteger('child_safety_lock')->default(0);
            $table->tinyInteger('power_door_lock')->default(0);
            $table->tinyInteger('auto_headlamps')->default(0);
            $table->tinyInteger('cornering_lights')->default(0);
            $table->tinyInteger('turn_ind_orvm')->default(0);
            $table->tinyInteger('rear_wiper')->default(0);
            $table->tinyInteger('rain_sensing_wipers')->default(0);
            $table->tinyInteger('headlight_washers')->default(0);
            $table->tinyInteger('headlamp_beam_adj')->default(0);

            $table->tinyInteger('air_cond')->default(0);
            $table->tinyInteger('heater')->default(0);
            $table->tinyInteger('steering_adj')->default(0);
            $table->tinyInteger('steering_mntd_aud')->default(0);
            $table->tinyInteger('paddle_shift')->default(0);
            $table->tinyInteger('cruise_control')->default(0);
            $table->tinyInteger('pwr_outlets_12v')->default(0);
            $table->tinyInteger('rear_park_sens')->default(0);
            $table->tinyInteger('rear_park_cam')->default(0);
            $table->tinyInteger('elec_adj_rear_vm')->default(0);
            $table->tinyInteger('push_ss_btn')->default(0);
            $table->tinyInteger('hgt_adj_ds')->default(0);
            $table->tinyInteger('lumbar_sprt')->default(0);
            $table->tinyInteger('frnt_armset')->default(0);
            $table->tinyInteger('rear_armset')->default(0);
            $table->tinyInteger('upholstery')->default(0);
            $table->tinyInteger('frnt_cup_holders')->default(0);
            $table->tinyInteger('keyless_entry')->default(0);
            $table->tinyInteger('climate_control')->default(0);

            $table->tinyInteger('light_type')->default(0);
            $table->tinyInteger('frnt_fog_lamps')->default(0);
            $table->tinyInteger('rear_fog_lamps')->default(0);

            $table->tinyInteger('dist_to_empty')->default(0);
            $table->tinyInteger('avg_fuel_eff_ind')->default(0);
            $table->tinyInteger('seat_belt_warn')->default(0);
            $table->tinyInteger('low_fuel_warn')->default(0);
            $table->tinyInteger('door_ajar_warn')->default(0);
            $table->tinyInteger('gps_nav')->default(0);

            $table->tinyInteger('music_system')->default(0);
            $table->tinyInteger('cd_dvd')->default(0);
            $table->tinyInteger('speakers')->default(0);
            $table->tinyInteger('internal_memory')->default(0);
            $table->tinyInteger('radio')->default(0);
            $table->tinyInteger('usb_support')->default(0);
            $table->tinyInteger('bt_support')->default(0);

            $table->tinyInteger('published')->default(0);
            $table->string('images')->nullable();

            $table->tinyInteger('used_car')->default(0);
            $table->string('kilometers_running')->nullable();
            $table->string('no_of_ownership')->nullable();
            $table->string('condition')->nullable();
            $table->string('used_for')->nullable();
            $table->string('lot')->nullable();

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
        Schema::dropIfExists('car_variants');
    }
}
