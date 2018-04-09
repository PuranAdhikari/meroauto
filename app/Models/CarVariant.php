<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarVariant extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public static function boot()
    {
        $class = get_called_class();
        $class::observe(new RecordFingerPrintObserver());

        parent::boot();
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }

    public function colors()
    {
        return $this->hasMany(VariantColor::class, 'variant_id');
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function updateFeatures()
    {
        $data['airbags'] = request()->has('airbags') ? 1 : 0;
        $data['passenger_airbags'] = request()->has('passenger_airbags') ? 1 : 0;
        $data['side_airbags'] = request()->has('side_airbags') ? 1 : 0;
        $data['abs'] = request()->has('abs') ? 1 : 0;
        $data['elec_bkfrc_dis'] = request()->has('elec_bkfrc_dis') ? 1 : 0;
        $data['brake_assist'] = request()->has('brake_assist') ? 1 : 0;
        $data['hill_assist'] = request()->has('hill_assist') ? 1 : 0;
        $data['elec_stab_prm'] = request()->has('elec_stab_prm') ? 1 : 0;
        $data['tractional_control'] = request()->has('tractional_control') ? 1 : 0;
        $data['engine_immobilizer'] = request()->has('engine_immobilizer') ? 1 : 0;
        $data['central_locking'] = request()->has('central_locking') ? 1 : 0;
        $data['child_safety_lock'] = request()->has('child_safety_lock') ? 1 : 0;
        $data['power_door_lock'] = request()->has('power_door_lock') ? 1 : 0;
        $data['auto_headlamps'] = request()->has('auto_headlamps') ? 1 : 0;
        $data['cornering_lights'] = request()->has('cornering_lights') ? 1 : 0;
        $data['turn_ind_orvm'] = request()->has('turn_ind_orvm') ? 1 : 0;
        $data['rear_wiper'] = request()->has('rear_wiper') ? 1 : 0;
        $data['rain_sensing_wipers'] = request()->has('rain_sensing_wipers') ? 1 : 0;
        $data['headlight_washers'] = request()->has('headlight_washers') ? 1 : 0;
        $data['headlamp_beam_adj'] = request()->has('headlamp_beam_adj') ? 1 : 0;

        $data['air_cond'] = request()->has('air_cond') ? 1 : 0;
        $data['heater'] = request()->has('heater') ? 1 : 0;
        $data['steering_adj'] = request()->has('steering_adj') ? 1 : 0;
        $data['steering_mntd_aud'] = request()->has('steering_mntd_aud') ? 1 : 0;
        $data['paddle_shift'] = request()->has('paddle_shift') ? 1 : 0;
        $data['cruise_control'] = request()->has('cruise_control') ? 1 : 0;
        $data['pwr_outlets_12v'] = request()->has('pwr_outlets_12v') ? 1 : 0;
        $data['rear_park_sens'] = request()->has('rear_park_sens') ? 1 : 0;
        $data['rear_park_cam'] = request()->has('rear_park_cam') ? 1 : 0;
        $data['elec_adj_rear_vm'] = request()->has('elec_adj_rear_vm') ? 1 : 0;
        $data['push_ss_btn'] = request()->has('push_ss_btn') ? 1 : 0;
        $data['hgt_adj_ds'] = request()->has('hgt_adj_ds') ? 1 : 0;
        $data['lumbar_sprt'] = request()->has('lumbar_sprt') ? 1 : 0;
        $data['frnt_armset'] = request()->has('frnt_armset') ? 1 : 0;
        $data['rear_armset'] = request()->has('rear_armset') ? 1 : 0;
        $data['upholstery'] = request()->has('upholstery') ? 1 : 0;
        $data['frnt_cup_holders'] = request()->has('frnt_cup_holders') ? 1 : 0;
        $data['keyless_entry'] = request()->has('keyless_entry') ? 1 : 0;
        $data['climate_control'] = request()->has('climate_control') ? 1 : 0;

        $data['light_type'] = request()->has('light_type') ? 1 : 0;
        $data['frnt_fog_lamps'] = request()->has('frnt_fog_lamps') ? 1 : 0;
        $data['rear_fog_lamps'] = request()->has('rear_fog_lamps') ? 1 : 0;

        $data['dist_to_empty'] = request()->has('dist_to_empty') ? 1 : 0;
        $data['avg_fuel_eff_ind'] = request()->has('avg_fuel_eff_ind') ? 1 : 0;
        $data['seat_belt_warn'] = request()->has('seat_belt_warn') ? 1 : 0;
        $data['low_fuel_warn'] = request()->has('low_fuel_warn') ? 1 : 0;
        $data['door_ajar_warn'] = request()->has('door_ajar_warn') ? 1 : 0;
        $data['gps_nav'] = request()->has('gps_nav') ? 1 : 0;

        $data['music_system'] = request()->has('music_system') ? 1 : 0;
        $data['cd_dvd'] = request()->has('cd_dvd') ? 1 : 0;
        $data['speakers'] = request()->has('speakers') ? 1 : 0;
        $data['internal_memory'] = request()->has('internal_memory') ? 1 : 0;
        $data['radio'] = request()->has('radio') ? 1 : 0;
        $data['usb_support'] = request()->has('usb_support') ? 1 : 0;
        $data['bt_support'] = request()->has('bt_support') ? 1 : 0;

        self::update($data);
    }
}
