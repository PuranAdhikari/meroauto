@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Menu Items</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Menu Items List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All Menu Items</h5>
                        <div class="ibox-tools">
                            <a href="/admin/menu-items/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($menu_items))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($menu_items))
                            {!! Form::open(['url'=>'admin/menu-items/delete', 'id'=>'delete-form']) !!}
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="project-status"><input type="checkbox" id="select-all"></th>
                                    <th class="project-status">Status</th>
                                    <th class="project-title">Menu Item Name</th>
                                    <th class="project-title">Image</th>
                                    <th class="project-actions">Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menu_items as $menu_item)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="select[{{$menu_item->id}}]"
                                                   class="individual-select">
                                        </td>
                                        <td class="project-status">
                                            <a data-toggle="tooltip" data-placement="top"
                                               title="{{$menu_item->published ? 'Unpublish Item' : 'Publish Item'}}"
                                               href="/admin/menu-items/toggle-status/{{$menu_item->id}}"
                                               class="label label-{!! $menu_item->published ? 'primary' : 'danger' !!}">
                                                {!! $menu_item->published ? 'Active' : 'Inactive' !!}
                                            </a>
                                        </td>
                                        <td class="project-title">
                                            <a href="/admin/menu-items/{{$menu_item->id}}/edit">{!! $menu_item->name !!}</a>
                                            <br>
                                            <small>Created
                                                on: {!! $menu_item->created_at->format('d.m.Y') !!}</small>
                                        </td>
                                        <td class="project-title">
                                            @if($menu_item->image)
                                                <a href="{{\App\Models\Upload::findOrFail($menu_item->image)->path()}}" data-fancybox="gallery">
                                                    <img src="{{\App\Models\Upload::findOrFail($menu_item->image)->path()}}"
                                                         alt="{{$menu_item->name}}" width="50">
                                                </a>
                                            @endif
                                        </td>
                                        <td class="project-actions">
                                            <a href="/admin/menu-items/{{$menu_item->id}}/edit"
                                               class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    @if(count($menu_item->children_items))
                                        @include('admin.menu_items._child_tree',['children' => $menu_item->children_items, 'level'=>1])
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            {!! Form::close() !!}
                            @else
                                <p>No menu items to show, create <a href="/admin/menu-items/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected menu_items, their children menu_items and all their included items!'))
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