<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="">
    <meta name="description"
        content="">
    <meta name="robots" content="noindex,nofollow">
    <title>Urban Links Properties</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('storage/images/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('storage/images/logo.png')}}" type="image/x-icon" />
    <!-- Custom CSS -->
    <link href="{{asset('storage/vendor/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('storage/vendor/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('storage/vendor/css/style.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header bg-dark" data-logobg="skin6">
                    <a class="navbar-brand" href="/">
                        <b class="logo-icon ">
                            <h5>Urban Link</h5>
                            <!-- <img src="{{asset('storage/images/logo2.png')}}" width='135' alt="homepage" /> -->
                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none text-light"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{asset('storage/profile/'.(Auth()->user()->path))}}" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">{{Auth()->user()->fname}}</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/book/index"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Tour Bookings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/profile"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard#units"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Units</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/users"
                                aria-expanded="false">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/logout"
                                aria-expanded="false">
                                <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            
            <div class="mt-2" style="min-height: 600px;">
                @yield('content')
            </div>
            <footer class="footer text-center"> {{date('Y')}} © Urban Links Properties</a>
            </footer>
        </div>
    </div>
    <script src="{{asset('storage/vendor/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('storage/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('storage/vendor/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('storage/vendor/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('storage/vendor/js/waves.js')}}"></script>
    <script src="{{asset('storage/vendor/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('storage/vendor/js/custom.js')}}"></script>
    <!-- <script src="{{asset('storage/vendor/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script> -->
    <!-- <script src="{{asset('storage/vendor/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script> -->
    <script src="{{asset('storage/vendor/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>