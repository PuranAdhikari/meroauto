@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/featured-photos">Featured Photos</a>
    </li>
    <li class="active">
        <strong>Edit Featured Photo</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit Featured Photo'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($featuredPhoto, ['method'=>'PUT', 'url'=>'/admin/featured-photos/'.$featuredPhoto->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.featured_photos._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection