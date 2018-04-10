@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/users">Users</a>
    </li>
    <li class="active">
        <strong>Edit User</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit User'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($user, ['method'=>'PUT', 'url'=>'/admin/users/'.$user->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.users._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection