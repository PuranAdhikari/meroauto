@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/ads-manager/categories">Ad Categories</a>
    </li>
    <li class="active">
        <strong>Edit Ad Category</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit Ad Category'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($category, ['method'=>'PUT', 'url'=>'/admin/ads-manager/categories/'.$category->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.ads_manager.categories._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection