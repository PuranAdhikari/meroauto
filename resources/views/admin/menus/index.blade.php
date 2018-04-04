@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Menus</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Menus List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All menus</h5>
                        <div class="ibox-tools">
                            <a href="/admin/menus/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($menus))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($menus))
                                {!! Form::open(['url'=>'admin/menus/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-title">Title</th>
                                        <th class="project-title">Menu Type</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menus as $menu)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$menu->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$menu->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/menus/toggle-status/{{$menu->id}}"
                                                   class="label label-{!! $menu->published ? 'primary' : 'danger' !!}">
                                                    {!! $menu->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                <a href="/admin/menus/{{$menu->id}}/edit">{!! $menu->title !!}</a>
                                                <br>
                                                <small>Created
                                                    on: {!! $menu->created_at->format('d.m.Y') !!}</small>
                                            </td>

                                            <td class="project-title">
                                                <p>{!! $menu->menu_type !!}</p>
                                            </td>

                                            <td class="project-actions">
                                                <a href="/admin/menus/{{$menu->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                {!! Form::close() !!}
                            @else
                                <p>No menus to show, create <a href="/admin/menus/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected menus, their children menus and all their included items!'))
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