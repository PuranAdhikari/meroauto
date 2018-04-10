@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Car Models</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Car Models List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All car models</h5>
                        <div class="ibox-tools">
                            <a href="/admin/car-models/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($models))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($models))
                                {!! Form::open(['url'=>'admin/car-models/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-title">Name</th>
                                        <th class="project-title">Manufacturer</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($models as $model)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$model->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$model->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/car-models/toggle-status/{{$model->id}}"
                                                   class="label label-{!! $model->published ? 'primary' : 'danger' !!}">
                                                    {!! $model->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                <a href="/admin/car-models/{{$model->id}}/edit">{!! $model->name !!}</a>
                                                <br>
                                                <small>Created
                                                    on: {!! $model->created_at->format('d.m.Y') !!}</small>
                                            </td>
                                            <td class="project-title">
                                                <a target="_blank" href="/admin/manufacturers/{{$model->manufacturer->id}}/edit">{!! $model->manufacturer->name !!}</a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="/admin/car-models/{{$model->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! Form::close() !!}
                            @else
                                <p>No car models to show, create <a href="/admin/car-models/create">here</a></p>
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
            if (ck_box > 0) {
                if (confirm('WARNING: You are about to trash the selected car models!'))
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