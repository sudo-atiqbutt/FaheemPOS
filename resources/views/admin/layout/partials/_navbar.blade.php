<body data-sidebar-skin="dark" data-header-skin="light" data-navbar-brand-skin="dark" data-sidebar-state="expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <div class="container-fluid px-0 align-items-stretch">
                <!-- Logo Area -->
                <div class="navbar-header">
                    <a href="index-2.html" class="navbar-brand">
                        <img class="logo-expand" alt="" src="{{asset('admin/img/logo-white.png')}}">
                        <img class="logo-collapse" alt="" src="{{asset('admin//img/logo-collapse.png')}}">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <!-- Left Menu & Sidebar Toggle -->
                <ul class="nav navbar-nav">
                    <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><span><i class="list-icon lnr lnr-menu"></i></span></a>
                    </li>
                </ul>
                <!-- /.navbar-left -->
                <!-- Search Form -->
                <form class="navbar-search d-none d-sm-block" role="search"><i class="list-icon lnr lnr-magnifier"></i> 
                    <input type="search" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="lnr lnr-cross"></i></a>
                </form>
                <!-- /.navbar-search -->
                <div class="spacer"></div>
                <!-- Right Menu -->
                <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="list-icon lnr lnr-alarm"></i> <span class="button-pulse bg-danger"></span> </span>Messages</a>
                        <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                            <div class="card">
                                <header class="card-header d-flex justify-content-center align-items-center mb-0"><i class="lnr lnr-envelope fs-15 mr-2"></i>  <span class="heading-font-family fw-400">New Messages</span>
                                </header>
                                <ul class="card-body list-unstyled dropdown-list-group">
                                    <li><a href="#" class="media"><span class="d-flex thumb-xs2 user--online"><img src="{{asset('admin//demo/users/2.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="heading-font-family media-heading">Steve Smith</span> <span class="media-content">commented on your photo</span></span></a>
                                    </li>
                                    <li><a href="#" class="media"><span class="d-flex thumb-xs2"><img src="{{asset('admin//demo/users/1.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="heading-font-family media-heading">Emily Lee</span> <span class="media-content">posted a photo on your wall</span></span></a>
                                    </li>
                                    <li><a href="#" class="media"><span class="d-flex thumb-xs2"><img src="{{asset('admin//demo/users/3.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="heading-font-family media-heading">Christopher Palmer</span> <span class="media-content">just mentioned you in his new post</span></span></a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-list-group -->
                                <footer class="card-footer text-center"><a href="javascript:void(0);" class="btn btn-link text-danger fs-12">See all messages</a>
                                </footer>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <li><a href="javascript:void(0);" class="right-sidebar-toggle"><span><i class="list-icon lnr lnr-users"></i> </span>Chat</a>
                    </li>
                </ul>
                <!-- /.navbar-right -->
                <!-- User Image with Dropdown -->
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user ripple" data-toggle="dropdown"><span class="avatar thumb-xs"><img src="{{asset('admin//demo/users/6.jpg')}}" class="rounded-circle" alt=""> <i class="list-icon lnr lnr-chevron-down"></i></span></a>
                        <div
                        class="dropdown-menu dropdown-left dropdown-card dropdown-card-profile animated flipInY">
                            <div class="card">
                                <header class="card-header d-flex mb-0"><a href="javascript:void(0);" class="col-md-4 text-center"><i class="align-middle lnr lnr-user"></i> </a><a href="javascript:void(0);" class="col-md-4 text-center"><i class="align-middle lnr lnr-cog"></i> </a><a href="javascript:void(0);"
                                    class="col-md-4 text-center"><i class="align-middle lnr lnr-exit"></i></a>
                                </header>
                                <ul class="list-unstyled card-body">
                                    <li><a href="#"><span><span class="align-middle">Manage Accounts</span></span></a>
                                    </li>
                                    <li><a href="#"><span><span class="align-middle">Change Password</span></span></a>
                                    </li>
                                    <li><a href="#"><span><span class="align-middle">Check Inbox</span></span></a>
                                    </li>
                                    <li><a href="#"><span><span class="align-middle">Sign Out</span></span></a>
                                    </li>
                                </ul>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
            </div>
            <!-- /.dropdown-card-profile -->
            </li>
            <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-nav -->
    </div>
    <!-- /.container -->
    </nav>