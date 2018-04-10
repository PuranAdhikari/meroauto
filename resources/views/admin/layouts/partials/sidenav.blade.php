<?php $urls = explode('/', Request::url()); ?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle img-responsive" src="/assets/admin/img/Meroauto.png"/>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">{!! @Auth::user()->name !!}</strong>
                             </span> <span class="text-muted text-xs block">Administrator <b
                                            class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    MA
                </div>
            </li>
            <li class="{{@$urls[4] == '' ? 'active' : ''}}">
                <a href="/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li class="{{@$urls[4] == 'categories' ? 'active' : ''}}">
                <a href="/admin/categories"><i class="fa fa-list"></i> <span class="nav-label">Categories</span></a>
            </li>
            <li class="{{@$urls[4] == 'news' ? 'active' : ''}}">
                <a href="/admin/news"><i class="fa fa-newspaper-o"></i> <span class="nav-label">News</span></a>
            </li>
            <li class="{{@$urls[4] == 'manufacturers' ? 'active' : ''}}">
                <a href="/admin/manufacturers"><i class="fa fa-building"></i> <span
                            class="nav-label">Manufacturers</span></a>
            </li>
            <li class="{{@$urls[4] == 'car-models' ? 'active' : ''}}">
                <a href="/admin/car-models"><i class="fa fa-car"></i> <span class="nav-label">Car Models</span></a>
            </li>
            <li class="{{@$urls[4] == 'car-variants' ? 'active' : ''}}">
                <a href="/admin/car-variants"><i class="fa fa-th-list"></i> <span class="nav-label">Car Variants</span></a>
            </li>
            <li class="{{@$urls[4] == 'requests' ? 'active' : ''}}">
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Requests </span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{@$urls[5] == 'more-info' ? 'active' : ''}}">
                        <a href="/admin/requests/more-info">More Information</a>
                    </li>
                    <li class="{{@$urls[5] == 'test-drive' ? 'active' : ''}}">
                        <a href="/admin/requests/test-drive">Test Drive</a>
                    </li>
                    <li class="{{@$urls[5] == 'offers-made' ? 'active' : ''}}">
                        <a href="/admin/requests/offers-made">Offers Made</a>
                    </li>
                    <li class="{{@$urls[5] == 'contacts' ? 'active' : ''}}">
                        <a href="/admin/requests/contacts">Contact Requests</a>
                    </li>
                </ul>
            </li>
            <li class="{{@$urls[4] == 'ads-manager' ? 'active' : ''}}">
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Ads Manager </span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{@$urls[5] == 'categories' ? 'active' : ''}}">
                        <a href="/admin/ads-manager/categories">Ad Categories</a>
                    </li>
                    <li class="{{@$urls[5] == 'items' ? 'active' : ''}}">
                        <a href="/admin/ads-manager/items">Ad Items</a>
                    </li>
                </ul>
            </li>
            <li class="{{@$urls[4] == 'uploads' ? 'active' : ''}}">
                <a href="/admin/uploads"><i class="fa fa-cloud-upload"></i> <span class="nav-label">Uploads</span></a>
            </li>
            <li class="{{@$urls[4] == 'users' ? 'active' : ''}}">
                <a href="/admin/users"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
            </li>
            @stack('sidenav')

        </ul>

    </div>
</nav>