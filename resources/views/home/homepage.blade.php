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
                                                <ul class="submenu">
                                                    <li><a href="{{ route('house1', ['id' => 1]) }}">House 1 : Teluk Intan</a></li>
                                                    <li><a href="{{ route('service') }}">House 2 : Bagan Datuk </a></li>
                                                    <li><a href="{{ route('service') }}">House 3 : Sg.Tiang</a></li>
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
                            @if(Auth::check())
                                <!-- If user is logged in -->
                                <div class="dropdown">
                                    <button class="theme-btn bg-2 dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hi, {{ Auth::user()->name }}
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">View Profile</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Sign Out</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <!-- If user is NOT logged in -->
                                <div class="header-button">
                                    <a href="{{ route('login') }}" class="theme-btn bg-2">Sign In</a>
                                </div>
                            @endif
                        
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

        <!-- News Section Start -->
        <section class="news-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                       Homestay Location
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                       List of Homestay Available
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items style-2">
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/house/h1.jpg') }}')"></div>
                            <div class="news-content">
                                <p>Homestay 1</p>
                                <h4>
                                   <a href="{{ route('house1') }}">
                                       Teluk Intan
                                    </a>
                                </h4>
                                <a class="link-btn" href="{{ route('house1') }}">View Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items style-2">
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/house/j1.jpg') }}')"></div>
                            <div class="news-content">
                                <p>Homestay 2</p>
                                <h4>
                                    <a href="{{ route('house2') }}">
                                        Bagan Datuk
                                    </a>
                                </h4>
                                <a class="link-btn" href="{{ route('house2') }}">View Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-card-items style-2">
                            <div class="news-image bg-cover" style="background-image: url('{{ asset('assets/img/house/k1.jpg') }}')"></div>
                            <div class="news-content">
                                <p>Homestay 3</p>
                                <h4>
                                    <a href="{{ route('house3') }}">
                                        Sg.Tiang
                                    </a>
                                </h4>
                                <a class="link-btn" href="{{ route('house3') }}">View Details<i class="far fa-arrow-right"></i></a>
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
                        Feedback
                    </span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                     All customers feedback after Booking with Us
                    </h2>
                </div>
            </div>
            <div class="swiper testimonial-slider-4">
                <div class="swiper-wrapper">
                    @foreach($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonial-box-items">
                                <div class="testimonial-content">
                                    <div class="author-image">
                                        <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                        <div class="content">
                                            <h5>{{ $review->user->name ?? 'Anonymous' }}
                                                <span>/ {{ \Carbon\Carbon::parse($review->created_at)->format('d-m') }}</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <p>{{ $review->comment }}</p>
                                    <div class="star text-warning">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= (int) $review->rating)
                                                <i class="fas fa-star"></i> {{-- Solid filled star --}}
                                            @else
                                                <i class="far fa-star"></i> {{-- Regular empty star --}}
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper testimonial-slider-5">
                <div class="swiper-wrapper">
                    @foreach($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonial-box-items">
                                <div class="testimonial-content">
                                    <div class="author-image">
                                        <img src="{{ asset('assets/img/testimonial/client.png') }}" alt="author-img">
                                        <div class="content">
                                            <h5>{{ $review->user->name ?? 'Anonymous' }}
                                                <span>/ {{ \Carbon\Carbon::parse($review->created_at)->format('d-m') }}</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <p>{{ $review->comment }}</p>
                                    <div class="star text-warning">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= (int) $review->rating)
                                                <i class="fas fa-star"></i> {{-- Solid filled star --}}
                                            @else
                                                <i class="far fa-star"></i> {{-- Regular empty star --}}
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                               <img src="{{ asset('assets/img/house/h5.jpg') }}" alt="img">
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                                        About Homestay
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Comfortable homestay with service you can trust
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Managed by an experienced team for your comfort.
                                </p>
                                <ul class="about-list style-2 wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Experience and Friendly
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Peaceful Stay
                                    </li>
                                </ul>
                                <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                    <a href="https://www.facebook.com/profile.php?id=100091556442878" class="theme-btn bg-2">View FB Page  <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="{{ route('index') }}">
                                        <h4>Dzulyna Homestay</h4>
                                       {{-- <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img"> --}}
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        DzuLyna Homestay menyediakan kemudahan penginapan yang selesa pada harga yang berpatutan
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Homestay Location</h4>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="{{ route('serviceDetails') }}"> 
                                            Teluk Intan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('teamDetails') }}"> 
                                            Bagan Datuk
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}"> 
                                            Sg.Tiang
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h4>Info</h4>
                                </div>
                                <div class="contact-info-area">
                                    <div class="contact-items color-style-2">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <p>
                                                No 21, Lorong 14, <br>
                                                Taman Lagenda, 36000 Teluk Intan, <br>
                                                Teluk Intan, Malaysia
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-items color-style-2">
                                        <div class="icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                        <div class="content">
                                            <a href="https://www.facebook.com/profile.php?id=100091556442878" class="link">Dzulyna Facebook Page</a>
                                        </div>
                                    </div>
                                    <div class="contact-items color-style-2"> 
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h4><a href="tel:019-551 6935">+6019-551 6935</a></h4>
                                        </div>
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
                            <p>
                                © <a href="{{ route('index') }}">2025</a> All Rights Reserved
                            </p>
                        </ul>
                        <a href="#" id="scrollUp" class="scroll-icon">
                            <i class="far fa-angle-double-up"></i>
                        </a>
                        {{-- <p>
                            © <a href="{{ route('index') }}">2024</a> All Rights Reserved
                        </p> --}}
                    </div>
                </div>
            </div>
        </footer>
 <script>
  document.getElementById('openChatbot').addEventListener('click', function () {
    window.botpressWebChat.sendEvent({ type: "show" });
  });
</script>
@endsection