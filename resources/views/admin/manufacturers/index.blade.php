@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Manufacturers</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Manufacturers List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        @include('admin.manufacturers._search_form')
                        <h5>All manufacturers</h5>
                        <div class="ibox-tools">
                            <a href="/admin/manufacturers/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($manufacturers))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                <a class="btn btn-success btn-sm"
                                   onclick="$('#manufacturer-search-form').slideDown()"><i
                                            class="fa fa-search"></i> Search</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($manufacturers))
                                {!! Form::open(['url'=>'admin/manufacturers/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-title">Name</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($manufacturers as $manufacturer)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$manufacturer->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$manufacturer->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/manufacturers/toggle-status/{{$manufacturer->id}}"
                                                   class="label label-{!! $manufacturer->published ? 'primary' : 'danger' !!}">
                                                    {!! $manufacturer->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                <a href="/admin/manufacturers/{{$manufacturer->id}}/edit">{!! $manufacturer->name !!}</a>
                                                <br>
                                                <small>Created
                                                    on: {!! $manufacturer->created_at->format('d.m.Y') !!}</small>
                                            </td>
                                            <td class="project-actions">
                                                <a href="/admin/manufacturers/{{$manufacturer->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="customPagination">
                                    {!! $manufacturers->appends(Request::except('page'))->render() !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                <p>No manufacturers to show, create <a href="/admin/manufacturers/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected manufacturers!'))
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