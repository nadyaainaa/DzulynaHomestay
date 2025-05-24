@extends('layout.layout')

@php
     $bodyClass = 'home-5-body-color';
     $header = 'false';
     $breadcrumb = 'false';
     $footer='false';
@endphp

@section('content')
       
        <!-- Header Area Start -->
        <header id="header-sticky" class="header-6">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="sticky-logo">
                            <a href="{{ route('index') }}" class="logo-1">
                               <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img">
                            </a>
                            <a href="{{ route('index') }}" class="logo-2">
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
                                                <a href="#about">About</a>
                                            </li>
                                            <li>
                                                <a href="#service">Services</a>
                                            </li>
                                            <li>
                                                <a href="#project">projects</a>
                                            </li>
                                            <li>
                                                <a href="#contact">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
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
        <section class="hero-section hero-5">
            <div class="container">
               <div class="row g-4 align-items-center justify-content-between align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="hero-content">
                            <span class="sub-content wow fadeInUp" data-wow-delay=".2s">
                               <img src="{{ asset('assets/img/bale-2.png') }}" alt="img">
                                <span class="sub-text">Hello, I’m Mitchell E. Burke </span>
                            </span>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                <span>Experience Digital</span>
                                Product Designer
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Sed ut perspiciatis unde omnis iste natus voluptatem accusantium <br>
                                doloremque laudantium, totam rem aperiam
                            </p>
                            <div class="button-items">
                                <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                                    <a href="{{ route('about') }}" class="theme-btn">
                                        Hire Me
                                        <i class="fas fa-long-arrow-right"></i>
                                    </a>
                                </div>
                                <span class="button-text wow fadeInUp" data-wow-delay=".5s">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <span class="ms-3 d-line"></span>
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="play-text video-popup">Watch IT Video</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                       <div class="hero-image">
                          <img src="{{ asset('assets/img/home-5/hero/01.png') }}" alt="img">
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
                       </div>
                    </div>
               </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-section-3 fix section-border section-border-2 pt-4 pb-4">
            <div class="container">
                <div class="brand-list">
                    <div class="swiper brand-list-slider">
                        <div class="swiper-wrapper mt-slide-transtion">
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_3021)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_302">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Web Designer
                                </div>
                            </div>
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_3022)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_30211">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Mobile Apps Design
                                </div>
                            </div>
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_3023)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_30222">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Dashboard Design
                                </div>
                            </div>
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_3024)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_30233">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Digital Marketing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section Start -->
        <section class="about-section section-padding" id="about">
            <div class="container">
                <div class="about-wrapper-3">
                    <div class="about-image-1 wow fadeInUp" data-wow-delay=".3s">
                       <img src="{{ asset('assets/img/home-5/about/01.png') }}" alt="img">
                    </div>
                    <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                       <img src="{{ asset('assets/img/home-5/about/02.png') }}" alt="img">
                        <div class="icon-box">
                           <img src="{{ asset('assets/img/home-5/about/trophy.png') }}" alt="img" class="icon-img">
                            <div class="circle-text">
                               <img src="{{ asset('assets/img/home-5/about/circle-text.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="about-content-2 text-center">
                        <div class="section-title text-center">
                            <span class="sec-sub-text wow fadeInUp">About Me</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                We Solve Your Business <br>
                                problem by  Design
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo emo enim ipsam 
                        </p>
                        <a href="{{ route('about') }}" class="theme-btn wow fadeInUp" data-wow-delay=".4s">Learn More Us <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Experience Section Start -->
        <section class="education-experience section-border section-padding">
            <div class="container">
                <div class="section-title">
                    <span class="sec-sub-text wow fadeInUp">Resume</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Education & Experience</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="education-box-items">
                            <div class="icon">
                               <img src="{{ asset('assets/img/home-5/edu-icon.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <span>2020 - Present</span>
                                <h3>Framer Designer & Developer</h3>
                                <p>Google Agency</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="education-box-items">
                            <div class="icon">
                               <img src="{{ asset('assets/img/home-5/edu-icon.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <span>2018 - 2020</span>
                                <h3>Front-End WordPress Developer</h3>
                                <p>Amazon Agency</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="education-box-items">
                            <div class="icon">
                               <img src="{{ asset('assets/img/home-5/edu-icon.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <span>2014 - 2017</span>
                                <h3>Webflow Developer & Co-Founder</h3>
                                <p>XZS Agency</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="education-box-items">
                            <div class="icon">
                               <img src="{{ asset('assets/img/home-5/edu-icon.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <span>2010 - 2013</span>
                                <h3>Leader Team of Marketing</h3>
                                <p>Pixel Agency</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Video Section Start -->
        <div class="cta-video-section cta-video-2 fix bg-cover" style="background-image: url('{{ asset('assets/img/home-5/cta-video.jpg') }}')">
            <div class="container">
                <div class="cta-video-wrapper style-2">
                    <div class="video-box">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton ripple video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Section Start -->
        <section class="service-section fix section-padding" id="service">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text wow fadeInUp">Popular Service</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Explore Our Popular Services</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="service-popular-image-2">
                            <img id="myImage2" src="{{ asset('assets/img/home-5/service/01.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="service-popular-content-2">
                            <div class="service-content">
                                <div class="icon">
                                    <i class="flaticon-curve"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('serviceDetails') }}" class="changeImage2 clicked" data-image="assets/img/home-5/service/01.png') }}">Website Design</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste</p>
                                </div>
                            </div>
                            <a href="{{ route('serviceDetails') }}" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="service-popular-content-2">
                            <div class="service-content">
                                <div class="icon">
                                    <i class="flaticon-megaphone"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('serviceDetails') }}" class="changeImage2 clicked" data-image="assets/img/home-5/service/01.png') }}">Digital Marketing</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste</p>
                                </div>
                            </div>
                            <a href="{{ route('serviceDetails') }}" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="service-popular-content-2">
                            <div class="service-content">
                                <div class="icon">
                                    <i class="flaticon-coding"></i> 
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('serviceDetails') }}" class="changeImage2 clicked" data-image="assets/img/home-5/service/01.png') }}">Web Development</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste</p>
                                </div>
                            </div>
                            <a href="{{ route('serviceDetails') }}" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                        </div>
                        <div class="service-popular-content-2">
                            <div class="service-content">
                                <div class="icon">
                                    <i class="flaticon-price-tag"></i>
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('serviceDetails') }}" class="changeImage2 clicked" data-image="assets/img/home-5/service/01.png') }}">Design & Branding</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste</p>
                                </div>
                            </div>
                            <a href="{{ route('serviceDetails') }}" class="arrow-icon"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skill Section Start -->
        <section class="skill-section fix section-padding pt-0">
            <div class="section-title text-center">
                <span class="sec-sub-text wow fadeInUp">My Skills</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Skills What I’m Experiences</h2>
            </div>
            <div class="skill-wrapper">
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".2s">
                   <img src="{{ asset('assets/img/home-5/skills/figma.png') }}" alt="img">
                    <div class="post-cat">
                        95%
                    </div>
                </div>
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".4s">
                   <img src="{{ asset('assets/img/home-5/skills/framerpng.png') }}" alt="img">
                    <div class="post-cat">
                        35%
                    </div>
                </div>
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                   <img src="{{ asset('assets/img/home-5/skills/webflow.png') }}" alt="img">
                    <div class="post-cat">
                        83%
                    </div>
                </div>
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".6s">
                   <img src="{{ asset('assets/img/home-5/skills/sketch.png') }}" alt="img">
                    <div class="post-cat">
                        98%
                    </div>
                </div>
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".7s">
                   <img src="{{ asset('assets/img/home-5/skills/python.png') }}" alt="img">
                    <div class="post-cat">
                       48%
                    </div>
                </div>
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".8s">
                   <img src="{{ asset('assets/img/home-5/skills/angular.png') }}" alt="img">
                    <div class="post-cat">
                        47%
                    </div>
                </div>
                <div class="skill-box-items wow fadeInUp" data-wow-delay=".9s">
                   <img src="{{ asset('assets/img/home-5/skills/photoshop.png') }}" alt="img">
                    <div class="post-cat">
                        95%
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Section Start -->
        <section class="project-section fix section-padding pt-0" id="project">
            <div class="container">
                <div class="section-title text-center">
                    <sub class="sec-sub-text">Work Gallery</sub>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Explore Featured Projects
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items style-2">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/05.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Product Design</p>
                                        <h3>
                                            <a href="{{ route('projectDetails') }}">
                                                Business Task Management <br>
                                                Dashboard Design 
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="project-card-items style-2">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/06.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Website Design</p>
                                        <h3>
                                            <a href="{{ route('projectDetails') }}">
                                                Business Consulting Web <br>
                                                Explorations Design
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items style-2">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/07.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Product Design</p>
                                        <h3>
                                            <a href="{{ route('projectDetails') }}">
                                                Mobile Applications Design
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="project-card-items style-2">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/08.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Website Design</p>
                                        <h3>
                                            <a href="{{ route('projectDetails') }}">
                                                Furniture Website Design
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-button text-center mt-5 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ route('project') }}" class="theme-btn">View More Projects <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-section-3 fix section-border section-border-2 pt-4 pb-4">
            <div class="container">
                <div class="brand-list">
                    <div class="swiper brand-list-slider">
                        <div class="swiper-wrapper mt-slide-transtion">
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_302)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_3021111">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Web Designer
                                </div>
                            </div>
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_302)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_3022222">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Mobile Apps Design
                                </div>
                            </div>
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_302)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_3023333">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Dashboard Design
                                </div>
                            </div>
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_302)">
                                          <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_67_3024444">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Digital Marketing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Section Start -->
        <section class="pricing-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text wow fadeInUp">Pricing Package</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Popular Pricing For IT Consulting
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-card-items style-2">
                            <div class="pricing-shape">
                               <img src="{{ asset('assets/img/pricing-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="pricing-header">
                                <h3>Regular Plan</h3>
                                <p>For Small Businesses</p>
                            </div>
                            <ul class="pricing-list">
                                <li>
                                    IT Consulting
                                </li>
                                <li>
                                    Digital Product Design
                                </li>
                                <li>
                                    Machine Learning
                                </li>
                                <li class="style-2">
                                    Automation templates
                                </li>
                                <li class="style-2">
                                    Great Customer Support
                                </li>
                            </ul>
                            <div class="pricing-bottom">
                                <h2>$19 <span>/month</span></h2>
                                <p>For Small Businesses</p>
                            </div>
                            <div class="pricing-button">
                                <a href="{{ route('contact') }}" class="theme-btn style-transparent">Choose Package</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="pricing-card-items style-2 active">
                            <div class="pricing-shape">
                               <img src="{{ asset('assets/img/pricing-shape-2.png') }}" alt="shape-img">
                            </div>
                            <div class="pricing-header">
                                <h3>Business Plan</h3>
                                <p>For Small Businesses</p>
                            </div>
                            <ul class="pricing-list">
                                <li>
                                    IT Consulting
                                </li>
                                <li>
                                    Digital Product Design
                                </li>
                                <li>
                                    Machine Learning
                                </li>
                                <li>
                                    Automation templates
                                </li>
                                <li>
                                    Great Customer Support
                                </li>
                            </ul>
                            <div class="pricing-bottom">
                                <h2>$53 <span>/month</span></h2>
                                <p>For Small Businesses</p>
                            </div>
                            <div class="pricing-button">
                                <a href="{{ route('contact') }}" class="theme-btn style-transparent">Choose Package</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="pricing-card-items style-2">
                            <div class="pricing-shape">
                               <img src="{{ asset('assets/img/pricing-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="pricing-header">
                                <h3>Professional Plan</h3>
                                <p>For Small Businesses</p>
                            </div>
                            <ul class="pricing-list">
                                <li>
                                    IT Consulting
                                </li>
                                <li>
                                    Digital Product Design
                                </li>
                                <li>
                                    Machine Learning
                                </li>
                                <li class="style-2">
                                    Automation templates
                                </li>
                                <li class="style-2">
                                    Great Customer Support
                                </li>
                            </ul>
                            <div class="pricing-bottom">
                                <h2>$99 <span>/month</span></h2>
                                <p>For Small Businesses</p>
                            </div>
                            <div class="pricing-button">
                                <a href="{{ route('contact') }}" class="theme-btn style-transparent">Choose Package</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-5 fix section-padding fix pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text">Clients Feedback</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".5s">
                        We’ve 1250+ Global Clients Say Us
                    </h2>
                </div>
            </div>
            <div class="swiper testimonial-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items style-2">
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
                        <div class="testimonial-card-items style-2">
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
                        <div class="testimonial-card-items style-2">
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
                        <div class="testimonial-card-items style-2">
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

        <!-- Contact Section Section Start -->
        <section class="contact-section section-padding pt-0" id="contact">
            <div class="container">
                <div class="contact-wrapper style-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="contact-image">
                               <img src="{{ asset('assets/img/home-5/contact.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-right">
                               <div class="section-title">
                                    <span class="sec-sub-text wow fadeInUp">Contact Me</span>
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                        Have Any Project On Minds! <br>
                                        Let’s Work Together
                                    </h2>
                               </div>
                                <form action="#" id="contact-form" method="POST" class="contact-form-items mt-4 mt-md-0">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <button type="submit" class="theme-btn">
                                                Send a Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Global Partner Section Start -->
        <div class="global-partner fix section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub-text wow fadeInUp">Global Partners</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        We’ve 1253+ Global Partners, <br>
                        Meet Our Clients
                    </h2>
                </div>
                <div class="global-partner-wrapper">
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".2s">
                       <img src="{{ asset('assets/img/home-5/global/01.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".4s">
                       <img src="{{ asset('assets/img/home-5/global/02.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".6s">
                       <img src="{{ asset('assets/img/home-5/global/03.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".7s">
                       <img src="{{ asset('assets/img/home-5/global/04.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".8s">
                       <img src="{{ asset('assets/img/home-5/global/05.png') }}" alt="img">
                    </div>
                </div>
                <div class="global-partner-wrapper">
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".2s">
                       <img src="{{ asset('assets/img/home-5/global/06.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".4s">
                       <img src="{{ asset('assets/img/home-5/global/07.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".6s">
                       <img src="{{ asset('assets/img/home-5/global/08.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".7s">
                       <img src="{{ asset('assets/img/home-5/global/09.png') }}" alt="img">
                    </div>
                    <div class="global-thumb wow fadeInUp" data-wow-delay=".8s">
                       <img src="{{ asset('assets/img/home-5/global/10.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section Start -->
        <footer class="footer-section fix footer-bg-2">
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