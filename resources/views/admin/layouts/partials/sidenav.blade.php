<?php $urls = explode('/', Request::url()); ?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/assets/admin/img/profile_small.jpg"/>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b
                                            class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{@$urls[4] == '' ? 'active' : ''}}">
                <a href="/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li class="{{@$urls[4] == 'categories' ? 'active' : ''}}">
                <a href="/admin/categories"><i class="fa fa-tags"></i> <span class="nav-label">Categories</span></a>
            </li>
            <li class="{{@$urls[4] == 'posts' ? 'active' : ''}}">
                <a href="/admin/posts"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Posts</span></a>
            </li>

            <li class="{{(@$urls[4] == 'menus' || @$urls[4] == 'menu-items') ? 'active' : ''}}">
                <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Menus</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{@$urls[4] == 'menus' ? 'active' : ''}}">
                        <a href="/admin/menus"><i class="fa fa-list-ol"></i> <span class="nav-label">Menus</span></a>
                    </li>
                    <li class="{{@$urls[4] == 'menu-items' ? 'active' : ''}}">
                        <a href="/admin/menu-items"><i class="fa fa-list-ul"></i> <span class="nav-label">Menu Items</span></a>
                    </li>
                </ul>
            </li>
            <li class="{{@$urls[4] == 'uploads' ? 'active' : ''}}">
                <a href="/admin/uploads"><i class="fa fa-cloud-upload"></i> <span class="nav-label">Uploads</span></a>
            </li>
            @stack('sidenav')

        </ul>

    </div>
</nav>