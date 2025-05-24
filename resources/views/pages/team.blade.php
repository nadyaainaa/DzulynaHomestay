@extends('layout.layout')

@php
    $title = 'Team Member';
    $subTitle='Home';
    $subTitle2='Team Member';
@endphp

@section('content')

        <!-- About Team Section Start -->
        <section class="about-team-section fix section-padding">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="sub-content wow fadeInUp">
                           <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                            About The Team
                        </span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Passionate & Dedicated <br> Team Member to delivering <br>
                            exceptional results
                        </h2>
                    </div>
                    <div class="text-items">
                        <p class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                            Which revolutionized our industry. This forward-thinking approach allowed us <br>
                            to stay at the forefront of innovation and better serve
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            As technology evolved, so did we. In 1995, we embraced mention a significant <br> technological advancement or change], which revolutionized our industry. <br> This forward-thinking approach allowed us to stay at the forefront
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                           <img src="{{ asset('assets/img/team/about-img-1.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="about-image">
                           <img src="{{ asset('assets/img/team/about-img-2.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section-3 section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Team Member
                    </span>
                    <h2>
                        Meet Our Professional Team Members
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-card-items style-2">
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
                        <div class="team-card-items style-2">
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
                        <div class="team-card-items style-2">
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
                        <div class="team-card-items style-2">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-card-items style-2">
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
                                <h4><a href="{{ route('teamDetails') }}">James H. Richardson</a></h4>
                                <p>Digital Marketer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-card-items style-2">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/11.jpg') }}" alt="team-img">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-card-items style-2">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/12.jpg') }}" alt="team-img">
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
                                <h4><a href="{{ route('teamDetails') }}">Wayne D. Rodriguez</a></h4>
                                <p>JWeb Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-card-items style-2">
                            <div class="team-image">
                               <img src="{{ asset('assets/img/team/13.jpg') }}" alt="team-img">
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
                                <h4><a href="{{ route('teamDetails') }}">Theodore E. Johnson</a></h4>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        <!-- Testimonial Section Start -->
        <section class="testimonial-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center mb-0">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Clients Feedback
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        We’ve 1250+ Global Clients Say Us
                    </h2>
                </div>
                <div class="testimonial-wrapper pt-5">
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

@endsection