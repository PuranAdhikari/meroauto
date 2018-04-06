@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/categories">Categories</a>
    </li>
    <li class="active">
        <strong>Edit Category</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit Category'])

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($category, ['method'=>'PUT', 'url'=>'/admin/categories/'.$category->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.categories._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection