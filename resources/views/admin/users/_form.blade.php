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
    <label for="email" class="col-md-2 control-label">Email *</label>
    <div class="col-md-10">
        {!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
        {!!$errors->first('email', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="password" class="col-md-2 control-label">Password *</label>
    <div class="col-md-10">
        {!! Form::password('password', ['class'=>'form-control', 'id'=>'email']) !!}
        {!!$errors->first('password', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="password_confirmation" class="col-md-2 control-label">Confirm Password *</label>
    <div class="col-md-10">
        {!! Form::password('password_confirmation', ['class'=>'form-control', 'id'=>'email']) !!}
        {!!$errors->first('password_confirmation', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit">Save</button>
        <a class="btn btn-white" href="/admin/users"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>