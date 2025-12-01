<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="APEK TECHNOLOGIES" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/storage/client/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="/storage/client/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="/storage/client/css/tiny-slider.css" />
    <link rel="stylesheet" href="/storage/client/css/aos.css" />
    <link rel="stylesheet" href="/storage/client/css/style.css" />

    <title>UrbanLink Properties | {{ $title??'Authentication' }}</title>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="site-navigation">
                    <a href="/" class="logo m-0 float-start">
                        <img src="/storage/client/images/name-logo-white.png" alt="" style="height: 10vh;">
                    </a>

                    <ul
                        class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="{{ request()->path()=='/' ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li class="has-children">
                            <a href="/properties">Properties</a>
                            <ul class="dropdown">
                                <li><a href="#">Buy Property</a></li>
                                <li><a href="#">Sell Property</a></li>
                                <!-- <li class="has-children">
                                    <a href="#">Dropdown</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li class="{{ request()->path()=='services' ? 'active' : '' }}"><a href="/services">Services</a></li>
                        <li class="{{ request()->path()=='about' ? 'active' : '' }}"><a href="/about">About</a></li>
                        <li class="{{ request()->path()=='contact' ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
                        <li><a href="{{auth()->check() ? url('/dashboard') : route('login')}}">{{auth()->check() ? 'Dashboard' : 'Login'}}</a></li>
                    </ul>

                    <a
                        href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse"
                        data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div style="min-height: 70vh; background-image:url('/storage/client/images/land4.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        @yield('content')
    </div>

    <!-- Contact -->
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>Kamakis, Ruiru</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://11234567890">+254 724 567 890</a></li>
                            <li><a href="tel://11234567890">+254 735 347 890</a></li>
                            <li>
                                <a href="mailto:info@urbanlink.co.ke">info@urbanlink.co.ke</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Sources</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="/privacy">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Links</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>

                        <ul class="list-unstyled social">
                            <li>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-pinterest"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        Copyright &copy; 2023 - {{ date('Y') }}. All Rights Reserved. &mdash; Designed By
                        <a href="https://apektechinc.com">APEK TECHNOLOGIES</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="/storage/client/js/bootstrap.bundle.min.js"></script>
    <script src="/storage/client/js/tiny-slider.js"></script>
    <script src="/storage/client/js/aos.js"></script>
    <script src="/storage/client/js/navbar.js"></script>
    <script src="/storage/client/js/counter.js"></script>
    <script src="/storage/client/js/custom.js"></script>
</body>

</html>