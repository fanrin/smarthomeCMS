<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
    
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-right">
                                    <a href="" class="text-muted">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="{{asset('assets/images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="{{asset('assets/images/users/user-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            {{ Session::get('name') }} <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a onclick="logout()" href="#" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>
                        <script>
                            function logout() {
                                Swal.fire({
                                title: 'Bạn có muốn đăng xuất không?',
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Có',
                                cancelButtonText:'Không'
                                }).then((result) => {
                                if (result.value) {
                                    open("{{ route('dang-xuat') }}","_self") 
                                }
                        })
                            };
                        </script>
                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route('dashboards') }}" class="logo text-center">
                    <span class="logo-lg">
                     <img src="{{asset('assets/images/logo-dark.png') }}" alt="" height="26">
                        <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                       <!--  <a href="{{ route('tinh-nang.danh-sach')}}"> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="{{asset('assets/images/logo-sm.png') }}" alt="" height="28">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
    
                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        Reports
                        <i class="mdi mdi-chevron-down"></i> 
                    </a>
                    <div class="dropdown-menu">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Finance Report
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Monthly Report
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Revenue Report
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Settings
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Help & Support
                        </a>

                    </div>
                </li>

                <li class="dropdown dropdown-mega d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        Mega Menu
                        <i class="mdi mdi-chevron-down"></i> 
                    </a>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-8">
                    
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-dark mt-0">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list mt-2">
                                            <li>
                                                <a href="javascript:void(0);">Widgets</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Nestable List</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Range Sliders</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Masonry Items</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sweet Alerts</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Treeview Page</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tour Page</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="text-dark mt-0">Applications</h5>
                                        <ul class="list-unstyled megamenu-list mt-2">
                                            <li>
                                                <a href="javascript:void(0);">Email Pages</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Profile</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Team Contacts</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Coming Soon Page</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="text-dark mt-0">Layouts</h5>
                                        <ul class="list-unstyled megamenu-list mt-2">
                                            <li>
                                                <a href="javascript:void(0);">Small Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Dark Topbar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Preloader</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sidebar Collapsed</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center mt-3">
                                    <h3 class="text-dark">Launching Discount Sale!</h3>
                                    <p class="font-16">Save up to 55% off.</p>
                                    <button class="btn btn-primary mt-1">Download Now <i class="mdi mdi-arrow-right-bold-outline ml-1"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{ route('tinh-nang.danh-sach')}}">
                            <i class="la la-cube"></i>Tính năng <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('tinh-nang.them-moi')}}">Thêm tính năng</a>
                            </li>
                            <li>
                                <a href="{{ route('tinh-nang.thung-rac')}}">Thùng rác</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('nguoi-dung.danh-sach') }}"><i class="fas fa-user"></i>Người dùng</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('nguoi-dung.them-moi') }}">Thêm người dùng</a>
                            </li>
                            <li>
                                <a href="{{ route('nguoi-dung.thung-rac') }}">Thùng rác</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ route('nguoi-dung.thong-ke') }}">
                            <i class="fas fa-chart-bar"></i>Thống kê <div class="arrow-down"></div>
                        </a>
                        <ul class="submenu">
                        <li>
                            <a href="{{ route('nguoi-dung.thong-ke') }}">Thống kê số người chơi đăng kí</a>
                        </li>
                        <li>
                            <a href="{{ route('nguoi-dung.thong-ke-diem') }}">Top 10 người chơi điểm cao</a>
                        </li>
                        <li>
                            <a href="{{ route('thong-ke.thong-ke-doanh-thu') }}">Thống kê doanh thu</a>
                        </li>
                        <li>
                             <a href="{{ route('thong-ke.thong-ke-nguoi-mua-credit') }}">Top 10 người mua Credit cao nhất</a>
                        </li>
                    </ul>
                    </li>

                    <li class="has-submenu">
                        
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>
<!-- End Navigation Bar