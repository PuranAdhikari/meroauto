<?php
use App\Models\Manufacturer;

function selectManufacturers()
{
    return Manufacturer::published()->pluck('name', 'id');
}

function selectCarModels()
{
    $options = Manufacturer::published()->whereHas('car_models')->get()->map(function ($manufacturer) {
        $models = $manufacturer->car_models()->published()->get()->mapWithKeys(function ($model) {
            return [$model->id => $model->name];
        })->toArray();
        return ['manufacturer' => $manufacturer->name, 'models' => $models];
    })->keyBy('manufacturer')->map(function ($model) {
        return $model['models'];
    });
    return $options;
}

function yesNoNA()
{
    $arr = ['N/A', 'Yes', 'No'];
    return array_combine($arr, $arr);
}

function driveTrain()
{
    $arr = ['4WD', '2WD', '4WD (High)', '4WD (Low)', 'FWD', 'RWD'];
    return array_combine($arr, $arr);
}

function clutchType()
{
    $arr = ['Automatic', 'Manual'];
    return array_combine($arr, $arr);
}

function brakeType()
{
    $arr = ['Disk', 'Drum'];
    return array_combine($arr, $arr);
}

function variantCondition()
{
    $arr = ['Brand New (not used)', 'Like New (used few times)', 'Excellent', 'Good', 'Fair'];
    return array_combine($arr, $arr);
}

function modelBodyType()
{
    $arr = ['Hatchback', 'Van', 'Crossover', 'Wagon', 'SUV', 'Coupe', 'Convertible'];
    return array_combine($arr, $arr);
}