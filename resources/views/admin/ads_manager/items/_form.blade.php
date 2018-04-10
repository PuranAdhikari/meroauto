@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<div class="form-group">
    <label for="name" class="col-md-2 control-label">Name *</label>
    <div class="col-md-10">
        {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'ad-item-name']) !!}
        {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="category" class="col-md-2 control-label">Ad Category *</label>
    <div class="col-md-4">
        {!! Form::select('category', selectAdCategories(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
        {!!$errors->first('category', '<span class="text-danger has-error">:message</span>')!!}
    </div>
    <label for="link" class="col-md-2 control-label">External Link</label>
    <div class="col-md-4">
        {!! Form::text('link', null, ['class'=>'form-control', 'id'=>'link']) !!}
        {!!$errors->first('link', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        {!! Form::hidden('image', null, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
        <a class="btn btn-default btn_upload_image {{isset($item) && $item->image ? 'hide' : ''}}"
           file_type="image"
           selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
        @if(isset($item) && $item->image)
            <div class="uploaded_image"><img src="{{\App\Models\Upload::find($item->image)->path()}}"><i
                        title="Remove Image" class="fa fa-times"></i></div>
        @else
            <div class="uploaded_image hide"><img src=""><i title="Remove Image" class="fa fa-times"></i></div>
        @endif
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
    <label for="published" class="col-md-2 control-label">Published</label>
    <div class="col-md-10">
        {!! Form::checkbox('published', null, null, ['class'=>'js-switch']) !!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit" name="save" value="save">Save</button>
        <button class="btn btn-info" type="submit" name="save_close" value="save">Save & Close</button>
        <a class="btn btn-white" href="/admin/ads-manager/categories"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>