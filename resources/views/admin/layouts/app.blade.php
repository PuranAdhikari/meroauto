<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@section('header')
    @include('admin.layouts.partials.header')
@show

<body bsurl="{{url('')}}" adminRoute="admin">
<div id="wrapper">
    @section('sidenav')
        @include('admin.layouts.partials.sidenav')
    @show

    <div id="page-wrapper" class="gray-bg">
        @include('admin.layouts.partials.topbar')

        @yield('content')

        @include('admin.layouts.partials.footer')
    </div>
</div>


@include('admin.layouts.partials.file_manager')

@section('scripts')
    @include('admin.layouts.partials.scripts')
@show

</body>

</html>
