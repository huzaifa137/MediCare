<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{Helper::app_name()}} Template">
    <meta name="keywords" content="{{Helper::app_name()}}, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{Helper::app_name()}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/assets-site/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/assets-site/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="{{ url('index') }}"><img src="/assets-site/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="javascript:void();" class="primary-btn">Appointment</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i>{{Helper::app_info('phone')}}</li>
            <li><i class="fa fa-map-marker"></i>{{Helper::app_info('location')}}</li>
            <li><i class="fa fa-clock-o"></i> Mon - Sun: 9:00am to 12:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="javascript:void();"><i class="fa fa-facebook"></i></a>
            <a href="javascript:void();"><i class="fa fa-twitter"></i></a>
            <a href="javascript:void();"><i class="fa fa-instagram"></i></a>
            <a href="javascript:void();"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i>{{Helper::app_info('phone')}}</li>
                            <li><i class="fa fa-map-marker"></i>{{Helper::app_info('location')}}</li>
                            <li><i class="fa fa-clock-o"></i>Mon - Sun: 9:00am to 12:00pm</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:void();"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:void();"><i class="fa fa-instagram"></i></a>
                            <a href="javascript:void();"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('index') }}"><img src="/assets-site/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="{{ url('index') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
                                <li><a href="javascript:void();">Resources</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('pricing') }}">Pricing</a></li>
                                        <li><a href="{{ url('doctor') }}">Doctors</a></li>
                                        <li><a href="{{ url('blog-details') }}">Our Blogs</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('blog') }}">News</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__btn">
                            <a href="{{ url('/') }}" class="primary-btn">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->