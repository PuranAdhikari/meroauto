@extends('admin.layouts.app')

@section('content')

    <div class="wrapper wrapper-content">
        <div class="row">


            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h4>Latest Contact Requests</h4>
                    </div>
                    <div class="ibox-content">
                        <ul class="list-group clear-list">
                            <?php $count = 1; $label = ['success', 'info', 'primary', 'default', 'danger', 'warning']; ?>
                            @foreach(\App\Models\ContactRequest::latest()->take(5)->get() as $request)
                                <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    {!! $request->created_at !!}
                                </span>
                                    <span class="label label-{!! $label[$count % 6] !!}">{!! $count !!}</span>&nbsp;&nbsp;{!! $request->name !!}
                                </li>
                                <?php $count++; ?>
                            @endforeach
                            <a href="/admin/requests/contacts" class="pull-right">See All</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h4>More Info Requests</h4>
                    </div>
                    <div class="ibox-content">
                        <ul class="list-group clear-list">
                            <?php $count = 1; $label = ['success', 'info', 'primary', 'default', 'danger', 'warning']; ?>
                            @foreach(\App\Models\MoreInformation::latest()->take(5)->get() as $request)
                                <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    {!! $request->created_at !!}
                                </span>
                                    <span class="label label-{!! $label[$count % 6] !!}">{!! $count !!}</span>&nbsp;&nbsp;{!! $request->name !!}
                                </li>
                                <?php $count++; ?>
                            @endforeach
                            <a href="/admin/requests/more-info" class="pull-right">See All</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h4>Test Drive Requests</h4>
                    </div>
                    <div class="ibox-content">
                        <ul class="list-group clear-list">
                            <?php $count = 1; $label = ['success', 'info', 'primary', 'default', 'danger', 'warning']; ?>
                            @foreach(\App\Models\TestDrive::latest()->take(5)->get() as $request)
                                <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    {!! $request->created_at !!}
                                </span>
                                    <span class="label label-{!! $label[$count % 6] !!}">{!! $count !!}</span>&nbsp;&nbsp;{!! $request->name !!}
                                </li>
                                <?php $count++; ?>
                            @endforeach
                            <a href="/admin/requests/test-drive" class="pull-right">See All</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h4>Offers Made</h4>
                    </div>
                    <div class="ibox-content">
                        <ul class="list-group clear-list">
                            <?php $count = 1; $label = ['success', 'info', 'primary', 'default', 'danger', 'warning']; ?>
                            @foreach(\App\Models\OfferMade::latest()->take(5)->get() as $request)
                                <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    {!! $request->created_at !!}
                                </span>
                                    <span class="label label-{!! $label[$count % 6] !!}">{!! $count !!}</span>&nbsp;&nbsp;{!! $request->name !!}
                                </li>
                                <?php $count++; ?>
                            @endforeach
                            <a href="/admin/requests/offers-made" class="pull-right">See All</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection