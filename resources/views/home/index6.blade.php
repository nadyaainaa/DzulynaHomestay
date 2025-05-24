@extends('layout.layout')

@php
     $header = 'false';
     $breadcrumb = 'false';
     $footer = 'false';
@endphp

@section('content')

        <!-- Header Area Start -->
        <header id="header-sticky" class="header-3">
            <div class="container-fluid">
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
                           <div class="header__hamburger d-xl-block my-auto">
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
        <section class="hero-section hero-6 pb-0">
            <div class="robot-shape-1 float-bob-y">
               <img src="{{ asset('assets/img/home-6/robot-1.png') }}" alt="img">
            </div>
            <div class="robot-shape-2 float-bob-y">
               <img src="{{ asset('assets/img/home-6/robot-2.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content center">
                            <span class="sub-content wow fadeInUp" data-wow-delay=".2s">
                               <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                Welcome to Next Agency
                            </span>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                Building the 10x Faster Future <br>
                                with Artificial Intelligence
                            </h1>
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <i class="fas fa-check-circle"></i> 10x Faster Power Buster
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".5s">
                                    <i class="fas fa-check-circle"></i> Natural Language Processing
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".7s">
                                    <i class="fas fa-check-circle"></i> Machine Learning System
                                </li>
                            </ul>
                            <form action="#" class="sign-input-form wow fadeInUp" data-wow-delay=".5s">
                                <div class="doming-input">
                                    <input type="text" placeholder="Email Address">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <button class="theme-btn" type="submit">Sign Up Free <i class="far fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="dashboard-image wow fadeInUp" data-wow-delay=".4s">
                           <img src="{{ asset('assets/img/home-6/dashboard.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Process Section Start -->
        <section class="work-process-section-6 fix section-padding">
            <div class="ai-shape-1 float-bob-y">
               <img src="{{ asset('assets/img/home-6/ai-shape-1.png') }}" alt="shape-img">
            </div>
            <div class="ai-shape-2 float-bob-y">
               <img src="{{ asset('assets/img/home-6/ai-shape-2.png') }}" alt="shape-img">
            </div>
            <div class="box-shape-left"></div>
            <div class="box-shape-right"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text-2 text-white wow fadeInUp">Working Process</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Get Faster Solutions in <br>
                        Very Easy Ways
                    </h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="work-process-card-items">
                            <div class="number">
                                01
                            </div>
                            <div class="content">
                                <h5>Create an Account</h5>
                                <p>
                                    Sed perspiciatis unde  natus error
                                    volupta temes accu totam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="arrow-shape mt-5">
                           <img src="{{ asset('assets/img/home-6/arrow-line-shape.png') }}" alt="shape-img">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6"></div>
                    <div class="col-xl-4 col-lg-6"></div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="work-process-card-items">
                            <div class="number">
                                02
                            </div>
                            <div class="content">
                                <h5>Generate your content</h5>
                                <p>
                                    Sed perspiciatis unde  natus error
                                    volupta temes accu totam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6"></div>
                    <div class="col-xl-4 col-lg-6"></div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="arrow-shape text-center">
                           <img src="{{ asset('assets/img/home-6/arrow-line-shape-2.png') }}" alt="shape-img">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="work-process-card-items">
                            <div class="number">
                                03
                            </div>
                            <div class="content">
                                <h5>Get Final Results</h5>
                                <p>
                                    Sed perspiciatis unde  natus error
                                    volupta temes accu totam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
        <section class="service-section-6 fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text-2 wow fadeInUp">Popular Service</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Experience the full power AI <br>
                        Generator your data
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="popular-service-box-items">
                            <div class="icon">
                                <i class="flaticon-copy-writing"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Blog Post & Stories</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error
                                    voluptatem accusan doloremque totam
                                </p>
                                <a href="{{ route('serviceDetails') }}" class="link-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="popular-service-box-items active">
                            <div class="icon">
                                <i class="flaticon-social-media"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Social Media Content</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error
                                    voluptatem accusan doloremque totam
                                </p>
                                <a href="{{ route('serviceDetails') }}" class="link-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="popular-service-box-items">
                            <div class="icon">
                                <i class="flaticon-earning"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">eCommerce Copy</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error
                                    voluptatem accusan doloremque totam
                                </p>
                                <a href="{{ route('serviceDetails') }}" class="link-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="popular-service-box-items">
                            <div class="icon">
                                <i class="flaticon-software-development"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Ad Targeting tips</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error
                                    voluptatem accusan doloremque totam
                                </p>
                                <a href="{{ route('serviceDetails') }}" class="link-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="popular-service-box-items">
                            <div class="icon">
                                <i class="flaticon-copy-writing"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Content Rewriter</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error
                                    voluptatem accusan doloremque totam
                                </p>
                                <a href="{{ route('serviceDetails') }}" class="link-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="popular-service-box-items">
                            <div class="icon">
                                <i class="flaticon-database"></i>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('serviceDetails') }}">Optimized for conversions</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error
                                    voluptatem accusan doloremque totam
                                </p>
                                <a href="{{ route('serviceDetails') }}" class="link-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Video Section Start -->
        <section class="feature-video-section fix section-padding">
            <div class="container">
                <div class="feature-video-wrapper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="feature-video-thumb">
                               <img src="{{ asset('assets/img/home-6/video-feature.png') }}" alt="img">
                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton ripple video-popup">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-video-content">
                                <div class="section-title">
                                    <span class="sec-sub-text-2 wow fadeInUp">What We Doing</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Better Solutions to Create <br> your life more easier</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium <br> doloremque laudantium, totam rem aperiam eaque ipsa</p>
                                <div class="feature-box-area">
                                    <div class="feature-items wow fadeInUp" data-wow-delay=".3s">
                                        <h5>
                                            <i class="fas fa-check-circle"></i>
                                            Easy write and test more copy varistions
                                        </h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                    </div>
                                    <div class="feature-items wow fadeInUp" data-wow-delay=".5s">
                                        <h5>
                                            <i class="fas fa-check-circle"></i>
                                            Easy write and test more copy varistions
                                        </h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Section Start -->
        <section class="feature-section-5 fix section-padding">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="feature-content">
                                <div class="section-title">
                                    <span class="sec-sub-text-2 wow fadeInUp">Core Features</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Unlock the power of  AI & Create Content Faster</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium <br> doloremque laudantium, totam rem aperiam eaque ipsa</p>
                                <ul class="list-items wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Connect with leads with zero hassle.
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Take quick payments direct from meetings
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Start finding leads that get coverts quickly
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}" class="theme-btn bg-2 wow fadeInUp" data-wow-delay=".5s">Sign Up Free <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="feature-dashboard-image">
                               <img src="{{ asset('assets/img/home-6/dashboard-2.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section Start -->
        <section class="pricing-section-3 fix section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text-2 wow fadeInUp">Pricing Package</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        We Offer Amazing Pricing Package <br>
                        keep Under Budget
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-card-items-2">
                            <div class="pricing-header">
                                <h3>Regular Plan</h3>
                                <p>Sed ut perspiciatis unde omnis istewse natus sit voluptatem accusa</p>
                            </div>
                            <div class="pricing-button">
                                <a href="{{ route('contact') }}" class="theme-btn bg-header">Choose Package</a>
                            </div>
                            <div class="price-items">
                                <h2>
                                    <sub>$</sub>12 <span>/month</span>
                                </h2>
                                <div class="discount">
                                    <h6>
                                        23% <br>
                                        OFF
                                    </h6>
                                </div>
                                <div class="arrow-img">
                                   <img src="{{ asset('assets/img/arrow.png') }}" alt="img">
                                </div>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="far fa-check"></i>
                                    Blog & Article Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    eCommerce Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Social Media Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Content Writing
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Ad Providing
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="pricing-card-items-2 active">
                            <div class="pricing-header">
                                <h3>Standard Plan</h3>
                                <p>Sed ut perspiciatis unde omnis istewse natus sit voluptatem accusa</p>
                            </div>
                            <div class="pricing-button">
                                <a href="{{ route('contact') }}" class="theme-btn bg-header">Choose Package</a>
                            </div>
                            <div class="price-items">
                                <h2>
                                    <sub>$</sub>45<span>/month</span>
                                </h2>
                                <div class="discount">
                                    <h6>
                                        23% <br>
                                        OFF
                                    </h6>
                                </div>
                                <div class="arrow-img">
                                   <img src="{{ asset('assets/img/arrow-2.png') }}" alt="img">
                                </div>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="far fa-check"></i>
                                    Blog & Article Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    eCommerce Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Social Media Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Content Writing
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Ad Providing
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="pricing-card-items-2">
                            <div class="pricing-header">
                                <h3>Premium Plan</h3>
                                <p>Sed ut perspiciatis unde omnis istewse natus sit voluptatem accusa</p>
                            </div>
                            <div class="pricing-button">
                                <a href="{{ route('contact') }}" class="theme-btn bg-header">Choose Package</a>
                            </div>
                            <div class="price-items">
                                <h2>
                                    <sub>$</sub>98<span>/month</span>
                                </h2>
                                <div class="discount">
                                    <h6>
                                        23% <br>
                                        OFF
                                    </h6>
                                </div>
                                <div class="arrow-img">
                                   <img src="{{ asset('assets/img/arrow.png') }}" alt="img">
                                </div>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="far fa-check"></i>
                                    Blog & Article Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    eCommerce Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Social Media Copy
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Content Writing
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    Ad Providing
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-6 fix section-padding">
            <div class="container">
                <div class="testimonial-wrapper-3">
                    <div class="testimonial-top-items">
                        <div class="section-title mb-0">
                            <span class="sec-sub-text-2 wow fadeInUp">Clients Feedback</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">What Our Clients Say Us</h2>
                        </div>
                        <div class="testimonial-right">
                           <a href="{{ route('index6') }}" class="theme-btn hover-white wow fadeInUp" data-wow-delay=".3s">View More <i class="far fa-arrow-right"></i></a>
                           <div class="author-items wow fadeInUp" data-wow-delay=".5s">
                               <img src="{{ asset('assets/img/home-6/client.png') }}" alt="img">
                                <h6 class="text-white">
                                    Trusted by 1M+ people <br>
                                    around the globe
                                </h6>
                           </div>
                        </div>
                    </div>
                    <div class="testimonial-items">
                        <div class="testimonial-thumb-item">
                            <div class="swiper testi-thumb-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-thumb bg-cover" style="background-image: url('{{ asset('assets/img/home-6/testimonial/01.png') }}')"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb bg-cover" style="background-image: url('{{ asset('assets/img/home-6/testimonial/02.png') }}')"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb bg-cover" style="background-image: url('{{ asset('assets/img/home-6/testimonial/03.png') }}')"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb bg-cover" style="background-image: url('{{ asset('assets/img/home-6/testimonial/04.png') }}')"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-thumb bg-cover" style="background-image: url('{{ asset('assets/img/home-6/testimonial/05.png') }}')"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-content">
                            <div class="swiper testi-content-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <h3>Michael M. Griffin <span>/ CEO & Founder</span></h3>
                                            <h4>
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <h3>Michael M. Griffin <span>/ CEO & Founder</span></h3>
                                            <h4>
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <h3>Michael M. Griffin <span>/ CEO & Founder</span></h3>
                                            <h4>
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <h3>Michael M. Griffin <span>/ CEO & Founder</span></h3>
                                            <h4>
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <h3>Michael M. Griffin <span>/ CEO & Founder</span></h3>
                                            <h4>
                                                Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                                            </h4>
                                        </div>
                                    </div>
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
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                        Frequently Asked Questions
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        Digital marketing & advertising approach focuses on capturing the essential
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
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
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion2">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                                How can bias be addressed in AI algorithms?
                                            </button>
                                        </h4>
                                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                                Are AI and machine learning the same thing?
                                            </button>
                                        </h4>
                                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                                How to Development SEO Optimization ?
                                            </button>
                                        </h4>
                                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9">
                                                Can AI replace human jobs?
                                            </button>
                                        </h4>
                                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tiueaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta explicabo voluptatem voluptas aspernatur
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                                                How can I learn more about AI and get in the field?
                                            </button>
                                        </h4>
                                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#accordion">
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

        <!-- Cta Section Start -->
        <section class="cta-section-6 fix section-padding pt-0">
            <div class="container">
                <div class="cta-newsletter-wrapper-2 bg-cover" style="background-image: url('{{ asset('assets/img/home-6/cta-shape.png') }}')">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="section-title mb-0">
                                <span class="text-white sec-sub-text-2 wow fadeInUp">Newsletter</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Start a free 7-days trial now & Get more updates</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <h5 class="text-white wow fadeInUp" data-wow-delay=".3s">Subscribe Our Newsletter</h5>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".5s">
                                <input type="text" name="email" id="email" placeholder="Email Address">
                                <button class="theme-btn bg-2">
                                    <span>Sign Up <i class="far fa-arrow-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-section-6 fix section-padding pt-0">
            <div class="container">
                <h5 class="brand-text-6 wow fadeInUp" data-wow-delay=".3s">We Have <span>1563+</span> Global Partners. Explore Our Global Clients</h5>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-thumb center">
                               <img src="{{ asset('assets/img/brand/linkedIn.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-thumb center">
                               <img src="{{ asset('assets/img/brand/dropbox.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-thumb center">
                               <img src="{{ asset('assets/img/brand/trello.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-thumb center">
                               <img src="{{ asset('assets/img/brand/framer.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-thumb center">
                               <img src="{{ asset('assets/img/brand/shopify.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-thumb center">
                               <img src="{{ asset('assets/img/brand/grammarly.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section Start -->
        <footer class="footer-section footer-bg">
            <div class="robot-shape float-bob-y">
               <img src="{{ asset('assets/img/home-6/robot-3.png') }}" alt="shape-img">
            </div>
            <div class="robot-shape-2 float-bob-y">
               <img src="{{ asset('assets/img/home-6/robot-4.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="discussed-items">
                    <div class="footer-logo wow fadeInUp" data-wow-delay=".3s">
                        <a href="{{ route('index') }}">
                           <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="discussed-content wow fadeInUp" data-wow-delay=".5s">
                        <h2>Let’s Discussed About <span>Your Projects</span></h2>
                        <a href="{{ route('contact') }}" class="theme-btn hover-white">Get Started <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>About Us</h4>
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
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-1 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Get In Touch</h4>
                                </div>
                                <div class="contact-info-area">
                                    <div class="contact-items">
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
                                    <div class="contact-items">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <a href="mailto:info@example.com" class="link">info@example.com</a>
                                        </div>
                                    </div>
                                    <div class="contact-items">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Recent News</h4>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-post-items">
                                        <div class="thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/pp1.png') }}')"></div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    Nov 25, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{ route('newsDetails') }}">
                                                    How achieve more <br> your nine to five
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-post-items mb-0">
                                        <div class="thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/pp2.png') }}')"></div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    Nov 29, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="{{ route('newsDetails') }}">
                                                    Discover a better way of company.
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-wrapper d-flex align-items-center justify-content-between">
                            <ul class="footer-menu wow fadeInUp" data-wow-delay=".2s">
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
                            <a href="#" id="scrollUp" class="scroll-icon wow fadeInUp" data-wow-delay=".4s">
                                <i class="far fa-angle-double-up"></i>
                            </a>
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                © <a href="{{ route('index') }}">2024</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

@endsection