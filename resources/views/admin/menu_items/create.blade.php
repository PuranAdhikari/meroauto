@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/menu-items">Menu Items</a>
    </li>
    <li class="active">
        <strong>Create Menu Item</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Create Menu Item'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::open(['url'=>'/admin/menu-items', 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.menu_items._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection