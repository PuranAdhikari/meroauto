@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/posts">Posts</a>
    </li>
    <li class="active">
        <strong>Edit Post</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit Post'])

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($post, ['method'=>'PUT', 'url'=>'/admin/posts/'.$post->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.posts._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection