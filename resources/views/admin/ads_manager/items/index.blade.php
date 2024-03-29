@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Ad Items</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Ad Items List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All ad items</h5>
                        <div class="ibox-tools">
                            <a href="/admin/ads-manager/items/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($adItems))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($adItems))
                                {!! Form::open(['url'=>'admin/ads-manager/items/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-title">Name</th>
                                        <th class="project-title">Category</th>
                                        <th class="project-title">Image</th>
                                        <th class="project-title">Link</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($adItems as $item)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$item->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$item->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/ads-manager/items/toggle-status/{{$item->id}}"
                                                   class="label label-{!! $item->published ? 'primary' : 'danger' !!}">
                                                    {!! $item->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                <a href="/admin/ads-manager/items/{{$item->id}}/edit">{!! $item->name !!}</a>
                                                <br>
                                                <small>Created
                                                    on: {!! $item->created_at->format('d.m.Y') !!}</small>
                                            </td>
                                            <td class="project-title">
                                                <p>{{$item->ad_category->name}}</p>
                                            </td>
                                            <td class="project-title">
                                                @if($item->image)
                                                    <a href="{{\App\Models\Upload::findOrFail($item->image)->path()}}"
                                                       data-fancybox="gallery">
                                                        <img src="{{\App\Models\Upload::findOrFail($item->image)->path()}}"
                                                             alt="{{$item->name}}" width="50">
                                                    </a>
                                                @endif
                                            </td>

                                            <td class="project-title">
                                                <a href="{{$item->link}}" target="_blank">{{$item->link}}</a>
                                            </td>
                                            <td class="project-actions">
                                                <a href="/admin/ads-manager/items/{{$item->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="customPagination">
                                    {!! $adItems->appends(Request::except('page'))->render() !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                <p>No ad items to show, create <a href="/admin/ads-manager/items/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected ad items!'))
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