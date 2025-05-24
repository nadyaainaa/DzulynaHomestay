@extends('layout.layout')

@php
    $title = 'Popular Services';
    $subTitle='Home';
    $subTitle2='Our Services';
@endphp

@section('content')

        <!-- Grow Business Section Start -->
        <section class="grow-business-section fix section-padding">
            <div class="container">
                <div class="grow-business-wrapper-2">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-5">
                            <div class="grow-business-image">
                               <img src="{{ asset('assets/img/grow/02.jpg') }}" alt="img" class="wow fadeInUp" data-wow-delay=".3s">
                                <div class="grap-shape wow fadeInLeft" data-wow-delay=".5s">
                                   <img src="{{ asset('assets/img/grow/grap.png') }}" alt="shape-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="grow-business-content">
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
                                <div class="grow-counting-area">
                                    <div class="grow-counting-items wow fadeInUp" data-wow-delay=".3s">
                                        <h2><span class="count">85</span>%</h2>
                                        <p>Increase Sales</p>
                                    </div>
                                    <div class="grow-counting-items wow fadeInUp" data-wow-delay=".5s">
                                        <h2><span class="count">15</span>%</h2>
                                        <p>Reduced Losses</p>
                                    </div>
                                    <div class="grow-counting-items wow fadeInUp" data-wow-delay=".7s">
                                        <h2><span class="count">93</span>%</h2>
                                        <p>Business growth</p>
                                    </div>
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

        <!-- Service Section Start -->
        <section class="service-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Core Features
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

@endsection