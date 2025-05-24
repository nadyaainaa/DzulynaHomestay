@extends('layout.layout')

@php
    $title = 'Pricing Plan';
    $subTitle='Home';
    $subTitle2='Pricing Plan';
@endphp

@section('content')

        <!-- Pricing Section Start -->
        <section class="pricing-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Pricing Package
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Popular Pricing For IT Consulting
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-card-items">
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
                        <div class="pricing-card-items active">
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
                        <div class="pricing-card-items">
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

        <!-- Pricing Section Start -->
        <section class="pricing-section-2 fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Pricing Package
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        We Offer Amazing Pricing Package <br>
                        keep Under Budget
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
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
        <section class="testimonial-section fix section-padding">
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