<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand">Admin v2.0</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Post<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/posts')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/posts/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Category<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/categories')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/categories/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Question<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/questions')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/questions/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Video<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/videos')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/videos/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/products')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/products/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Delivery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/deliveries')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/deliveries/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Banners<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/banners')}}">List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/banners/create')}}">Add</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Tags<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/tags')}}">List</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a><i class="fa fa-files-o fa-fw"></i>Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{url('admin/settings')}}">List</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>



            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>