<div class="form-group">
    <label for="title" class="col-md-2 control-label">Title *</label>
    <div class="col-md-10">
        {!! Form::text('title', null, ['class'=>'form-control', 'id'=>'menu-item-title']) !!}
        {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="slug" class="col-md-2 control-label">Slug *</label>
    <div class="col-md-10">
        {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'menu-item-slug']) !!}
        {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="parent_menu_item" class="col-md-2 control-label">Parent Menu Item</label>
    <div class="col-md-10">
        <select name="parent" class="form-control">
            <option value="">--Select One--</option>
            @foreach(\App\Models\MenuItem::whereNull('parent')->get() as $item)
                @if(!(isset($menu_item) && ($item->id == $menu_item->id)))
                    <option value="{{$item->id}}" {{(old('parent') == $item->id || (isset($menu_item) && ($item->id == $menu_item->parent))) ? 'selected' : ''}}>{{$item->name}}@if(!$item->published)
                            [**Unpublished Menu Item] @endif</option>
                @endif
                @if(count($item->children_items))
                    @include('admin.menu_items.__item_dropdown', ['item'=>$item->children_items, 'level'=>1])
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="menu" class="col-md-2 control-label">Menu *</label>
    <div class="col-md-10">
        {!! Form::select('menu', [], null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="menu_item_type" class="col-md-2 control-label">Menu Item Type *</label>
    <div class="col-md-10">
        {!! Form::select('menu_item_type', [], null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="post" class="col-md-2 control-label">Post</label>
    <div class="col-md-10">
        {!! Form::select('post', [], null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="page" class="col-md-2 control-label">Page</label>
    <div class="col-md-10">
        {!! Form::select('page', [], null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="hr-line-dashed"></div>
<div class="form-group">
    <label for="category" class="col-md-2 control-label">Category</label>
    <div class="col-md-10">
        {!! Form::select('category', [], null, ['class'=>'form-control']) !!}
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
        <a class="btn btn-white" href="/admin/menu-items"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
        <button class="btn btn-primary" type="submit">Save</button>
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