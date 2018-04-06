@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Categories</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Categories List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All categories</h5>
                        <div class="ibox-tools">
                            <a href="/admin/categories/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($categories))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($categories))
                            {!! Form::open(['url'=>'admin/categories/delete', 'id'=>'delete-form']) !!}
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="project-status"><input type="checkbox" id="select-all"></th>
                                    <th class="project-status">Status</th>
                                    <th class="project-title">Category Name</th>
                                    <th class="project-title">Image</th>
                                    <th class="project-actions">Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="select[{{$category->id}}]"
                                                   class="individual-select">
                                        </td>
                                        <td class="project-status">
                                            <a data-toggle="tooltip" data-placement="top"
                                               title="{{$category->published ? 'Unpublish Item' : 'Publish Item'}}"
                                               href="/admin/categories/toggle-status/{{$category->id}}"
                                               class="label label-{!! $category->published ? 'primary' : 'danger' !!}">
                                                {!! $category->published ? 'Active' : 'Inactive' !!}
                                            </a>
                                        </td>
                                        <td class="project-title">
                                            <a href="/admin/categories/{{$category->id}}/edit">{!! $category->name !!}</a>
                                            <br>
                                            <small>Created
                                                on: {!! $category->created_at->format('d.m.Y') !!}</small>
                                        </td>
                                        <td class="project-title">
                                            @if($category->image)
                                                <a href="{{\App\Models\Upload::findOrFail($category->image)->path()}}" data-fancybox="gallery">
                                                    <img src="{{\App\Models\Upload::findOrFail($category->image)->path()}}"
                                                         alt="{{$category->name}}" width="50">
                                                </a>
                                            @endif
                                        </td>
                                        <td class="project-actions">
                                            <a href="/admin/categories/{{$category->id}}/edit"
                                               class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @if(count($category->children_categories))
                                        @include('admin.categories._child_tree',['children' => $category->children_categories, 'level'=>1])
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            @else
                                <p>No categories to show, create <a href="/admin/categories/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected categories, their children categories and all their included items!'))
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