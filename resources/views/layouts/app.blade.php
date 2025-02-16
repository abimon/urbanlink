<!DOCTYPE html>
<html lang="en">

<head>
    <title>UrbanLink Properties</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We sell land of different acrages. We also deal with other properties">
    <meta name="keywords" content="realestate, homes, land, buy land, urban, country, urbanlink, properties,country-side,">
    <meta name="author" content="apekinc">
    <link rel="icon" href="{{asset('storage/images/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('storage/images/logo.png')}}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('storage/style.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script type="text/javascript" src="{{asset('storage/js/camera.js')}}"></script>
    <script type="text/javascript" src="{{asset('storage/js/jquery.caroufredsel.js')}}"></script>
    <!-- <script>
        $(document).ready(function() {
            //




        }); //
        $(window).load(function() {
            $('#camera_wrap').camera({
                //thumbnails: true
                //alignment			: 'centerRight', 
                autoAdvance: true,
                mobileAutoAdvance: true,
                //fx					: 'simpleFade',
                height: '48%',
                hover: false,
                loader: 'none',
                navigation: false,
                navigationHover: false,
                mobileNavHover: false,
                playPause: false,
                pauseOnClick: false,
                pagination: true,
                time: 7000,
                transPeriod: 1000,
                minHeight: '300px'
            });

            //	carouFredSel
            $('#slider3 .carousel.main ul').carouFredSel({
                auto: {
                    timeoutDuration: 8000
                },
                responsive: true,
                prev: '.prev3',
                next: '.next3',
                width: '100%',
                scroll: {
                    items: 1,
                    duration: 1000,
                    easing: "easeOutExpo"
                },
                items: {
                    width: '330',
                    height: 'variable', //	optionally resize item-height			  
                    visible: {
                        min: 1,
                        max: 4
                    }
                },
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });




            $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);

            function updateSizes_vat() {
                $('#slider3 .carousel.main ul').trigger("updateSizes");
            }
            updateSizes_vat();
        }); //
    </script> -->

</head>

<body style="background-color: white;">
<!-- #4e8a3e -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('storage/images/logo2.png')}}" height="80">
                </a>
 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item {{request()->path()=='/'?'active':''}}">
                            <a class="nav-link text-light" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item {{request()->path()=='property'?'active':''}}">
                            <a class="nav-link text-light" aria-current="page" href="/property">Properties</a>
                        </li>
                        <li class="nav-item dropdown {{request()->path()=='about'?'active':''}}">
                            <a class="nav-link dropdown-toggle text-light" href="/about" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/about#who">Who we are</a></li>
                                <li><a class="dropdown-item" href="/about#services">Our Services</a></li>
                                <li><a class="dropdown-item" href="/about#team">Our Team</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/about#testimonials">Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{(request()->path()=='dashboard')||(request()->path()=='login')||(request()->path()=='register')?'active':''}}"><a class="nav-link text-light" aria-current="page" href="/{{Auth()->user()?'dashboard':'login'}}">Account</a></li>
                    </ul>
                    <form class="d-flex" method="get" action="/search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div style="width:100% !important;">
            <div style="min-height: 100vh; " class="p-5">
                @yield('content')
            </div>

            <div style="color: white; background-color:black;width: 100% !important;">
                <div class="container">
                    
                        <div class="row">
                            <div class="col-md-4">

                                <div class="logo2_wrapper"><a href="/" class="logo2"><img src="{{asset('storage/images/logo2.png')}}" alt="" style="width: 100%;"></a></div>

                            </div>
                            <div class="col-md-8">
                                <div class="bot1_title" style="color:white;">Useful information</div>
                                <p>
                                    <b>
                                        Our part as an agency
                                    </b>
                                </p>

                            </div>
                            <div class="col-md-6 offset1">
                                <div class="social_wrapper">
                                    <ul class="social clearfix">
                                        <li class="text-white">Follow Us</li>
                                        <li><a href="#"><img src="{{asset('storage/images/social_ic1.png')}}"></a></li>
                                        <li><a href="#"><img src="{{asset('storage/images/social_ic3.png')}}"></a></li>
                                        <li><a href="#"><img src="{{asset('storage/images/social_ic5.png')}}"></a></li>
                                        <li><a href="#"><img src="{{asset('storage/images/social_ic6.png')}}"></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6"><footer>
                                    <div class="copyright text-center" style="color:white;">Copyright © {{date('Y')}}. <span class="bot1_title" style="color:white;">Urban Links Properties</span> All rights reserved.</div>
                                </footer></div>
                        </div>
                </div>
            </div>

        </div>
    <!-- <script type="text/javascript" src="{{asset('storage/js/bootstrap.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>