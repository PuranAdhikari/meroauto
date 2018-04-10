<div id="manufacturer-search-form" {!! isset($searching) ? '' : 'hidden' !!}>
    {!! Form::open(['url'=>'/admin/manufacturers/search', 'method'=>'GET']) !!}
    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::text('name', null, ['class'=>'form-control input-sm', 'placeholder'=>'Enter Name']) !!}
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                {!! Form::select('status', selectStatuses(), null, ['class'=>'form-control input-sm', 'placeholder'=>'--Select Status--']) !!}
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
                <a href="/admin/manufacturers" class="btn btn-warning btn-sm btn-block"><i class="fa fa-times-circle"></i>&nbsp;&nbsp;Reset
                    Filter</a>
            </div>
        </div>
    </div>
    <div class="hr-line-dashed"></div>
    {!! Form::close() !!}
</div>