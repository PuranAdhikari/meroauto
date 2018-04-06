@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/menus">Menus</a>
    </li>
    <li class="active">
        <strong>Edit Menu</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit Menu'])

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($menu, ['method'=>'PUT', 'url'=>'/admin/menus/'.$menu->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.menus._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection