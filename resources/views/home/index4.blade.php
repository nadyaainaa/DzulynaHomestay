@extends('layout.layout')

@php
     $header = 'false';
     $breadcrumb = 'false';
     $footer = 'false';
@endphp

@section('content')
       
        <!-- Header Area Start -->
        <header id="header-sticky" class="header-2">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="sticky-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/img/dzl2.png') }}" alt="logo-img" class="logo-2"  style="max-height: 50px;" >
                           </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ route('about') }}">Home</a>
                                            </li>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="{{ route('index') }}">
                                                List Homestay
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
                                                <a href="{{ route('about') }}">Feedback</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('serviceDetails') }}">
                                                    Contact
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('service') }}">Facebook</a></li>
                                                    <li><a href="{{ route('serviceDetails') }}">Whatsapp</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                           <div class="header-button">
                                <a href="{{ route('login') }}" class="theme-btn bg-2">Sign In</a>
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
        <section class="hero-section hero-4">
            <div class="container">
               <div class="row g-4 align-items-center justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <span class="sub-content wow fadeInUp" data-wow-delay=".2s">
                               <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                Book your Stay now
                            </span>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                Welcome to<br>
                                Dzulyna Homestay
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Experience cozy and comfortable stays with a touch of home,<br>
                                in the heart of your favorite destinations.
                            </p>
                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                                    <a href="{{ route('about') }}" class="theme-btn">
                                        View Homestay
                                        <i class="fas fa-long-arrow-right"></i>
                                    </a>
                                </div>
                                {{-- <div class="author-image wow fadeInUp" data-wow-delay=".5s">
                                   <img src="{{ asset('assets/img/about/face-mans-2.png') }}" alt="author-img">
                                    <div class="content">
                                        <h6>
                                             Trusted by 1M+ people <br>
                                            around the globe
                                        </h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                       <div class="hero-image">
                           <img src="{{ asset('assets/img/bg1.png') }}" alt="img">
                            <div class="circle-musk-shape float-bob-x">
                               <img src="{{ asset('assets/img/hero/circle-musk.png') }}" alt="shape-img">
                            </div>
                       </div>
                    </div>
               </div>
            </div>
        </section>

        <section class="service-section fix pt-80 pb-80 section-bg">
            <div class="container">
                <h4 class="mb-5 text-white text-center wow fadeInUp" data-wow-delay=".3s">Preparing For Your Business Success With IT Solution</h4>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-items">
                            <div class="content">
                                <p>01</p>
                                <h5>
                                    <a href="{{ route('serviceDetails') }}">
                                        Data Manage & <br>
                                        Solutions Center
                                    </a>
                                </h5>
                                <a class="arrow-btn" href="{{ route('serviceDetails') }}"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="thumb">
                               <img src="{{ asset('assets/img/service/01.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-items">
                            <div class="content">
                                <p>02</p>
                                <h5>
                                    <a href="{{ route('serviceDetails') }}">
                                        Preparing For <br>
                                        Cloud Services
                                    </a>
                                </h5>
                                <a class="arrow-btn" href="{{ route('serviceDetails') }}"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="thumb">
                               <img src="{{ asset('assets/img/service/02.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-items">
                            <div class="content">
                                <p>03</p>
                                <h5>
                                    <a href="{{ route('serviceDetails') }}">
                                        Machine Learning <br>
                                        & Development
                                    </a>
                                </h5>
                                <a class="arrow-btn" href="{{ route('serviceDetails') }}"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="thumb">
                               <img src="{{ asset('assets/img/service/03.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <section class="brand-section-2 fix">
            <div class="container-fluid">
                <div class="brand-wrapper-2">
                    <div class="radius-shape">
                       <img src="{{ asset('assets/img/brand/radius-left.png') }}" alt="shape-img">
                    </div>
                    <div class="radius-shape-2">
                       <img src="{{ asset('assets/img/brand/radius-right.png') }}" alt="shape-img">
                    </div>
                    <h5 class="wow fadeInUp" data-wow-delay=".3s">We Have <span>1563+</span> Global Partners. Explore Our Global Clients</h5>
                    <div class="brand-items">
                        <div class="brand-image wow fadeInUp" data-wow-delay=".2s">
                           <img src="{{ asset('assets/img/brand/linkedIn.png') }}" alt="img">
                        </div>
                        <div class="brand-image wow fadeInUp" data-wow-delay=".4s">
                           <img src="{{ asset('assets/img/brand/dropbox.png') }}" alt="img">
                        </div>
                        <div class="brand-image wow fadeInUp" data-wow-delay=".6s">
                           <img src="{{ asset('assets/img/brand/trello.png') }}" alt="img">
                        </div>
                        <div class="brand-image wow fadeInUp" data-wow-delay=".8s">
                           <img src="{{ asset('assets/img/brand/framer.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="brand-items">
                        <div class="brand-image wow fadeInUp" data-wow-delay=".2s">
                           <img src="{{ asset('assets/img/brand/grammarly.png') }}" alt="img">
                        </div>
                        <div class="brand-image wow fadeInUp" data-wow-delay=".4s">
                           <img src="{{ asset('assets/img/brand/amazon.png') }}" alt="img">
                        </div>
                        <div class="brand-image wow fadeInUp" data-wow-delay=".6s">
                           <img src="{{ asset('assets/img/brand/outbrain.png') }}" alt="img">
                        </div>
                        <div class="brand-image wow fadeInUp" data-wow-delay=".8s">
                           <img src="{{ asset('assets/img/brand/shopify.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-4 align-items-center justify-content-between">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                           <div class="digital-about-image">
                               <img src="{{ asset('assets/img/about/digittal-about-img.png') }}" alt="img">
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        About Company
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        We Have Experience Team to
                                        Lead your Business
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus error sit volupta temes accusantium doloremque laudantium, totam rem
                                </p>
                                <ul class="about-list style-2 wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Marketing Strategy & SEO Camping
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Best Customers Experience
                                    </li>
                                </ul>
                                <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                    <a href="{{ route('about') }}" class="theme-btn bg-2">
                                        Learn More Us
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
        <section class="service-section-4 fix bg-cover section-padding" style="background-image: url('{{ asset('assets/img/service/service-bg-min.jpg') }}')">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content bg-color-3 wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Popular Services
                    </span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        We Provide Best Digital Marketing <br>
                        service to build an modern & <br> professional service for clients
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-keywords"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Keyword Research</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items active">
                            <div class="icon">
                                <i class="flaticon-social-media"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Social Media Marketing</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-email-marketing"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Email Marketing</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-copy-writing"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Content Writing</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-software-development"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Website Development</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="flaticon-www"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">SEO Optimizations</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Working Process Section Start -->
        <section class="working-section-2 section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Working Process
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        We Complete Our Work to Follow <br>
                        Some Easy Ways 
                    </h2>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                        <div class="working-card-items">
                            <div class="icon">
                               <img src="{{ asset('assets/img/working-process/icon-1.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <span class="sub-title">Step 01</span>
                                <h3>Discovery & Analysis</h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error <br> voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                        <div class="arrow-image">
                           <img src="{{ asset('assets/img/working-process/arrow-down.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="arrow-image text-center">
                           <img src="{{ asset('assets/img/working-process/arrow-revers.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <div class="working-card-items">
                            <div class="content">
                                <span class="sub-title">Step 02</span>
                                <h3>Competitor Analysis</h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error <br> voluptatem accusantium
                                </p>
                            </div>
                            <div class="icon">
                               <img src="{{ asset('assets/img/working-process/icon-2.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                        <div class="working-card-items">
                            <div class="icon">
                               <img src="{{ asset('assets/img/working-process/icon-3.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <span class="sub-title">Step 03</span>
                                <h3>Strategy & Execution</h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error <br> voluptatem accusantium
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                        <div class="arrow-image">
                           <img src="{{ asset('assets/img/working-process/arrow-down.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="arrow-image text-center">
                           <img src="{{ asset('assets/img/working-process/arrow-revers.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <div class="working-card-items">
                            <div class="content">
                                <span class="sub-title">Step 04</span>
                                <h3>Get 3x Results</h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error <br> voluptatem accusantium
                                </p>
                            </div>
                            <div class="icon">
                               <img src="{{ asset('assets/img/working-process/icon-4.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-4 fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Testimonials
                    </span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        We’ve 1250+ Global Clients Say Us
                    </h2>
                </div>
            </div>
            <div class="swiper testimonial-slider-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Louis K. Peters <span>/CEO & Founder</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-4.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Michael B. Camara <span>/Designer</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-5.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Gary D. Gallegos <span>/Business man</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-6.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Steven D. Owens <span>/Manager</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
            </div>
            <div class="swiper testimonial-slider-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-7.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Patrick J. Palmer <span>/ Developer</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-8.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Todd C. Keller <span>/CEO & Founder</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-9.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>Shane D. Ryan <span>/Manager</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
                        <div class="testimonial-box-items">
                            <div class="testimonial-content">
                                <div class="author-image">
                                   <img src="{{ asset('assets/img/testimonial/client-10.png') }}" alt="author-img">
                                    <div class="content">
                                        <h5>John F. Smith <span>/Designer</span></h5>
                                    </div>
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis natus error sit voluptatem accusanti doloremque
                                    laudantium, totam rem aperiame
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
            </div>
        </section>

        <!-- Faq Section Start -->
        <section class="faq-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Some Question
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Frequently Asked Questions
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-content">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                Why Need Digital Marketing For Build Business ?
                                            </button>
                                        </h4>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                How to Increase Web Traffic ?
                                            </button>
                                        </h4>
                                        <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                How to Development SEO Optimization ?
                                            </button>
                                        </h4>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                Have Any Professional Team Member ?
                                            </button>
                                        </h4>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                                Have you any Global Customer ?
                                            </button>
                                        </h4>
                                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section class="news-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        News & Blog
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Explore Our Latest News & Blog
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items style-2">
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/news/07.jpg') }}')"></div>
                            <div class="news-content">
                                <p>November 25, 2024</p>
                                <h4>
                                    <a href="{{ route('newsDetails') }}">
                                        Achieving Fashion Elegan
                                        Runway to Real Life
                                    </a>
                                </h4>
                                <a class="link-btn" href="{{ route('newsDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items style-2">
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/news/08.jpg') }}')"></div>
                            <div class="news-content">
                                <p>November 25, 2024</p>
                                <h4>
                                    <a href="{{ route('newsDetails') }}">
                                        Remote work made easy
                                        way better tools.
                                    </a>
                                </h4>
                                <a class="link-btn" href="{{ route('newsDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-card-items style-2">
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/news/09.jpg') }}')"></div>
                            <div class="news-content">
                                <p>November 25, 2024</p>
                                <h4>
                                    <a href="{{ route('newsDetails') }}">
                                        Achieving Fashion Elegan
                                        Runway to Real Life
                                    </a>
                                </h4>
                                <a class="link-btn" href="{{ route('newsDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section class="contact-section fix section-padding pt-0 fix">
            <div class="pattern-shape">
               <img src="{{ asset('assets/img/box-pattern.png') }}" alt="radius-shape">
            </div>
            <div class="container">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-image">
                           <img src="{{ asset('assets/img/contact.jpg') }}" alt="img">
                            <div class="circle-musk-shape float-bob-x">
                               <img src="{{ asset('assets/img/hero/circle-musk.png') }}" alt="shape-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="sub-content wow fadeInUp">
                               <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                Contact Us
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Ready to Boost your Digital <br>
                                product marketing ?
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium <br> doloremque laudantium, totam rem aperiam, eaque ipsa quae
                        </p>
                        <a href="{{ route('contact') }}" class="theme-btn mt-4 wow fadeInUp" data-wow-delay=".3s">
                            Get A Quote
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section Start -->
        <footer class="footer-section footer-bg fix">
            <div class="color-shape">
               <img src="{{ asset('assets/img/footer-color-shape.png') }}" alt="shape-img">
            </div>
            <div class="color-shape-2">
               <img src="{{ asset('assets/img/footer-color-shape-2.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-2 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Newsletter</h4>
                                </div>
                                <div class="footer-content">
                                    <p>Get more update to join Us</p>
                                    <div class="footer-input">
                                        <input type="email" id="email" placeholder="Your Email">
                                        <button class="newsletter-btn" type="submit">
                                            <i class="far fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
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