<div id="news-search-form" {!! isset($searching) ? '' : 'hidden' !!}>
    {!! Form::open(['url'=>'/admin/news/search', 'method'=>'GET']) !!}
    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::text('heading', null, ['class'=>'form-control input-sm', 'placeholder'=>'Enter Heading']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::select('language', language(), null, ['class'=>'form-control input-sm', 'placeholder'=>'--Select Language--']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <select name="parent" class="form-control input-sm">
                    <option value="">--Select Category--</option>
                    @foreach(\App\Models\Category::whereNull('parent')->get() as $cat)
                        <option value="{{$cat->id}}" {{(request('parent') == $cat->id) ? 'selected' : ''}}>
                            {{$cat->name}}
                            @if(!$cat->published)
                                [**Unpublished Category]
                            @endif
                        </option>
                        @if(count($cat->children_categories))
                            @include('admin.categories.__category_dropdown', ['cat'=>$cat->children_categories, 'level'=>1])
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::select('status', selectStatuses(), null, ['class'=>'form-control input-sm', 'placeholder'=>'--Select Status--']) !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {!! Form::select('featured', selectFeatureStatuses(), null, ['class'=>'form-control input-sm', 'placeholder'=>'--Select Feature Status--']) !!}
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::select('items_per_page', itemsPerPage(), request('items_per_page') ? request('items_per_page') : 30, ['class'=>'form-control input-sm', 'placeholder'=>'--Items Per Page--']) !!}
                <span class="help-block m-b-none">No. of items per page.</span>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <button class="btn btn-info btn-sm btn-block"><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</button>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <a href="/admin/news" class="btn btn-warning btn-sm btn-block"><i class="fa fa-times-circle"></i>&nbsp;&nbsp;Reset
                    Filter</a>
            </div>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    {!! Form::close() !!}
</div>