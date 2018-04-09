@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<div class="form-group">
    <label for="name" class="col-md-2 control-label">Name *</label>
    <div class="col-md-10">
        {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'car-model-name']) !!}
        {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="slug" class="col-md-2 control-label">Slug *</label>
    <div class="col-md-10">
        {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'car-model-slug']) !!}
        {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="manufacturer" class="col-md-2 control-label">Manufacturer *</label>
    <div class="col-md-10">
        {!! Form::select('manufacturer_id', selectManufacturers(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
        {!!$errors->first('manufacturer_id', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="model_year" class="col-md-2 control-label">Model Year</label>
    <div class="col-md-4">
        {!! Form::text('model_year', null, ['class'=>'form-control']) !!}
        {!!$errors->first('model_year', '<span class="text-danger has-error">:message</span>')!!}
    </div>
    <label for="body_type" class="col-md-2 control-label">Body Type</label>
    <div class="col-md-4">
        {!! Form::select('body_type', modelBodyType(), null, ['class'=>'form-control', 'placeholder'=>'--Select One--']) !!}
        {!!$errors->first('body_type', '<span class="text-danger has-error">:message</span>')!!}
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
        <a class="btn btn-white" href="/admin/car-models"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>


@push('scripts')

<script>
    $(document).ready(function () {
        $("#car-model-name").change(function () {
            var name = $(this).val();
            $.ajax({
                type: "get",
                url: '/admin/car-models/slug/' + name,
                cache: false,
                success: function (result) {
                    $('#car-model-slug').val(result);
                }
            });
        });
    });
</script>

@endpush