@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/manufacturers">Manufacturers</a>
    </li>
    <li class="active">
        <strong>Create Manufacturer</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Create Manufacturer'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::open(['url'=>'/admin/manufacturers', 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.manufacturers._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection