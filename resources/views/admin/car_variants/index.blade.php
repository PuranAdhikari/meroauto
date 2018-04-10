@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Car Variants</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Car Variants List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        @include('admin.car_variants._search_form')
                        <h5>All car variants</h5>
                        <div class="ibox-tools">
                            <a href="/admin/car-variants/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($variants))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                <a class="btn btn-success btn-sm"
                                   onclick="$('#car-variant-search-form').slideDown()"><i
                                            class="fa fa-search"></i> Search</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($variants))
                                {!! Form::open(['url'=>'admin/car-variants/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-title">Name</th>
                                        <th class="project-title">Model</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($variants as $variant)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$variant->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$variant->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/car-variants/toggle-status/{{$variant->id}}"
                                                   class="label label-{!! $variant->published ? 'primary' : 'danger' !!}">
                                                    {!! $variant->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                <a href="/admin/car-variants/{{$variant->id}}/edit">{!! $variant->name !!}</a>
                                                <br>
                                                <small>Created
                                                    on: {!! $variant->created_at->format('d.m.Y') !!}</small>
                                            </td>
                                            <td class="project-title">
                                                <a target="_blank" href="/admin/manufacturers/{{$variant->model->id}}/edit">{!! $variant->model->name !!}</a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="/admin/car-variants/{{$variant->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="customPagination">
                                    {!! $variants->appends(Request::except('page'))->render() !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                <p>No car variants to show, create <a href="/admin/car-variants/create">here</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#delete-selected').click(function (e) {
            e.preventDefault();
            var ck_box = $('input[type="checkbox"]:checked').length;
            if (ck_box > 1) {
                if (confirm('WARNING: You are about to trash the selected car variants!'))
                    $('#delete-form').submit();
            }
            else {
                alert('Please first make a selection from the list.')
            }
        });
        $('#select-all').click(function () {
            var checkBoxes = $(".individual-select");
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
        });
    });
</script>
@endpush