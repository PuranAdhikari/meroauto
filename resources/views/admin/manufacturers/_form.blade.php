@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<ul class="nav nav-tabs tabs" role="tablist">
    <li role="presentation" class="active"><a role="tab" href="#manufacturer-basic">Basic</a></li>
    <li><a href="#manufacturer-contact" class="metadata">Contact Details</a></li>
</ul>
<br>
<br>
<div class="tab-content">
    <div class="tab-pane fade active in" id="manufacturer-basic" role="tabpanel">
        <div class="form-group">
            <label for="name" class="col-md-2 control-label">Name *</label>
            <div class="col-md-10">
                {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'manufacturer-name']) !!}
                {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="slug" class="col-md-2 control-label">Slug *</label>
            <div class="col-md-10">
                {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'manufacturer-slug']) !!}
                {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
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
    </div>
    <div class="tab-pane fade" id="manufacturer-contact" role="tabpanel">
        <div class="form-group">
            <label for="address" class="col-md-2 control-label">Address</label>
            <div class="col-md-10">
                {!! Form::text('address', null, ['class'=>'form-control']) !!}
                {!!$errors->first('address', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="phone" class="col-md-2 control-label">Phone</label>
            <div class="col-md-10">
                {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                {!!$errors->first('phone', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="email" class="col-md-2 control-label">Email</label>
            <div class="col-md-10">
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                {!!$errors->first('email', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="website" class="col-md-2 control-label">Website</label>
            <div class="col-md-10">
                {!! Form::text('website', null, ['class'=>'form-control']) !!}
                {!!$errors->first('website', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="google_map_link" class="col-md-2 control-label">Google Map Link</label>
            <div class="col-md-10">
                {!! Form::textarea('google_map_link', null, ['class'=>'form-control', 'rows'=>2]) !!}
                {!!$errors->first('google_map_link', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="image" class="col-md-2 control-label">Image</label>
            <div class="col-md-10">
                {!! Form::hidden('image', null, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
                <a class="btn btn-default btn_upload_image {{isset($manufacturer) && $manufacturer->image ? 'hide' : ''}}"
                   file_type="image"
                   selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
                @if(isset($manufacturer) && $manufacturer->image)
                    <div class="uploaded_image"><img src="{{\App\Models\Upload::find($manufacturer->image)->path()}}"><i
                                title="Remove Image" class="fa fa-times"></i></div>
                @else
                    <div class="uploaded_image hide"><img src=""><i title="Remove Image" class="fa fa-times"></i></div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit" name="save" value="save">Save</button>
        <button class="btn btn-info" type="submit" name="save_close" value="save">Save & Close</button>
        <a class="btn btn-white" href="/admin/manufacturers"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>


@push('scripts')

<script>
    $(document).ready(function () {
        $("#manufacturer-name").change(function () {
            var name = $(this).val();
            $.ajax({
                type: "get",
                url: '/admin/manufacturers/slug/' + name,
                cache: false,
                success: function (result) {
                    $('#manufacturer-slug').val(result);
                }
            });
        });
    });
</script>

@endpush