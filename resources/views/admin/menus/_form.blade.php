<div class="form-group">
    <label for="title" class="col-md-2 control-label">Title *</label>
    <div class="col-md-10">
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="menu_type" class="col-md-2 control-label">Menu Type *</label>
    <div class="col-md-10">
        {!! Form::text('menu_type', null, ['class'=>'form-control']) !!}
        {!!$errors->first('menu_type', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 2]) !!}
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
    <div class="col-sm-4 col-sm-offset-2">
        <a class="btn btn-white" href="/admin/menus"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</div>