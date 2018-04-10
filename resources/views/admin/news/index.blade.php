@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>News</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'News List'])


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All news</h5>
                        <div class="ibox-tools">
                            <a href="/admin/news/create" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus-circle"></i> Create</a>
                            @if(count($news))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($news))
                                {!! Form::open(['url'=>'admin/news/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-status">Status</th>
                                        <th class="project-status">Language</th>
                                        <th class="project-title">News Heading</th>
                                        <th class="project-title">Category</th>
                                        <th class="project-title">Featured</th>
                                        <th class="project-title">Image</th>
                                        <th class="project-actions">Operations</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $post)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$post->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$post->published ? 'Unpublish Item' : 'Publish Item'}}"
                                                   href="/admin/news/toggle-status/{{$post->id}}"
                                                   class="label label-{!! $post->published ? 'primary' : 'danger' !!}">
                                                    {!! $post->published ? 'Active' : 'Inactive' !!}
                                                </a>
                                            </td>
                                            <td class="project-status">
                                                {!! $post->isEnglishAndNepali() ? 'English & Nepali' : $post->language !!}
                                            </td>
                                            <td class="project-title">
                                                <a href="/admin/news/{{$post->id}}/edit">
                                                    {!! $post->isEnglish() ? $post->english_heading : '' !!}
                                                    {!! $post->isEnglishAndNepali() ? ' - ' : '' !!}
                                                    {!! $post->isNepali() ? $post->nepali_heading : '' !!}
                                                </a>
                                                <br>
                                                <small>Created
                                                    on: {!! $post->created_at->format('d.m.Y') !!}</small>
                                            </td>
                                            <td class="project-title">
                                                <p>{{$post->belongingCategory->name}}</p>
                                            </td>
                                            <td class="project-status">
                                                <a data-toggle="tooltip" data-placement="top"
                                                   title="{{$post->featured ? 'Unfeature Item Item' : 'Feature Item'}}"
                                                   href="/admin/news/toggle-featured/{{$post->id}}"
<<<<<<< HEAD
                                                   class="label label-{!! $post->featured ? 'primary' : 'danger' !!}">
=======
                                                   class="label label-{!! $post->featured ? 'primary' : 'danger' !!}"
                                                onclick="return confirm('{!! $post->featured ? 'There will be no any featured news !' : 'Another featured news will be replaced by this !' !!}')"
                                                >
>>>>>>> 5c792a6c1988be8cccb22420e6f4d62f5dbd908f
                                                    {!! $post->featured ? 'Featured' : 'Not Featured' !!}
                                                </a>
                                            </td>
                                            <td class="project-title">
                                                @if($post->image)
                                                    <a href="{{\App\Models\Upload::findOrFail($post->image)->path()}}"
                                                       data-fancybox="gallery">
                                                        <img src="{{\App\Models\Upload::findOrFail($post->image)->path()}}"
                                                             alt="{{$post->name}}" width="50">
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="project-actions">
                                                <a href="/admin/news/{{$post->id}}/edit"
                                                   class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! Form::close() !!}
                            @else
                                <p>No news to show, create <a href="/admin/news/create">here</a></p>
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
                if (confirm('WARNING: You are about to trash the selected news!'))
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