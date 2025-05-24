@extends('layout.layout')

@php
    $title = 'About Company';
    $subTitle='Home';
    $subTitle2='About Company';
@endphp

@section('content')

        <!-- About Section Start -->
        <section class="about-section fix section-padding pb-0">
            <div class="container">
                <div class="about-wrapper style-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-content ms-0 style-about">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        About Company
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        We Increase Your Website
                                        Lead and Grow Sales
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                </p>
                               <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4>Superior Quality Of Work</h4>
                                        <p>Our attention to detail and quality is unmatched in the industry. <br> We’re not just a resource provider but also a key</p>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                           <div class="about-image-3">
                               <img src="{{ asset('assets/img/about/05.jpg') }}" alt="img">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section Start -->
        <section class="about-section fix section-padding pt-80">
            <div class="container">
                <div class="about-wrapper style-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow  fadeInUp" data-wow-delay=".3s">
                           <div class="about-image-3">
                               <img src="{{ asset('assets/img/about/06.jpg') }}" alt="img">
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">Flexible Scaling & Support</h4>
                                <p class="mt-3 wow fadeInUp" data-wow-delay=".5s">
                                    In the early years, our dedicated team worked tirelessly to key Next milestones or achievements, such as product launches, partnerships or expansions these efforts laid the foundation
                                </p>
                               <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="dot"></div>
                                    <div class="content">
                                        <h4>Flexible Scaling & Support</h4>
                                        <p>Our attention to detail and quality is unmatched in the industry. <br> We’re not just a resource provider but also a key</p>
                                    </div>
                               </div>
                               <a href="{{ route('about') }}" class="theme-btn mt-50 wow fadeInUp" data-wow-delay=".5s">
                                     Learn More Us
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section fix footer-bg section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Team Member
                    </span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Meet Our Professional Team Members
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-card-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/06.jpg') }}" alt="team-img">
                                <div class="icon-list">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Eduardo D. Howard</a></h4>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-card-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/07.jpg') }}" alt="team-img">
                                <div class="icon-list">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Jeremiah D. Marshall</a></h4>
                                <p>Business Consultant</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-card-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/08.jpg') }}" alt="team-img">
                                <div class="icon-list">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Jeremy B. Forsberg</a></h4>
                                <p>Senior Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-card-items">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/09.jpg') }}" alt="team-img">
                                <div class="icon-list">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4><a href="{{ route('teamDetails') }}">Duane V. McCormick</a></h4>
                                <p>Junior Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funfact Section Start -->
        <section class="funfact-section-2 section-padding pt-0">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="funfact-box-items mt-0 style-2">
                            <h2><span class="count">98</span>%</h2>
                            <h6>Average Conversion Rate</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="funfact-box-items active mt-0 style-2">
                            <h2><span class="count">35</span>m+</h2>
                            <h6>Traffic Generated</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="funfact-box-items mt-0 style-2">
                            <h2><span class="count">97</span>%</h2>
                            <h6>Positive Customer Review</h6>
                            <p>
                                Sed perspiciatis unde omnis
                                este natus sit volupta
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="funfact-box-items mt-0 style-2">
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

        <!-- Working Process Section Start -->
        <section class="working-process-section section-padding">
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
                <div class="work-process-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="work-process-content">
                                <div class="work-process-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="digit-box">01</div>
                                    <h4>Market Research</h4>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea
                                        voluptate velit esse quam nihil molestiae
                                    </p>
                                </div>
                                <div class="work-process-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="digit-box">02</div>
                                    <h4>Process and Analysis</h4>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea
                                        voluptate velit esse quam nihil molestiae
                                    </p>
                                </div>
                                <div class="work-process-items wow fadeInUp" data-wow-delay=".7s">
                                    <div class="digit-box">03</div>
                                    <h4>Successful Project</h4>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea
                                        voluptate velit esse quam nihil molestiae
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="work-process-image wow fadeInUp" data-wow-delay=".4s">
                               <img src="{{ asset('assets/img/business-mens-grsl.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <section class="brand-section-2 mt-0 mb-0 fix section-padding pt-0">
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

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-2 fix section-padding fix">
            <div class="bg-shape">
               <img src="{{ asset('assets/img/testimonial/bg-shape.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Clients Feedback
                    </span>
                    <h2>
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

@endsection