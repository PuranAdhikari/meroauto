@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<ul class="nav nav-tabs tabs" role="tablist">
    <li role="presentation" class="active"><a role="tab" href="#variant-basic">Basic</a></li>
    <li><a href="#variant-specifications" class="metadata">Specifications</a></li>
    <li><a href="#variant-features" class="metadata">Features</a></li>
    <li><a href="#variant-images" class="metadata">Images</a></li>
    <li><a href="#variant-used-cars" class="metadata">For Used Cars Only</a></li>
</ul>
<br>
<br>
<div class="tab-content">
    <div class="tab-pane fade active in" id="variant-basic" role="tabpanel">
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">Name *</label>
            <div class="col-md-10">
                {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'car-variant-name']) !!}
                {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="slug" class="col-md-2 control-label">Slug *</label>
            <div class="col-md-10">
                {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'car-variant-slug']) !!}
                {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="car_model_id" class="col-md-2 control-label">Model *</label>
            <div class="col-md-4">
                {!! Form::select('car_model_id', selectCarModels(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
                {!!$errors->first('car_model_id', '<span class="text-danger has-error">:message</span>')!!}
            </div>

            <label for="on_road_price" class="col-md-2 control-label">On Road Price</label>
            <div class="col-md-4">
                {!! Form::text('on_road_price', null, ['class'=>'form-control']) !!}
                {!!$errors->first('on_road_price', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="ex_showroom" class="col-md-2 control-label">Ex-showroom</label>
            <div class="col-md-4">
                {!! Form::text('ex_showroom', null, ['class'=>'form-control']) !!}
                {!!$errors->first('ex_showroom', '<span class="text-danger has-error">:message</span>')!!}
            </div>

            <label for="insurance" class="col-md-2 control-label">Insurance</label>
            <div class="col-md-4">
                {!! Form::text('insurance', null, ['class'=>'form-control']) !!}
                {!!$errors->first('insurance', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="rto_amount" class="col-md-2 control-label">RTO Amount</label>
            <div class="col-md-4">
                {!! Form::text('rto_amount', null, ['class'=>'form-control']) !!}
                {!!$errors->first('rto_amount', '<span class="text-danger has-error">:message</span>')!!}
            </div>

            <label for="tcs" class="col-md-2 control-label">TCS</label>
            <div class="col-md-4">
                {!! Form::text('tcs', null, ['class'=>'form-control']) !!}
                {!!$errors->first('tcs', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="vehicle_overview" class="col-md-2 control-label">Vehicle Overview</label>
            <div class="col-md-10">
                {!! Form::textarea('vehicle_overview', null, ['class'=>'form-control summernote']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="warranty" class="col-md-2 control-label">Warranty</label>
            <div class="col-md-4">
                {!! Form::text('warranty', null, ['class'=>'form-control']) !!}
                {!!$errors->first('warranty', '<span class="text-danger has-error">:message</span>')!!}
            </div>

            <label for="published" class="col-md-2 control-label">Published</label>
            <div class="col-md-4">
                {!! Form::checkbox('published', null, null, ['class'=>'js-switch']) !!}
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="variant-specifications" role="tabpanel">
        <div class="panel-body">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#engine">ENGINE</a>
                        </h5>
                    </div>
                    <div id="engine" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="engine_type" class="col-md-2 control-label">Engine Type</label>
                                <div class="col-md-4">
                                    {!! Form::text('engine_type', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('engine_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="displacement" class="col-md-2 control-label">Displacement (CC)</label>
                                <div class="col-md-4">
                                    {!! Form::text('displacement', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('displacement', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_of_cylinder" class="col-md-2 control-label">No Of Cylinder</label>
                                <div class="col-md-4">
                                    {!! Form::number('no_of_cylinder', null, ['class'=>'form-control', 'min'=>'1']) !!}
                                    {!!$errors->first('no_of_cylinder', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="power" class="col-md-2 control-label">Power</label>
                                <div class="col-md-4">
                                    {!! Form::text('power', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('power', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="torque" class="col-md-2 control-label">Torque</label>
                                <div class="col-md-4">
                                    {!! Form::text('torque', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('torque', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="drive_train" class="col-md-2 control-label">Drive Train</label>
                                <div class="col-md-4">
                                    {!! Form::select('drive_train', driveTrain(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
                                    {!!$errors->first('drive_train', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#dimensions">DIMENSIONS</a>
                        </h4>
                    </div>
                    <div id="dimensions" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="length" class="col-md-2 control-label">Length</label>
                                <div class="col-md-4">
                                    {!! Form::text('length', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('length', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="width" class="col-md-2 control-label">Width</label>
                                <div class="col-md-4">
                                    {!! Form::text('width', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('width', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="height" class="col-md-2 control-label">Height</label>
                                <div class="col-md-4">
                                    {!! Form::text('height', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('height', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="wheelbase" class="col-md-2 control-label">Wheelbase</label>
                                <div class="col-md-4">
                                    {!! Form::text('wheelbase', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('wheelbase', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ground_clearance" class="col-md-2 control-label">Ground Clearance</label>
                                <div class="col-md-4">
                                    {!! Form::text('ground_clearance', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('ground_clearance', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="boot_space" class="col-md-2 control-label">Boot Space</label>
                                <div class="col-md-4">
                                    {!! Form::text('boot_space', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('boot_space', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kerb_weight" class="col-md-2 control-label">Kerb Weight</label>
                                <div class="col-md-4">
                                    {!! Form::text('kerb_weight', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('kerb_weight', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="gross_weight" class="col-md-2 control-label">Gross Weight</label>
                                <div class="col-md-4">
                                    {!! Form::text('gross_weight', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('gross_weight', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="front_track" class="col-md-2 control-label">Front Track</label>
                                <div class="col-md-4">
                                    {!! Form::text('front_track', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('front_track', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                                <label for="rear_track" class="col-md-2 control-label">Rear Track</label>
                                <div class="col-md-4">
                                    {!! Form::text('rear_track', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('rear_track', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="min_turning_radius" class="col-md-2 control-label">Minimum Turning
                                    Radius</label>
                                <div class="col-md-4">
                                    {!! Form::number('min_turning_radius', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('min_turning_radius', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                                <label for="no_of_doors" class="col-md-2 control-label">No. Of Doors</label>
                                <div class="col-md-4">
                                    {!! Form::number('no_of_doors', null, ['class'=>'form-control', 'min'=>'1']) !!}
                                    {!!$errors->first('no_of_doors', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="seating_capacity" class="col-md-2 control-label">Seating Capacity</label>
                                <div class="col-md-4">
                                    {!! Form::number('seating_capacity', null, ['class'=>'form-control', 'min'=>'1']) !!}
                                    {!!$errors->first('seating_capacity', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#transmission">TRANSMISSION</a>
                        </h5>
                    </div>
                    <div id="transmission" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="no_of_gears" class="col-md-2 control-label">No. of gears</label>
                                <div class="col-md-4">
                                    {!! Form::number('no_of_gears', null, ['class'=>'form-control', 'min'=>'1']) !!}
                                    {!!$errors->first('no_of_gears', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="clutch_type" class="col-md-2 control-label">Clutch Type</label>
                                <div class="col-md-4">
                                    {!! Form::select('clutch_type', clutchType(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
                                    {!!$errors->first('clutch_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#wheels_and_tyres">WHEELS &
                                TYRES</a>
                        </h5>
                    </div>
                    <div id="wheels_and_tyres" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="wheel_type" class="col-md-2 control-label">Wheel Type</label>
                                <div class="col-md-4">
                                    {!! Form::text('wheel_type', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('wheel_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="tyre_type" class="col-md-2 control-label">Tyre Type</label>
                                <div class="col-md-4">
                                    {!! Form::text('tyre_type', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('tyre_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="front_tyre_size" class="col-md-2 control-label">Front Tyre Size</label>
                                <div class="col-md-4">
                                    {!! Form::text('front_tyre_size', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('front_tyre_size', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="rear_tyre_size" class="col-md-2 control-label">Rear Tyre Size</label>
                                <div class="col-md-4">
                                    {!! Form::text('rear_tyre_size', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('rear_tyre_size', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#braking_system">BRAKING SYSTEM</a>
                        </h5>
                    </div>
                    <div id="braking_system" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="front_brake_type" class="col-md-2 control-label">Front Brake Type</label>
                                <div class="col-md-4">
                                    {!! Form::select('front_brake_type', brakeType(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
                                    {!!$errors->first('front_brake_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="rear_brake_type" class="col-md-2 control-label">Rear Brake Type</label>
                                <div class="col-md-4">
                                    {!! Form::select('rear_brake_type', brakeType(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
                                    {!!$errors->first('rear_brake_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#suspension">SUSPENSION</a>
                        </h5>
                    </div>
                    <div id="suspension" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="front_suspension" class="col-md-2 control-label">Front Suspension</label>
                                <div class="col-md-4">
                                    {!! Form::text('front_suspension', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('front_suspension', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="rear_suspension" class="col-md-2 control-label">Rear Suspension</label>
                                <div class="col-md-4">
                                    {!! Form::text('rear_suspension', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('rear_suspension', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#fuel_efficiency">FUEL
                                EFFICIENCY</a>
                        </h5>
                    </div>
                    <div id="fuel_efficiency" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="mileage_city" class="col-md-2 control-label">Mileage City</label>
                                <div class="col-md-4">
                                    {!! Form::text('mileage_city', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('mileage_city', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="mileage_highway" class="col-md-2 control-label">Mileage Highway</label>
                                <div class="col-md-4">
                                    {!! Form::text('mileage_highway', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('mileage_highway', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mileage" class="col-md-2 control-label">Mileage</label>
                                <div class="col-md-4">
                                    {!! Form::text('mileage', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('mileage', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="fuel_tank_capacity" class="col-md-2 control-label">Fuel Tank
                                    Capacity</label>
                                <div class="col-md-4">
                                    {!! Form::text('fuel_tank_capacity', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('fuel_tank_capacity', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#steering">STEERING</a>
                        </h5>
                    </div>
                    <div id="steering" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="power_steering" class="col-md-2 control-label">Power Steering</label>
                                <div class="col-md-4">
                                    {!! Form::select('power_steering', yesNoNA(), null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('power_steering', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="steering_type" class="col-md-2 control-label">Steering Type</label>
                                <div class="col-md-4">
                                    {!! Form::text('steering_type', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('steering_type', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="adjustable_power_steering" class="col-md-2 control-label">Adjustable Power
                                    Steering</label>
                                <div class="col-md-4">
                                    {!! Form::select('adjustable_power_steering', yesNoNA(), null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('adjustable_power_steering', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#performance">PERFORMANCE</a>
                        </h5>
                    </div>
                    <div id="performance" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="performance_0_100" class="col-md-2 control-label">Performance 0 to 100
                                    Kmph</label>
                                <div class="col-md-4">
                                    {!! Form::text('performance_0_100', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('performance_0_100', '<span class="text-danger has-error">:message</span>')!!}
                                </div>

                                <label for="max_speed" class="col-md-2 control-label">Max Speed</label>
                                <div class="col-md-4">
                                    {!! Form::text('max_speed', null, ['class'=>'form-control']) !!}
                                    {!!$errors->first('max_speed', '<span class="text-danger has-error">:message</span>')!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="variant-features" role="tabpanel">
        <div class="row make-columns">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-lock"></i> &nbsp;&nbsp;
                        Safety & Security
                    </div>
                    <div class="panel-body">
                        <label>{!! Form::checkbox('airbags', 1, null, ['class'=>'i-checks']) !!}
                            &nbsp;&nbsp;Airbags</label><br>
                        <label>{!! Form::checkbox('passenger_airbags', 1, null, ['class'=>'i-checks']) !!}
                            &nbsp;&nbsp;Passenger Airbags</label><br>
                        <label>{!! Form::checkbox('side_airbags', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Side
                            Airbags</label><br>
                        <label>{!! Form::checkbox('abs', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;ABS</label><br>
                        <label>{!! Form::checkbox('elec_bkfrc_dis', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Electronic
                            Brakeforce Distribution</label><br>
                        <label>{!! Form::checkbox('brake_assist', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Brake
                            Assist</label><br>
                        <label>{!! Form::checkbox('hill_assist', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Hill
                            Assist</label><br>
                        <label>{!! Form::checkbox('elec_stab_prm', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Electronic
                            Stability Program</label><br>
                        <label>{!! Form::checkbox('tractional_control', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Tractional
                            Control</label><br>
                        <label>{!! Form::checkbox('engine_immobilizer', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Engine
                            Immobilizer</label><br>
                        <label>{!! Form::checkbox('central_locking', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Central
                            Locking</label><br>
                        <label>{!! Form::checkbox('child_safety_lock', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Child
                            Safety Lock</label><br>
                        <label>{!! Form::checkbox('power_door_lock', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Power
                            Door Lock</label><br>
                        <label>{!! Form::checkbox('auto_headlamps', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Automatic
                            Headlamps</label><br>
                        <label>{!! Form::checkbox('cornering_lights', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Cornering
                            Lights</label><br>
                        <label>{!! Form::checkbox('turn_ind_orvm', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Turn
                            Indicators On ORVM</label><br>
                        <label>{!! Form::checkbox('rear_wiper', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Rear
                            Wiper</label><br>
                        <label>{!! Form::checkbox('rain_sensing_wipers', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Rain
                            Sensing Wipers</label><br>
                        <label>{!! Form::checkbox('headlight_washers', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Headlight
                            Washers</label><br>
                        <label>{!! Form::checkbox('headlamp_beam_adj', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Headlight
                            Beam Adjuster</label><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-wheelchair"></i> &nbsp;&nbsp;
                        Comfort & Convenience
                    </div>
                    <div class="panel-body">
                        <label>{!! Form::checkbox('air_cond', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Air
                            Conditioner</label><br>
                        <label>{!! Form::checkbox('heater', 1, null, ['class'=>'i-checks']) !!}
                            &nbsp;&nbsp;Heater</label><br>
                        <label>{!! Form::checkbox('steering_adj', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Steering
                            Adjustment</label><br>
                        <label>{!! Form::checkbox('steering_mntd_aud', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Steering
                            Mounted Audio</label><br>
                        <label>{!! Form::checkbox('paddle_shift', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Paddle
                            Shift</label><br>
                        <label>{!! Form::checkbox('cruise_control', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Cruise
                            Control</label><br>
                        <label>{!! Form::checkbox('pwr_outlets_12v', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Power
                            Outlets 12V</label><br>
                        <label>{!! Form::checkbox('rear_park_sens', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Rear
                            Parking Sensor</label><br>
                        <label>{!! Form::checkbox('rear_park_cam', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Rear
                            Parking Camera</label><br>
                        <label>{!! Form::checkbox('elec_adj_rear_vm', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Electrically
                            Adjustable Rear View Mirror</label><br>
                        <label>{!! Form::checkbox('push_ss_btn', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Push
                            Start Stop Button</label><br>
                        <label>{!! Form::checkbox('hgt_adj_ds', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Height
                            Adjustable Driver Seat</label><br>
                        <label>{!! Form::checkbox('lumbar_sprt', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Lumbar
                            Support</label><br>
                        <label>{!! Form::checkbox('frnt_armset', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Front
                            Armrest</label><br>
                        <label>{!! Form::checkbox('rear_armset', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Rear
                            Armrest</label><br>
                        <label>{!! Form::checkbox('upholstery', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Upholstery</label><br>
                        <label>{!! Form::checkbox('frnt_cup_holders', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Front
                            Cup Holders</label><br>
                        <label>{!! Form::checkbox('keyless_entry', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Keyless
                            Entry</label><br>
                        <label>{!! Form::checkbox('climate_control', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Climate
                            Control</label><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;
                        Lights
                    </div>
                    <div class="panel-body">
                        <label>{!! Form::checkbox('light_type', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Light
                            Type</label><br>
                        <label>{!! Form::checkbox('frnt_fog_lamps', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Front
                            Fog Lamps</label><br>
                        <label>{!! Form::checkbox('rear_fog_lamps', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Rear
                            Fog Lamps</label><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-phone"></i> &nbsp;&nbsp;
                        Instrumentation & Communication
                    </div>
                    <div class="panel-body">
                        <label>{!! Form::checkbox('dist_to_empty', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Distance
                            To Empty</label><br>
                        <label>{!! Form::checkbox('avg_fuel_eff_ind', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Average
                            Fuel Efficiency Indicator</label><br>
                        <label>{!! Form::checkbox('seat_belt_warn', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Seat
                            Belt Warning</label><br>
                        <label>{!! Form::checkbox('low_fuel_warn', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Low
                            Fuel Warning</label><br>
                        <label>{!! Form::checkbox('door_ajar_warn', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Door
                            Ajar Warning</label><br>
                        <label>{!! Form::checkbox('gps_nav', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;GPS
                            Navigation</label><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-music"></i> &nbsp;&nbsp;
                        Entertainment
                    </div>
                    <div class="panel-body">
                        <label>{!! Form::checkbox('music_system', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Music
                            System</label><br>
                        <label>{!! Form::checkbox('cd_dvd', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;CD/DVD
                            Player</label><br>
                        <label>{!! Form::checkbox('speakers', 1, null, ['class'=>'i-checks']) !!}
                            &nbsp;&nbsp;Speakers</label><br>
                        <label>{!! Form::checkbox('internal_memory', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Internal
                            Memory</label><br>
                        <label>{!! Form::checkbox('radio', 1, null, ['class'=>'i-checks']) !!}
                            &nbsp;&nbsp;Radio</label><br>
                        <label>{!! Form::checkbox('usb_support', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;USB
                            Support</label><br>
                        <label>{!! Form::checkbox('bt_support', 1, null, ['class'=>'i-checks']) !!} &nbsp;&nbsp;Bluetooth
                            Support</label><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="variant-images" role="tabpanel">
        <div class="form-group">
            <label for="images" class="col-md-2 control-label">Images</label>
            <div class="col-md-10">
                <input class="form-control" placeholder="Choose Images" name="images" type="hidden"
                       value="{!! isset($variant) && $variant->images ? $variant->images : '[]' !!}">
                @if(isset($variant) && $variant->images)
                    <div class='uploaded_files'>
                        @foreach(json_decode($variant->images) as $image)
                            <a class='uploaded_file2' upload_id="{{$image}}"
                               target='_blank'
                               href='{{\App\Models\Upload::find($image)->path()}}'><img
                                        src='{{\App\Models\Upload::find($image)->path()}}'><i
                                        title='Remove File' class='fa fa-times'></i></a>
                        @endforeach
                    </div>
                @else
                    <div class='uploaded_files'>
                    </div>
                @endif
                <a class='btn btn-default btn_upload_files' file_type='files' selecter='images'
                   style='margin-top:5px;'>Upload <i class='fa fa-cloud-upload'></i></a></div>

        </div>
    </div>
    <div class="tab-pane fade" id="variant-used-cars" role="tabpanel">
        <div class="form-group">
            <label for="used_car" class="col-md-2 control-label">Used Car</label>
            <div class="col-md-10">
                {!! Form::checkbox('used_car', null, null, ['class'=>'js-switch', 'id'=>'used_car']) !!}
            </div>
        </div>
        <div class="if-used" {{isset($variant) && $variant->used_car ? '' : 'hidden'}}>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label for="kilometers_running" class="col-md-2 control-label">Kilometers Running</label>
                <div class="col-md-4">
                    {!! Form::text('kilometers_running', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('kilometers_running', '<span class="text-danger has-error">:message</span>')!!}
                </div>
                <label for="no_of_ownership" class="col-md-2 control-label">No. of Ownership</label>
                <div class="col-md-4">
                    {!! Form::text('no_of_ownership', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('no_of_ownership', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label for="condition" class="col-md-2 control-label">Condition</label>
                <div class="col-md-4">
                    {!! Form::select('condition', variantCondition(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
                    {!!$errors->first('condition', '<span class="text-danger has-error">:message</span>')!!}
                </div>
                <label for="no_of_ownership" class="col-md-2 control-label">Used For (Year / Month)</label>
                <div class="col-md-4">
                    {!! Form::text('used_for', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('used_for', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label for="lot" class="col-md-2 control-label">Lot</label>
                <div class="col-md-4">
                    {!! Form::text('lot', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('lot', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit" name="save" value="save">Save</button>
        <button class="btn btn-info" type="submit" name="save_close" value="save">Save & Close</button>
        <a class="btn btn-white" href="/admin/car-variants"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>


@push('scripts')

<script>
    $(document).ready(function () {
        $("#car-variant-name").change(function () {
            var name = $(this).val();
            $.ajax({
                type: "get",
                url: '/admin/car-variants/slug/' + name,
                cache: false,
                success: function (result) {
                    $('#car-variant-slug').val(result);
                }
            });
        });

        var usedCar = document.querySelector('#used_car');
        usedCar.onchange = function () {
            if (usedCar.checked) {
                $('.if-used').show();
            } else {
                $('.if-used').hide();
            }
        };
    });
</script>

@endpush