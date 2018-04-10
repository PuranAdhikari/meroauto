@extends('admin.layouts.app')

@section('content')

    @push('breadcrumb')
    <li class="active">
        <strong>Offer Requests</strong>
    </li>
    @endpush
    @include('admin.layouts.partials.breadcrumb', ['title'=>'Offer Requests List'])

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All offer requests</h5>
                        <div class="ibox-tools">
                            @if(count($requests))
                                <a id="delete-selected" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            @endif
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('admin.layouts.partials.messages.success')
                        <div class="project-list">

                            @if(count($requests))
                                {!! Form::open(['url'=>'admin/requests/offers-made/delete', 'id'=>'delete-form']) !!}
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="project-status"><input type="checkbox" id="select-all"></th>
                                        <th class="project-title">Variant</th>
                                        <th class="project-title">Name</th>
                                        <th class="project-title">Email</th>
                                        <th class="project-title">Phone</th>
                                        <th class="project-title">Offered Price</th>
                                        <th class="project-title">Financing Required</th>
                                        <th class="project-title">Message</th>
                                        <th class="project-title">Preferred Contact</th>
                                        <th class="project-title">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($requests as $key => $request)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="select[{{$request->id}}]"
                                                       class="individual-select">
                                            </td>
                                            <td class="project-title">
                                                {!! $request->variant->name !!}
                                            </td>
                                            <td class="project-title">
                                                {!! $request->name !!}
                                            </td>
                                            <td class="project-title">
                                                {!! $request->email !!}
                                            </td>
                                            <td class="project-title">
                                                {!! $request->phone !!}
                                            </td>
                                            <td>
                                                {!! $request->offered_price !!}
                                            </td>
                                            <td>
                                                {!! $request->financing_required !!}
                                            </td>
                                            <td>
                                                {!! $request->comments !!}
                                            </td>
                                            <td>
                                                {!! $request->preferred_contact !!}
                                            </td>
                                            <td>
                                                {!! $request->created_at !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="customPagination">
                                    {!! $requests->appends(Request::except('page'))->render() !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                <p>No offer requests to show.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#delete-selected').click(function (e) {
            e.preventDefault();
            var ck_box = $('input[type="checkbox"]:checked').length;
            if (ck_box > 1) {
                if (confirm('WARNING: You are about to trash the selected offer requests!'))
                    $('#delete-form').submit();
            }
            else {
                alert('Please first make a selection from the list.')
            }
        });
        $('#select-all').click(function () {
            var checkBoxes = $(".individual-select");
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
        });
    });
</script>
@endpush