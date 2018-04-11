@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif

<ul class="nav nav-tabs tabs" role="tablist">
    <li role="presentation" class="active"><a role="tab" href="#model-basic">Basic</a></li>
    <li><a href="#model-colors-and-images" class="metadata">Model Colors & Images</a></li>
</ul>
<br>
<br>
<div class="tab-content">
    <div class="tab-pane fade active in" id="model-basic" role="tabpanel">
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
    </div>
    <div class="tab-pane fade" id="model-colors-and-images" role="tabpanel">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-color-and-images">
                <tr>
                    <th>Color Name</th>
                    <th>Color Code</th>
                    <th>Image</th>
                    <th>Remove</th>
                </tr>
                @if(isset($model) && count($model->colors) > 0)
                    @foreach($model->colors as $key => $color)
                        <?php $count = $key + 1; ?>
                        <tr id="color-{{$count}}">
                            <td>
                                {!! Form::text('color_name['.$count.']', $color->color_name, ['class'=>'form-control']) !!}
                            </td>
                            <td>
                                {!! Form::text('color_code['.$count.']', $color->color_code, ['class'=>'form-control color-picker']) !!}
                            </td>
                            <td>
                                {!! Form::hidden('color_image_'.$count, $color->image, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
                                <a class="btn btn-default btn_upload_image btn-in-td {{isset($color) && $color->image ? 'hide' : ''}}"
                                   file_type="image"
                                   selecter="color_image_{{$count}}">Upload <i class="fa fa-cloud-upload"></i></a>
                                @if(isset($color) && $color->image)
                                    <div class="uploaded_image"><img
                                                src="{{\App\Models\Upload::find($color->image)->path()}}"><i
                                                title="Remove Image" class="fa fa-times"></i></div>
                                @else
                                    <div class="uploaded_image hide"><img src=""><i title="Remove Image"
                                                                                    class="fa fa-times"></i></div>
                                @endif
                            </td>
                            <td>
                                <a onclick="$('#color-{{$count}}').remove()"><i class="fa fa-minus-circle"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <?php $count = 0; ?>
                @endif
                @for($i = 1; $i < 11 - $count; $i++)
                    <tr id="color-{{$count + $i}}">
                        <td>
                            {!! Form::text('color_name['.($count + $i).']', null, ['class'=>'form-control']) !!}
                        </td>
                        <td>
                            {!! Form::text('color_code['.($count + $i).']', null, ['class'=>'form-control color-picker']) !!}
                        </td>
                        <td>
                            {!! Form::hidden('color_image_'.($count + $i), null, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
                            <a class="btn btn-default btn_upload_image btn-in-td"
                               file_type="image"
                               selecter="color_image_{{$count + $i}}">Upload <i class="fa fa-cloud-upload"></i></a>
                            <div class="uploaded_image hide"><img src=""><i title="Remove Image"
                                                                            class="fa fa-times"></i></div>
                        </td>
                        <td>
                            <a onclick="$('#color-{{$count + $i}}').remove()"><i class="fa fa-minus-circle"></i></a>
                        </td>
                    </tr>
                @endfor
            </table>
        </div>
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