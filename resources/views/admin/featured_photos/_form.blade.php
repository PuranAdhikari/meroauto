@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<div class="form-group">
    <label for="name" class="col-md-2 control-label">Caption</label>
    <div class="col-md-10">
        {!! Form::text('caption', null, ['class'=>'form-control', 'id'=>'caption']) !!}
        {!!$errors->first('caption', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        {!! Form::hidden('image', null, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
        <a class="btn btn-default btn_upload_image {{isset($featuredPhoto) && $featuredPhoto->image ? 'hide' : ''}}"
           file_type="image"
           selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
        @if(isset($featuredPhoto) && $featuredPhoto->image)
            <div class="uploaded_image"><img src="{{\App\Models\Upload::find($featuredPhoto->image)->path()}}"><i
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
<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit">Save</button>
        <a class="btn btn-white" href="/admin/featured-photos"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>