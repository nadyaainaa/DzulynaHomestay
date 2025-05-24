<footer class="footer-section footer-bg">
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
                                            <h4><a href="'tel:00012345688">+000 (123) 456 88</a></h4>
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