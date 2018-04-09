@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/car-variants">Car Variants</a>
    </li>
    <li class="active">
        <strong>Create Car Variant</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Create Car Variant'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::open(['url'=>'/admin/car-variants', 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.car_variants._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection