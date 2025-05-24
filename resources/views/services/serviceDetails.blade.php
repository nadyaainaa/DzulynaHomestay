@extends('layout.layout')

@php
    $title = 'Social Media Marketing';
    $subTitle='Home';
    $subTitle2='Social Media Marketing';
@endphp

@section('content')

        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-4 align-items-center justify-content-between">
                        <div class="col-lg-5">
                            <div class="about-content ms-0">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        Problem Solutions
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
                                <div class="about-button mt-5 wow fadeInUp" data-wow-delay=".5s">
                                    <a href="{{ route('about') }}" class="theme-btn">
                                        Learn More Us
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-image-items-4">
                                <div class="experience-items">
                                    <h6>
                                        Trusted by 1M+ people <br>
                                        around the globe
                                    </h6>
                                   <img src="{{ asset('assets/img/about/face-mans.png') }}" alt="img">
                                    <h2><span class="count">25</span>+</h2>
                                    <p>Years Of Experience</p>
                                </div>
                                <div class="row g-4 align-items-center">
                                    <div class="col-lg-6">
                                        <div class="row g-4">
                                            <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="about-thumbs">
                                                   <img src="{{ asset('assets/img/about/07.jpg') }}" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-md-12 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="about-thumbs">
                                                   <img src="{{ asset('assets/img/about/08.jpg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="about-thumbs">
                                           <img src="{{ asset('assets/img/about/09.jpg') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Video Section Start -->
        <section class="service-video-section fix section-padding">
            <div class="container">
                <div class="service-video-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                            <div class="service-video-image">
                               <img src="{{ asset('assets/img/service/service-video.jpg') }}" alt="img">
                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton ripple video-popup">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <ul class="experience-text wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s;">
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
                        <div class="col-lg-5">
                            <div class="content">
                                <div class="section-title mb-0">
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Better Solutions Create
                                        your life more easier
                                    </h2>
                                </div>
                                <p class="mt-3 wow fadeInUp" data-wow-delay=".5s">
                                    Sed perspiciatis unde omnis natus voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam eaque
                                </p>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <h5>
                                        <i class="fas fa-check-circle"></i>
                                        Easy write and test more copy varistions
                                    </h5>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
                                    </p>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                    <h5>
                                        <i class="fas fa-check-circle"></i>
                                        One Click Management & Custom Greeting
                                    </h5>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
                                    </p>
                                </div>
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
        
        <!-- Grow Business Section Start -->
        <section class="grow-business-section fix section-padding footer-bg">
            <div class="container">
                <div class="grow-business-wrapper style-2">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="grow-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        Grow your Business
                                    </span>
                                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
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
                        <div class="col-lg-6">
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
                                <div class="grow-image wow fadeInUp" data-wow-delay=".3s">
                                   <img src="{{ asset('assets/img/grow/01.jpg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section Start -->
         <x-pricing/>

        <!-- Cta Marketing Section Start -->
        <section class="cta-marketing-section fix section-padding pt-0">
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

@endsection