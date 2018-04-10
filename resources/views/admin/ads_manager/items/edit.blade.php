@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li>
        <a href="/admin/ads-manager/items">Ad Items</a>
    </li>
    <li class="active">
        <strong>Edit Ad Item</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Edit Ad Item'])


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($item, ['method'=>'PUT', 'url'=>'/admin/ads-manager/items/'.$item->id, 'class'=>'form-horizontal']) !!}
                        {{csrf_field()}}
                        @include('admin.ads_manager.items._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection