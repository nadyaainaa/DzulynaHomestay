@extends('layout.layout')

@php
     $header = 'false';
     $breadcrumb = 'false';
@endphp

@section('content')

        <!-- Header Area Start -->
        <header id="header-sticky" class="header-1">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="sticky-logo">
                            <a href="{{ route('index') }}">
                               <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img" class="logo-1">
                           </a>
                           <a href="{{ route('index') }}">
                               <img src="{{ asset('assets/img/logo/black-logo.svg') }}" alt="logo-img" class="logo-2">
                            </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="{{ route('login') }}">
                                                Login
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                            </li>
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
                            <div class="icon-items">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p>Make A Call</p>
                                    <h4><a href="tel:+00012345688">+000 (123) 456 88</a></h4>
                                </div>
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
        <section class="hero-section hero-1 bg-cover fix" style="background-image: url('{{ asset('assets/img/hero/01.jpg') }}')">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                Welcome to Dzulyna Homestay <br>
                                Your Best Choice <br> for Homestay <br> Services
                            </h1>
                            <div class="hero-button">
                                <a href="{{ route('index') }}" class="theme-btn hover-white wow fadeInUp" data-wow-delay=".4s">Get Started Now <i class="far fa-arrow-right"></i></a>
                                <a href="{{ route('service') }}" class="btn-link wow fadeInUp" data-wow-delay=".6s">View Services <i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="hero-client d-flex align-items-center gap-4 mt-50 wow fadeInUp" data-wow-delay=".8s">
                            <img src="{{ asset('assets/img/hero/client.png') }}" alt="img">
                                <p class="text-white">
                                    Trusted by 1M+ people <br>
                                    around the globe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hero-contact-box">
                            <h4>Get Consultations</h4>
                            <p>Ready to Register Our Landsio Services</p>
                            <form action="#" id="contact-form" method="POST" class="contact-form-item">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="payment-save">
                                            <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
                                            <p>I’ve Read and agreed to <a href="{{ route('index') }}">Terms & Conditions</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn">
                                            Get Started Now <i class="far fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
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

        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <ul class="experience-text wow fadeInUp" data-wow-delay=".6s">
                                    <li>
                                        25+ Years Of Experience
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        Awards Winning Company
                                    </li>
                                </ul>
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="about-image">
                                           <img src="{{ asset('assets/img/about/01.jpg') }}" alt="about-img">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="about-image">
                                           <img src="{{ asset('assets/img/about/02.jpg') }}" alt="about-img">
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
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Preparing Your Success
                                        Trusted IT Services
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus error sit volupta temes accusantium doloremque laudantium, totam rem
                                </p>
                                <ul class="about-list wow fadeInUp" data-wow-delay=".3s">
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
                                <div class="about-author wow fadeInUp" data-wow-delay=".5s">
                                    <div class="about-button">
                                        <a href="{{ route('about') }}" class="theme-btn">
                                            Learn More Us
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="author-image">
                                       <img src="{{ asset('assets/img/about/author.jpg') }}" alt="author-img">
                                        <div class="content">
                                            <h5>Lucas J. Swe / <span>CO Founder</span></h5>
                                        </div>
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
                        We Provide Best Quality Service <br>
                        For Your Business
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-card-items">
                            <div class="icon">
                                <i class="flaticon-technical"></i>
                            </div>
                            <h3>
                                <a href="{{ route('serviceDetails') }}">
                                    Data Center and
                                    Cloud Services
                                </a>
                            </h3>
                            <div class="service-thumb">
                               <img src="{{ asset('assets/img/service/04.png') }}" alt="service-img">
                                <div class="line-shape">
                                   <img src="{{ asset('assets/img/service/line.png') }}" alt="shape-img">
                                </div>
                            </div>
                            <a class="link-btn" href="{{ route('serviceDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="service-card-items active">
                            <div class="icon">
                                <i class="flaticon-vector-design"></i>
                            </div>
                            <h3>
                                <a href="{{ route('serviceDetails') }}">
                                    Web Development
                                    Software Renew
                                </a>
                            </h3>
                            <div class="service-thumb">
                               <img src="{{ asset('assets/img/service/05.png') }}" alt="service-img">
                                <div class="line-shape">
                                   <img src="{{ asset('assets/img/service/line.png') }}" alt="shape-img">
                                </div>
                            </div>
                            <a class="link-btn" href="{{ route('serviceDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="service-card-items">
                            <div class="icon">
                                <i class="flaticon-database"></i>
                            </div>
                            <h3>
                                <a href="{{ route('serviceDetails') }}">
                                    IT Management
                                    Machine Learning
                                </a>
                            </h3>
                            <div class="service-thumb">
                               <img src="{{ asset('assets/img/service/06.png') }}" alt="service-img">
                                <div class="line-shape">
                                   <img src="{{ asset('assets/img/service/line.png') }}" alt="shape-img">
                                </div>
                            </div>
                            <a class="link-btn" href="{{ route('serviceDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="service-card-items">
                            <div class="icon">
                                <i class="flaticon-design-thinking"></i>
                            </div>
                            <h3>
                                <a href="{{ route('serviceDetails') }}">
                                    Digital Product 
                                    UI/UX Design
                                </a>
                            </h3>
                            <div class="service-thumb">
                               <img src="{{ asset('assets/img/service/07.png') }}" alt="service-img">
                                <div class="line-shape">
                                   <img src="{{ asset('assets/img/service/line.png') }}" alt="shape-img">
                                </div>
                            </div>
                            <a class="link-btn" href="{{ route('serviceDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Video Section Start -->
        <div class="cta-video-section fix bg-cover" style="background-image: url('{{ asset('assets/img/cta/cta-video.jpg') }}')">
            <div class="container">
                <div class="cta-video-wrapper">
                    <div class="video-box">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton ripple video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="marquee-wrapper text-slider">
                <div class="marquee-inner to-left">
                    <ul class="marqee-list d-flex">
                        <li class="marquee-item">
                            <span class="text-slider">IT</span><span class="text-slider">Consulting </span><span class="text-slider style-border"></span>   
                            <span class="text-slider">Co</span><span class="text-slider">Machine </span><span class="text-slider style-border"></span><span class="text-slider">IT</span><span class="text-slider">Learning </span><span class="text-slider style-border"></span><span class="text-slider">Web </span><span class="text-slider">Development</span>
                            <span class="text-slider">IT</span><span class="text-slider">Consulting </span><span class="text-slider style-border"></span>   
                            <span class="text-slider">Co</span><span class="text-slider">Machine </span><span class="text-slider style-border"></span><span class="text-slider">IT</span><span class="text-slider">Learning </span><span class="text-slider style-border"></span><span class="text-slider">Web </span><span class="text-slider">Development</span>
                            <span class="text-slider">IT</span><span class="text-slider">Consulting </span><span class="text-slider style-border"></span>   
                            <span class="text-slider">Co</span><span class="text-slider">Machine </span><span class="text-slider style-border"></span><span class="text-slider">IT</span><span class="text-slider">Learning </span><span class="text-slider style-border"></span><span class="text-slider">Web </span><span class="text-slider">Development</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Team Section Start -->
        <section class="team-section fix section-padding">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="sub-content wow fadeInUp">
                               <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                Team Member
                            </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Meet Our Professional <br>
                                Team Members
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Sed ut perspiciatis unde omnis iste natus error sit volupta temes <br> accusantium doloremque laudantium, totam rem
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/01.jpg') }}" alt="img">
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Robert E. Whitmore</a></h4>
                                <p>Product Designer</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="far fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/02.jpg') }}" alt="img">
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Johnny M. Smith</a></h4>
                                <p>IT Consultant</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="far fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/03.jpg') }}" alt="img">
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Angelo H. Tomlin</a></h4>
                                <p>Senior Manager</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="far fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/04.jpg') }}" alt="img">
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Robert E. Whitmore</a></h4>
                                <p>Web Designer</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="far fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/05.jpg') }}" alt="img">
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Manuel G. Wilmer</a></h4>
                                <p>CEO & Founder</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="far fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5 wow fadeInUp" data-wow-delay=".8s">
                        <a href="{{ route('team') }}" class="theme-btn">
                            View More Members
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funfact Section Start -->
        <section class="funfact-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Company Fun Fact
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Learn Our Company Statistics 
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="funfact-box-items">
                            <h2><span class="count">98</span>%</h2>
                            <h6>Average Conversion Rate</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="funfact-box-items active">
                            <h2><span class="count">35</span>m+</h2>
                            <h6>Traffic Generated</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="funfact-box-items">
                            <h2><span class="count">97</span>%</h2>
                            <h6>Positive Customer Review</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="funfact-box-items">
                            <h2><span class="count">92</span>%</h2>
                            <h6>Professional Team Members</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Popular Case Study Section Start -->
        <section class="case-study-section fix section-padding theme-bg">
            <div class="left-shape">
               <img src="{{ asset('assets/img/case-study/left-shape.png') }}" alt="shape-img">
            </div>
            <div class="right-shape">
               <img src="{{ asset('assets/img/case-study/right-shape.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="sub-content wow fadeInUp">
                           <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                            Popular Case Study
                        </span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                            Discover Our Popular Case Study <br> That We Globally Completes
                        </h2>
                    </div>
                    <a href="{{ route('project') }}" class="theme-btn white-border">View More Cases</a>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="case-study-items">
                            <div class="thumb">
                               <img src="{{ asset('assets/img/case-study/01.jpg') }}" alt="img">
                            </div>
                            <div class="content">
                                <p>IT Consulting</p>
                                <h3>
                                    <a href="#">
                                        How to achieve more with your 
                                        nine to five
                                    </a>
                                </h3>
                                <a class="arrow-btn" href="#"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="case-study-items">
                            <div class="thumb">
                               <img src="{{ asset('assets/img/case-study/02.jpg') }}" alt="img">
                            </div>
                            <div class="content">
                                <p>Machine Learning</p>
                                <h3>
                                    <a href="#">
                                        Strategies for outstanding future results
                                    </a>
                                </h3>
                                <a class="arrow-btn" href="#"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="case-study-items">
                            <div class="thumb">
                               <img src="{{ asset('assets/img/case-study/03.jpg') }}" alt="img">
                            </div>
                            <div class="content">
                                <p>Software Design</p>
                                <h3>
                                    <a href="#">
                                        Discover a better way of system
                                        defining company goals.
                                    </a>
                                </h3>
                                <a class="arrow-btn" href="#"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section Start -->
        <x-pricing/>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section fix section-padding pt-0">
            <div class="container">
                <div class="testimonial-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="testimonial-image">
                               <img src="{{ asset('assets/img/testimonial/testimonial.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-7 ps-lg-5">
                            <div class="swiper testimonial-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <p>
                                                We denounce with right indignation dislike men who are 
                                                so beguile and demoralized by the charms of pleasure of the
                                                moment, so blinded by desire cannot foresee
                                            </p>
                                            <div class="author-items">
                                                <div class="author-image">
                                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                                    <div class="content">
                                                        <h5>Lucas J. Swe / <span>CO Founder</span></h5>
                                                    </div>
                                                </div>
                                               <img src="{{ asset('assets/img/testimonial/icon.png') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <p>
                                                We denounce with right indignation dislike men who are 
                                                so beguile and demoralized by the charms of pleasure of the
                                                moment, so blinded by desire cannot foresee
                                            </p>
                                            <div class="author-items">
                                                <div class="author-image">
                                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                                    <div class="content">
                                                        <h5>Lucas J. Swe / <span>CO Founder</span></h5>
                                                    </div>
                                                </div>
                                               <img src="{{ asset('assets/img/testimonial/icon.png') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <p>
                                                We denounce with right indignation dislike men who are 
                                                so beguile and demoralized by the charms of pleasure of the
                                                moment, so blinded by desire cannot foresee
                                            </p>
                                            <div class="author-items">
                                                <div class="author-image">
                                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                                    <div class="content">
                                                        <h5>Lucas J. Swe / <span>CO Founder</span></h5>
                                                    </div>
                                                </div>
                                               <img src="{{ asset('assets/img/testimonial/icon.png') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-content">
                                            <p>
                                                We denounce with right indignation dislike men who are 
                                                so beguile and demoralized by the charms of pleasure of the
                                                moment, so blinded by desire cannot foresee
                                            </p>
                                            <div class="author-items">
                                                <div class="author-image">
                                                   <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                                    <div class="content">
                                                        <h5>Lucas J. Swe / <span>CO Founder</span></h5>
                                                    </div>
                                                </div>
                                               <img src="{{ asset('assets/img/testimonial/icon.png') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-dot pt-5 ps-1">
                                    <div class="dot"></div>
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
                        <div class="news-box-items">
                            <div class="news-content">
                                <p>November 25, 2024</p>
                                <h4><a href="{{ route('newsDetails') }}">Revealing Images With  Animations Gradients, Blend Modes Cool</a></h4>
                                <a class="link-btn" href="{{ route('newsDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/news/01.jpg') }}')"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-box-items">
                            <div class="news-content">
                                <p>November 25, 2024</p>
                                <h4><a href="{{ route('newsDetails') }}">List of 5 ways Generating Real Time Audio Sentiment Analysis</a></h4>
                                <a class="link-btn" href="{{ route('newsDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/news/02.jpg') }}')"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-box-items">
                            <div class="news-content">
                                <p>November 25, 2024</p>
                                <h4><a href="{{ route('newsDetails') }}">Revealing Images With  Animations Gradients, Blend Modes Cool</a></h4>
                                <a class="link-btn" href="{{ route('newsDetails') }}">Read More<i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/news/03.jpg') }}')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection