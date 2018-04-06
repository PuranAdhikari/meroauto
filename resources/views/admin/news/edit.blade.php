@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/news">News</a>
    </li>
    <li class="active">
        <strong>Edit News</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit News'])

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($news, ['method'=>'PUT', 'url'=>'/admin/news/'.$news->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.news._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection