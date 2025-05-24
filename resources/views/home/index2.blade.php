@extends('layout.layout')

@php
     $header = 'false';
     $breadcrumb = 'false';
     $footer='false';
@endphp

@section('content')

        <!-- Header Area Start -->
        <header id="header-sticky" class="header-2">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="sticky-logo">
                            <a href="{{ route('index') }}">
                               <img src="{{ asset('assets/img/logo/black-logo.svg') }}" alt="logo-img">
                           </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="{{ route('index') }}">
                                                Home 
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu has-homemenu">
                                                    <li class="border-none">
                                                        <div class="row g-4">
                                                            <div class="col-xl-2 homemenu">
                                                                <div class="homemenu-thumb">
                                                                   <img src="{{ asset('assets/img/header/home-1.jpg') }}" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="{{ route('index') }}" class="theme-btn">Multi Page</a>
                                                                        <a href="{{ route('indexOnePage') }}" class="theme-btn">One Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 01
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2  homemenu">
                                                                <div class="homemenu-thumb">
                                                                   <img src="{{ asset('assets/img/header/home-2.jpg') }}" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="{{ route('index2') }}" class="theme-btn">Multi Page</a>
                                                                        <a href="{{ route('indexTwoPage') }}" class="theme-btn">One Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 02
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 homemenu">
                                                                <div class="homemenu-thumb">
                                                                   <img src="{{ asset('assets/img/header/home-3.jpg') }}" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="{{ route('index3') }}" class="theme-btn">Multi Page</a>
                                                                        <a href="{{ route('indexThreePage') }}" class="theme-btn">One Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 03
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 homemenu">
                                                                <div class="homemenu-thumb">
                                                                   <img src="{{ asset('assets/img/header/home-4.jpg') }}" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="{{ route('index4') }}" class="theme-btn">Multi Page</a>
                                                                        <a href="{{ route('indexFourPage') }}" class="theme-btn">One Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 04
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 homemenu">
                                                                <div class="homemenu-thumb">
                                                                   <img src="{{ asset('assets/img/header/home-5.jpg') }}" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="{{ route('index5') }}" class="theme-btn">Multi Page</a>
                                                                        <a href="{{ route('indexFivePage') }}" class="theme-btn">One Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 05
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 homemenu">
                                                                <div class="homemenu-thumb">
                                                                   <img src="{{ asset('assets/img/header/home-6.jpg') }}" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="{{ route('index6') }}" class="theme-btn">Multi Page</a>
                                                                        <a href="{{ route('indexSixPage') }}" class="theme-btn">One Page</a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 06
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown active d-xl-none">
                                                <a href="{{ route('index') }}" class="border-none">
                                                   Home
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('index') }}">Home 01</a></li>
                                                    <li><a href="{{ route('index2') }}">Home 02</a></li>
                                                    <li><a href="{{ route('index3') }}">Home 03</a></li>
                                                    <li><a href="{{ route('index4') }}">Home 04</a></li>
                                                    <li><a href="{{ route('index5') }}">Home 05</a></li>
                                                    <li><a href="{{ route('index6') }}">Home 06</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('serviceDetails') }}">
                                                    Services
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('service') }}">Services</a></li>
                                                    <li><a href="{{ route('serviceDetails') }}">Service Details</a></li>
                                                </ul>
                                            </li>
                                          
                                            <li class="has-dropdown">
                                                <a href="{{ route('news') }}">
                                                     Pages
                                                     <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="has-dropdown">
                                                        <a href="{{ route('projectDetails') }}">
                                                            Projects
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ route('project') }}">Projects</a></li>
                                                            <li><a href="{{ route('projectDetails') }}">Project Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="{{ route('teamDetails') }}">
                                                            Team
                                                        <i class="fas fa-angle-down"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ route('team') }}">Team</a></li>
                                                            <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                    <li><a href="{{ route('pricing') }}">Pricing Table</a></li>
                                                    <li><a href="{{ route('errorPage') }}">errorPage Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('news') }}">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('news') }}">Blog </a></li>
                                                    <li><a href="{{ route('newsDetails') }}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                           <div class="header-button">
                                <a href="{{ route('contact') }}" class="theme-btn bg-2">Get A Quote</a>
                           </div>
                           <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="far fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Hero Section Start -->
        <section class="hero-section hero-2 fix">
            <div class="frame-shape">
               <img src="{{ asset('assets/img/hero/frame-1.png') }}" alt="shape-img">
            </div>
            <div class="man-shape float-bob-y">
               <img src="{{ asset('assets/img/hero/man.png') }}" alt="shape-img">
            </div>
            <div class="girl-shape float-bob-x">
               <img src="{{ asset('assets/img/hero/girl.png') }}" alt="shape-img">
            </div>
            <div class="frame-shape-2">
               <img src="{{ asset('assets/img/hero/frame-2.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <span class="sub-content wow fadeInUp" data-wow-delay=".2s">
                               <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                25+ Years Of Experience
                            </span>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                Build your Web Traffic With <br>
                                Our Next Agency
                            </h1>
                            <div class="hero-button wow fadeInUp" data-wow-delay=".6s">
                                <a href="{{ route('about') }}" class="theme-btn">Learn More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="dashboard-image wow fadeInUp" data-wow-delay=".7s">
                           <img src="{{ asset('assets/img/hero/dashboard.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-section fix section-padding">
            <div class="container">
                <div class="brand-wrapper">
                    <h6 class="wow fadeInUp" data-wow-delay=".2s">We Have <span>1563+</span> Global Partners. Explore Our Global Clients</h6>
                    <div class="swiper brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-image">
                                   <img src="{{ asset('assets/img/brand/linkedIn.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                   <img src="{{ asset('assets/img/brand/dropbox.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                   <img src="{{ asset('assets/img/brand/trello.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                   <img src="{{ asset('assets/img/brand/framer.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                   <img src="{{ asset('assets/img/brand/shopify.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-image">
                                   <img src="{{ asset('assets/img/brand/grammarly.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- About Section Start -->
        <section class="about-section fix section-padding pt-0">
            <div class="container">
                <div class="about-wrapper style-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-image-items-2">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="about-image">
                                           <img src="{{ asset('assets/img/about/01.png') }}" alt="about-img">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="about-image-2">
                                           <img src="{{ asset('assets/img/about/02.png') }}" alt="about-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        About Company
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                        We Increase Your Website
                                        Lead and Grow Sales
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                                    Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                </p>
                               <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4>Superior Quality Of Work</h4>
                                        <p>Our attention to detail and quality is unmatched in the industry. <br> We’re not just a resource provider but also a key</p>
                                    </div>
                               </div>
                               <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="dot"></div>
                                <div class="content">
                                    <h4>Flexible Scaling & Support</h4>
                                    <p>Our attention to detail and quality is unmatched in the industry. <br> We’re not just a resource provider but also a key</p>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
        <section class="service-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Popular Services
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        We Provide Best Modern SEO <br>
                        Service For Your Business
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-popular-items">
                            <div class="service-image">
                               <img src="{{ asset('assets/img/service/08.png') }}" alt="img">
                            </div>
                            <div class="service-content">
                                <h3>
                                    <a href="{{ route('serviceDetails') }}">
                                        Keyword Research
                                    </a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium</p>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn bg-2">Learn More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-popular-items">
                            <div class="service-image">
                               <img src="{{ asset('assets/img/service/09.png') }}" alt="img">
                            </div>
                            <div class="service-content">
                                <h3>
                                    <a href="{{ route('serviceDetails') }}">
                                        Content Writing
                                    </a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium</p>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn bg-2">Learn More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-popular-items">
                            <div class="service-image">
                               <img src="{{ asset('assets/img/service/10.png') }}" alt="img">
                            </div>
                            <div class="service-content">
                                <h3>
                                    <a href="{{ route('serviceDetails') }}">
                                        Site Optimizations
                                    </a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium</p>
                                <a href="{{ route('serviceDetails') }}" class="theme-btn bg-2">Learn More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Marketing Section Start -->
        <section class="cta-marketing-section fix">
            <div class="container">
                <div class="cta-marketing-wrapper">
                    <div class="content">
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            Ready to Boost your Digital <br>
                            product marketing ?
                        </h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".5s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem</p>
                    </div>
                    <div class="thumb wow fadeInUp" data-wow-delay=".6s">
                       <img src="{{ asset('assets/img/cta/cta-marketing.png') }}" alt="img">
                        <div class="circle-shape">
                           <img src="{{ asset('assets/img/cta/circle-shape.png') }}" alt="shape-img">
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="theme-btn bg-2 wow fadeInUp" data-wow-delay=".7s">Discover More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- Grow Business Section Start -->
        <section class="grow-business-section fix section-padding">
            <div class="container">
                <div class="grow-business-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="grow-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        Grow your Business
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Innovative Business Increase
                                        and Branding Solutions
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.
                                </p>
                                <div class="grow-percent-area">
                                    <div class="row g-4">
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="grow-percent-items">
                                                <h2><span class="count">85</span>%</h2>
                                                <h3>Increase Sales</h3>
                                                <p>
                                                    Sed perspiciatis unde omnis
                                                    natus error sit voluptate
                                                </p>
                                                <div class="vector-shape pt-3">
                                                   <img src="{{ asset('assets/img/vector.png') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="grow-percent-items">
                                                <h2><span class="count">15</span>%</h2>
                                                <h3>Reduced Losses</h3>
                                                <p>
                                                    Sed perspiciatis unde omnis
                                                    natus error sit voluptate
                                                </p>
                                                <div class="vector-shape pt-3">
                                                   <img src="{{ asset('assets/img/vector.png') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="grow-image-items">
                                <div class="grow-shape float-bob-y">
                                   <img src="{{ asset('assets/img/grow/grow-shape.png') }}" alt="shape-img">
                                </div>
                                <div class="frame-shape">
                                   <img src="{{ asset('assets/img/grow/frame-shape.png') }}" alt="shape-img">
                                </div>
                                <div class="user-shape float-bob-x">
                                   <img src="{{ asset('assets/img/grow/user-shape.png') }}" alt="shape-img">
                                </div>
                                <div class="grow-image">
                                   <img src="{{ asset('assets/img/grow/01.jpg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Section Start -->
        <section class="project-section fix section-padding footer-bg">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content text-white theme-bg-2 wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Popular Projects
                    </span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="/3s">
                        Explore Our Popular Case Studies
                    </h2>
                </div>
            </div>
            <div class="project-wrapper">
                <div class="swiper project-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-box-items">
                                <div class="project-image">
                                   <img src="{{ asset('assets/img/project/01.jpg') }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <p>Product Sales</p>
                                    <h3>
                                        <a href="#">
                                            Product Sale Revenue And How to
                                            Growth your product Sales
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-box-items">
                                <div class="project-image">
                                   <img src="{{ asset('assets/img/project/02.jpg') }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <p>Digital Marketing</p>
                                    <h3>
                                        <a href="#">
                                            How to Improve your Digital Product
                                            Marketing to grow business
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-box-items">
                                <div class="project-image">
                                   <img src="{{ asset('assets/img/project/03.jpg') }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <p>SEO Analysis</p>
                                    <h3>
                                        <a href="#">
                                            How Important SEO for Develop
                                            Product Marketing
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-box-items">
                                <div class="project-image">
                                   <img src="{{ asset('assets/img/project/04.jpg') }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <p>Web Optimization</p>
                                    <h3>
                                        <a href="#">
                                            Top 10 Resources for Build Web Traffic
                                            and grow Web Optimization
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-dot pt-5 text-center">
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Section Start -->
        <section class="counter-section  section-padding pt-0">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="counter-items">
                            <h2><span class="count">98</span>%</h2>
                            <p>
                                Average <br>
                                Conversion Rate
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="counter-items">
                            <h2><span class="count">35</span>M+</h2>
                            <p>
                                Traffic <br>
                                Generated
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="counter-items">
                            <h2><span class="count">97</span>%</h2>
                            <p>
                                Positive <br>
                                Customer Review
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="counter-items">
                            <h2><span class="count">92</span>%</h2>
                            <p>
                                Professional <br>
                                Team Members
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Planning Section Start -->
        <section class="planning-section fix section-padding">
            <div class="container">
                <div class="planning-wrapper">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="planning-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        Planning & Grow
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Planning And Executing Successful Events
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus voluptatem accusantium <br>
                                    doloremque laudantium, totam rem aperiam, eaque
                                </p>
                                <div class="planning-items mb-2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="number">
                                        01
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-1">Market Research</h5>
                                        <p>Attention to detail quality is unmatched industry</p>
                                    </div>
                                </div>
                                <div class="planning-items mt-0 mb-2 active wow fadeInUp" data-wow-delay=".5s">
                                    <div class="number">
                                        02
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-1">Content Marketing</h5>
                                        <p>Attention to detail quality is unmatched industry</p>
                                    </div>
                                </div>
                                <div class="planning-items mt-0 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="number">
                                        03
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-1">Customer Support</h5>
                                        <p>Attention to detail quality is unmatched industry</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="planning-image-items">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="planning-image">
                                           <img src="{{ asset('assets/img/planning/plan-1.png') }}" alt="planning-img">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="planning-image-2">
                                           <img src="{{ asset('assets/img/planning/plan-2.png') }}" alt="planning-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-2 fix section-padding fix">
            <div class="bg-shape">
               <img src="{{ asset('assets/img/testimonial/bg-shape.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Clients Feedback
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".5s">
                        We’ve 1250+ Global Clients Say Us
                    </h2>
                </div>
            </div>
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image">
                               <img src="{{ asset('assets/img/testimonial/client-2.png') }}" alt="img">
                            </div> 
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Michael M. Griffin <span>/CO Founder</span></h5>
                                    </div>
                                </div>
                                <p>
                                    We denounce with righteous indignation and dislike men who are so beguiled demoralized by
                                    the charms of pleasure of the moment
                                </p>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image">
                               <img src="{{ asset('assets/img/testimonial/client-3.png') }}" alt="img">
                            </div> 
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Robin T. Peckham<span>/ Developer</span></h5>
                                    </div>
                                </div>
                                <p>
                                    We denounce with righteous indignation and dislike men who are so beguiled demoralized by
                                    the charms of pleasure of the moment
                                </p>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image">
                               <img src="{{ asset('assets/img/testimonial/client-2.png') }}" alt="img">
                            </div> 
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Michael M. Griffin <span>/CO Founder</span></h5>
                                    </div>
                                </div>
                                <p>
                                    We denounce with righteous indignation and dislike men who are so beguiled demoralized by
                                    the charms of pleasure of the moment
                                </p>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimonial-image">
                               <img src="{{ asset('assets/img/testimonial/client-3.png') }}" alt="img">
                            </div> 
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Robin T. Peckham<span>/ Developer</span></h5>
                                    </div>
                                </div>
                                <p>
                                    We denounce with righteous indignation and dislike men who are so beguiled demoralized by
                                    the charms of pleasure of the moment
                                </p>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-dot pb-5 text-center">
                    <div class="dot"></div>
                </div>
            </div>
        </section>

        <!-- Cta Newsletter Section Start -->
        <section class="cta-newsletter-section fix section-padding">
            <div class="container">
                <div class="cta-newsletter-wrapper fix">
                    <div class="line-shape">
                       <img src="{{ asset('assets/img/line-shape.png') }}" alt="shape-img">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="cta-newsletter-image">
                               <img src="{{ asset('assets/img/cta-newsletter.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="cta-newsletter-content">
                                <div class="section-title mb-3">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        Newsletter
                                    </span>
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                        Start a free 7-days trial <br> now & Get more updates
                                    </h2>
                                </div>
                                <p class="text-white wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus voluptatem accusantiue <br>
                                    doloremque laudantium, totam rem aperiam
                                </p>
                                <div class="form-clt wow fadeInUp" data-wow-delay=".7s">
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                    <button class="theme-btn bg-2">
                                        <span>Sign Up <i class="far fa-arrow-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section Start -->
        <footer class="footer-section footer-bg">
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="{{ route('index') }}">
                                       <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Sed perspiciatis unde omnis natus
                                        doloremque laudantium totae
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 ps-xxl-5 ml-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Quick Link</h4>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="{{ route('serviceDetails') }}"> 
                                            Popular Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('teamDetails') }}"> 
                                            Team Member
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}"> 
                                            Privacy & Setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pricing') }}"> 
                                            Pricing Package
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 ml-minus-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Get In Touch</h4>
                                </div>
                                <div class="contact-info-area">
                                    <div class="contact-items color-style-2">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <p>
                                                55 Main Street, 2nd block <br>
                                                Malborne, Australia
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-items color-style-2">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <a href="mailto:info@example.com" class="link">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="contact-items color-style-2">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h4><a href="tel:00012345688">+000 (123) 456 88</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Support</h4>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="{{ route('serviceDetails') }}"> 
                                            Terms & Conditions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}"> 
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pricing') }}"> 
                                            Pricing Plan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}"> 
                                            Contact us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Product</h4>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="{{ route('serviceDetails') }}"> 
                                            Web Template Design
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('serviceDetails') }}"> 
                                            Mobile Application
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('serviceDetails') }}"> 
                                            3D Illustration
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between pb-0">
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    FAQs
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    Privacy
                                </a>
                            </li>
                        </ul>
                        <a href="#" id="scrollUp" class="scroll-icon">
                            <i class="far fa-angle-double-up"></i>
                        </a>
                        <p>
                            © <a href="{{ route('index') }}">2024</a> All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>

@endsection