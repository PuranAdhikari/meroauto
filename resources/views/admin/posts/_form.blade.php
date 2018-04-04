<ul class="nav nav-tabs tabs" role="tablist">
    <li role="presentation" class="active"><a role="tab" href="#cat-basic">Basic</a></li>
    <li><a href="#cat-metadata" class="metadata">Publishing & Metadata</a></li>
</ul>
<br>
<br>
<div class="tab-content">
    <div class="tab-pane fade active in" id="cat-basic" role="tabpanel">
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">Title *</label>
            <div class="col-md-10">
                {!! Form::text('title', null, ['class'=>'form-control', 'id'=>'post-title']) !!}
                {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="slug" class="col-md-2 control-label">Slug *</label>
            <div class="col-md-10">
                {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'post-slug']) !!}
                {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="parent_post" class="col-md-2 control-label">Category *</label>
            <div class="col-md-10">
                <select name="category" class="form-control">
                    <option value="">--Select One--</option>
                    @foreach(\App\Models\Category::whereNull('parent')->get() as $cat)
                        <option value="{{$cat->id}}" {{(old('category') == $cat->id || (isset($post) && ($cat->id == $post->category))) ? 'selected' : ''}}>{{$cat->name}}@if(!$cat->published)
                                [**Unpublished Category] @endif</option>
                        @if(count($cat->children_categories))
                            @include('admin.posts.__category_dropdown', ['cat'=>$cat->children_categories, 'level'=>1])
                        @endif
                    @endforeach
                </select>
                {!!$errors->first('category', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="description" class="col-md-2 control-label">Description</label>
            <div class="col-md-10">
                {!! Form::textarea('description', null, ['class'=>'form-control summernote']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="image" class="col-md-2 control-label">Image</label>
            <div class="col-md-10">
                {!! Form::hidden('image', null, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
                <a class="btn btn-default btn_upload_image {{isset($post) && $post->image ? 'hide' : ''}}"
                   file_type="image"
                   selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
                @if(isset($post) && $post->image)
                    <div class="uploaded_image"><img src="{{\App\Models\Upload::find($post->image)->path()}}"><i
                                title="Remove Image" class="fa fa-times"></i></div>
                @else
                    <div class="uploaded_image hide"><img src=""><i title="Remove Image" class="fa fa-times"></i></div>
                @endif
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="featured" class="col-md-2 control-label">Featured</label>
            <div class="col-md-2">
                {!! Form::checkbox('featured', null, null, ['class'=>'js-switch']) !!}
            </div>
            <label for="published" class="col-md-2 control-label">Published</label>
            <div class="col-md-2">
                {!! Form::checkbox('published', null, null, ['class'=>'js-switch']) !!}
            </div>
        </div>
    </div>
    <div class="tab-pane fade" role="tabpanel" id="cat-metadata">
        <div class="form-group">
            <label for="start_publishing" class="col-md-2 control-label">Start Publishing</label>
            <div class="col-md-4">
                {!! Form::text('start_publishing', isset($post) && $post->start_publishing ? $post->start_publishing->format('d/m/Y h:i a') : Carbon\Carbon::now()->format('d/m/Y h:i a'), ['class'=>'form-control datetimepicker']) !!}
            </div>
            <label for="finish_publishing" class="col-md-2 control-label">Finish Publishing</label>
            <div class="col-md-4">
                {!! Form::text('finish_publishing', isset($post) && $post->finish_publishing ? $post->finish_publishing->format('d/m/Y h:i a') : null, ['class'=>'form-control datetimepicker']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
            <div class="col-md-10">
                {!! Form::text('meta_title', null, ['class'=>'form-control', 'id'=>'post-meta-title']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
            <div class="col-md-10">
                {!! Form::textarea('meta_description', null, ['class'=>'form-control', 'rows'=>'2']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="keywords" class="col-md-2 control-label">Keywords</label>
            <div class="col-md-10">
                {!! Form::text('keywords', null, ['class'=>'form-control']) !!}
                <span class="help-block m-b-none">Separated by comma.</span>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="robots" class="col-md-2 control-label">Robots</label>
            <div class="col-md-10">
                {!! Form::text('robots', null, ['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <a class="btn btn-white" href="/admin/posts"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</div>

@push('scripts')

<script>
    $(document).ready(function () {
        $("#post-title").change(function () {
            var title = $(this).val();
            $.ajax({
                type: "get",
                url: '/admin/posts/slug/' + title,
                cache: false,
                success: function (result) {
                    $('#post-slug').val(result);
                    $('#post-meta-title').val(title);
                }
            });
        });

    });
</script>

@endpush