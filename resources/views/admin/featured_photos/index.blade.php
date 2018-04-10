@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Featured Photos</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Featured Photos List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All featured photos</h5>
                        <div class="ibox-tools">
                            <a href="/admin/featured-photos/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($photos))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($photos))
                                {!! Form::open(['url'=>'admin/featured-photos/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-title">Photo</th>
                                        <th class="project-title">Caption</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($photos as $photo)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$photo->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$photo->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/featured-photos/toggle-status/{{$photo->id}}"
                                                   class="label label-{!! $photo->published ? 'primary' : 'danger' !!}">
                                                    {!! $photo->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                @if($photo->image)
                                                    <a href="{{\App\Models\Upload::findOrFail($photo->image)->path()}}"
                                                       data-fancybox="gallery">
                                                        <img src="{{\App\Models\Upload::findOrFail($photo->image)->path()}}"
                                                             alt="" width="50">
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="project-title">
                                                {!! $photo->caption !!}
                                            </td>
                                            <td class="project-actions">
                                                <a href="/admin/featured-photos/{{$photo->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="customPagination">
                                    {!! $photos->appends(Request::except('page'))->render() !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                <p>No featured photos to show, create <a href="/admin/featured-photos/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected featured photos!'))
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