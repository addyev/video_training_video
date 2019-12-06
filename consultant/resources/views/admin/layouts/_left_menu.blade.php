<ul id="menu" class="page-sidebar-menu">


    <li {!! (Request::is('admin/answer') || Request::is('admin/question') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="question" data-c="#418BCA" data-hc="#418BCA" data-size="18"
               data-loop="true"></i>
            <span class="title">Survey</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/question') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/question') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Questions
                </a>
            </li>
            <li {!! (Request::is('admin/answer') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/answer') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Answers
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/users') || Request::is('admin/bulk_import_users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>

        </ul>
    </li>

    <li {!! (( Request::is('admin/video') || Request::is('admin/video/create') ? 'class="active"' : '')) !!}>
        <a href="#">
            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18"
               data-loop="true"></i>
            <span class="title">Videos</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/video') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/video') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Video List
                </a>
            </li>
            <li {!! (Request::is('admin/video/create') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/video/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Video
                </a>
            </li>
        </ul>
    </li>

    <!-- Menus generated by CRUD generator -->
</ul>
