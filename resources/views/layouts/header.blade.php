<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEAKSLINKS</title>
    <meta name="description" content="Porta - Free Bootstrap4 Minimal Portfolio Template by CurlyArts">
    <meta name="keywords" content="portfolio, minimal portfolio, free html template, business, responsive, corporate, clean, bootstrap4, free bootstrap4 template">
    <meta name="author" content="CurlyArts">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">

    <!-- Google font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Google font (font-family: 'Roboto Condensed', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- Modernizer js -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <header class="header header-style transparent-header sticky-header">
            <div class="container d-none d-lg-block">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-inner">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                                </a>
                            </div>
                            <nav class="menu">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="/generate">Generate</a>
                                    </li>
                                    <li>
                                        <a href="/faw">F.A.Q</a>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                    {{-- <li>
                                        <a href="/Language">Language</a>
                                    </li> --}}
                                    {{-- <li class="cr-dropdown">
                                        <a href="javascript:;">Pages</a>
                                        <ul>
                                            <li class="cr-sub-dropdown">
                                                <a href="javascript:;">Home</a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="cr-sub-dropdown">
                                                <a href="javascript:;">Single</a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="cr-sub-dropdown">
                                                <a href="javascript:;">Contact</a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Single</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#">Team</a>
                                            </li>
                                            <li>
                                                <a href="#">Videos</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cr-megamenu">
                                        <a href="javascript:;">Features</a>
                                        <div class="cr-megamenu-wrap">

                                            <!-- Megamenu Single Block -->
                                            <div class="cr-megamenu-single">
                                                <h6>Widget Header</h6>
                                                <ul>
                                                    <li>
                                                        <a href="#">Awesome Features</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Clean Interface</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Responsive Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pixel Perfect Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">W3C Validate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--// Megamenu Single Block -->

                                            <!-- Megamenu Single Block -->
                                            <div class="cr-megamenu-single">
                                                <h6>Widget Header</h6>
                                                <ul>
                                                    <li>
                                                        <a href="#">Awesome Features</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Clean Interface</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Responsive Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pixel Perfect Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">W3C Validate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--// Megamenu Single Block -->

                                            <!-- Megamenu Single Block -->
                                            <div class="cr-megamenu-single">
                                                <h6>Widget Header</h6>
                                                <ul>
                                                    <li>
                                                        <a href="#">Awesome Features</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Clean Interface</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Responsive Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pixel Perfect Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">W3C Validate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--// Megamenu Single Block -->

                                            <!-- Megamenu Single Block -->
                                            <div class="cr-megamenu-single">
                                                <h6>Widget Header</h6>
                                                <ul>
                                                    <li>
                                                        <a href="#">Awesome Features</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Clean Interface</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Responsive Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pixel Perfect Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">W3C Validate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--// Megamenu Single Block -->
                                            
                                        </div>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="contact.html">Contact</a>
                                    </li> --}}
                                </ul>
                            </nav>
                            {{-- <a href="javascript:;" class="cr-btn cr-btn-sm">
                                <span>Language</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu-wrapper">
                <div class="container d-block d-lg-none">
                    <div class="mobile-menu clearfix">
                        <a class="mobile-logo" href="index.html">
                            <img src="{{ asset('images/logo.png') }}" alt="mobile logo">
                        </a>
                        <a href="javascript:;" class="cr-btn cr-btn-sm">
                            <span>Buy now</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Mobile Menu -->

        </header>
        <!-- //Header -->