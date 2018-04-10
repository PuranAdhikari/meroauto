@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<ul class="nav nav-tabs tabs" role="tablist">
    <li role="presentation" class="active"><a role="tab" href="#cat-basic">Basic</a></li>
    <li><a href="#cat-metadata" class="metadata">Publishing & Metadata</a></li>
</ul>
<br>
<br>
<div class="tab-content tab-content">
    <div class="tab-pane fade active in" id="cat-basic" role="tabpanel">
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">Name *</label>
            <div class="col-md-10">
                {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'category-name']) !!}
                {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="slug" class="col-md-2 control-label">Slug *</label>
            <div class="col-md-10">
                {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'category-slug']) !!}
                {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="parent_category" class="col-md-2 control-label">Parent Category</label>
            <div class="col-md-10">
                <select name="parent" class="form-control">
                    <option value="">--Select One--</option>
                    @foreach(\App\Models\Category::whereNull('parent')->get() as $cat)
                        @if(!(isset($category) && ($cat->id == $category->id)))
                            <option value="{{$cat->id}}" {{(old('parent') == $cat->id || (isset($category) && ($cat->id == $category->parent))) ? 'selected' : ''}}>{{$cat->name}}@if(!$cat->published) [**Unpublished Category] @endif</option>
                        @endif
                        @if(count($cat->children_categories))
                            @include('admin.categories.__category_dropdown', ['cat'=>$cat->children_categories, 'level'=>1])
                        @endif
                    @endforeach
                </select>

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
                <a class="btn btn-default btn_upload_image {{isset($category) && $category->image ? 'hide' : ''}}"
                   file_type="image"
                   selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
                @if(isset($category) && $category->image)
                    <div class="uploaded_image"><img src="{{\App\Models\Upload::find($category->image)->path()}}"><i
                                title="Remove Image" class="fa fa-times"></i></div>
                @else
                    <div class="uploaded_image hide"><img src=""><i title="Remove Image" class="fa fa-times"></i></div>
                @endif
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="published" class="col-md-2 control-label">Published</label>
            <div class="col-md-10">
                {!! Form::checkbox('published', null, null, ['class'=>'js-switch']) !!}
            </div>
        </div>
    </div>
    <div class="tab-pane fade" role="tabpanel" id="cat-metadata">
        <div class="form-group">
            <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
            <div class="col-md-10">
                {!! Form::text('meta_title', null, ['class'=>'form-control', 'id'=>'category-meta-title']) !!}
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
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit" name="save" value="save">Save</button>
        <button class="btn btn-info" type="submit" name="save_close" value="save">Save & Close</button>
        <a class="btn btn-white" href="/admin/categories"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>

@push('scripts')

<script>
    $(document).ready(function () {

        $("#category-name").change(function () {
            var name = $(this).val();
            $.ajax({
                type: "get",
                url: '/admin/categories/slug/' + name,
                cache: false,
                success: function (result) {
                    $('#category-slug').val(result);
                    $('#category-meta-title').val(name);
                }
            });
        });

    });
</script>

@endpush