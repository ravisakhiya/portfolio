<!DOCTYPE html>

<html lang="en">
<head>

    <!-- ==============================================
        Basic Page Needs
    =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>{{ $general->site_title }}</title>

    <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{ asset('theme/images/Favicon2.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('theme/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('theme/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('theme/images/apple-touch-icon-114x114.png') }}">

    <!-- ==============================================
    Vendor Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/animation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/cookie-notice.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/vendor/intlTelInput.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- ==============================================
        Custom Stylesheet
    =============================================== -->

    <link rel="stylesheet" href="{{ asset('theme/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/theme-orange.css') }}">

    <!-- ==============================================
        Theme Settings
    =============================================== -->

    <style>
        :root {
            --header-bg-color: #040402;
            --nav-item-color: #f5f5f5;
            --top-nav-item-color: #f5f5f5;
            --hero-bg-color: #040402;
            --section-1-bg-color: #111111;
            --section-2-bg-color: #191919;
            --section-3-bg-color: #040402;
            --section-4-bg-color: #111111;
            --section-5-bg-color: #191919;
            --section-6-bg-color: #040402;
            --section-7-bg-color: #111111;
            --footer-bg-color: #191919;
        }
    </style>

</head>
<body class="theme-mode-dark">

        <!-- Header -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        <!-- Leverage<i class="leverage-2-0">2.0</i> -->
                        <img class="logo" src="{{ asset('uploads/logo/'.$general->header_logo) }}" alt="Dhaval" style="height: 40%; width: 40%;">
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="#slider" class="nav-link smooth-anchor">Home</a>
                            <a href="#get" class="nav-link smooth-anchor">About</a>
                            <a href="#services" class="nav-link smooth-anchor">Services</a>
                            <a href="#portfolio-grid" class="nav-link smooth-anchor">Portfolio gallery</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">

                                <a href="#contact" class="smooth-anchor btn ml-lg-auto dark-button"><i class="icon-rocket"></i>CONTACT US</a>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>

         @yield('theme-content')

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>
        <!-- Footer -->
        <footer class="odd">
            <!-- Footer [links] -->
            <section id="footer" class="footer p-5">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="index.html" class="logo">
                                               <img class="logo" src="{{ asset('uploads/logo/'.$general->header_logo) }}" alt="Dhaval" style="height: 60%; width: 60%;">
                                        </a>
                                    </div>
                                    <p>Authentic and innovative.<br>Built to the smallest detail<br>with a focus on usability<br>and performance.</p>
                                    <ul class="navbar-nav social share-list mt-0 ml-auto">
                                        <li class="nav-item">
                                            <a href="{{ $general->instagram }}" target="_blank" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ $general->facebook }}" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ $general->twitter }}" target="_blank" class="nav-link"><i class="icon-social-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 p-0">
                            <div class="row">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Get in Touch</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-phone mr-2"></i>
                                                {{ $general->mobile }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-envelope mr-2"></i>
                                                {{ $general->email }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-location-pin mr-2"></i>
                                                {{ $general->address }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" class="mt-4 mr-auto ml-auto ml-lg-0 btn dark-button smooth-anchor"><i class="icon-speech"></i>SEND A MESSAGE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Our Services</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">User Research</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">User Interface</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">User Experience</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Popular Tags</h4>
                                    <a href="#" class="badge tag">{{ $general->tags }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- #region Global ============================ -->
<!-- Modal [search] -->
<div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Search <i class="icon-close"></i>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>What are you looking for?</h2>
                                <p>Search for services and news about the best that happens in the world.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="text" class="form-control" placeholder="Enter Keywords">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button"><i class="icon-magnifier"></i>SEARCH</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal [responsive menu] -->
<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                Menu <i class="icon-close"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                    <div class="contacts p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- ==============================================
            Google reCAPTCHA // Put your site key here
        =============================================== -->

        {{-- <script src="../www.google.com/recaptcha/api9516.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script> --}}

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="{{ asset('theme/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/jquery.validate.min.js') }}"></script>

        <script src="{{ asset('theme/js/vendor/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/jquery.inview.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/ponyfill.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/slider.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/animation.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/progress-radial.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/bricklayer.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/gallery.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/shuffle.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/cookie-notice.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/particles.min.js') }}"></script>
        <script src="{{ asset('theme/js/vendor/intlTelInput.js') }}"></script>
        <script src="{{ asset('theme/js/main.js') }}"></script>
    </body>
</html>