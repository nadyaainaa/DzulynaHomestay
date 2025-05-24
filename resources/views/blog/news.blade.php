@extends('layout.layout')

@php
    $title = 'Blog Standard';
    $subTitle='Home';
    $subTitle2='Blog Standard';
@endphp

@section('content')

         <!--<< Blog Wrapper Here >>-->
         <section class="blog-wrapper news-wrapper section-padding">
            <div class="container">
                <div class="news-area">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="blog-posts">
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-1.jpg') }}')">
            
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2>
                                            <a href="{{ route('newsDetails') }}">
                                                Achieving Fashion Elegant Design Runway Life
                                            </a>
                                         </h2>
                                         <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                            teration in some form, by injected humour, or randomised words which don't look even slight
                                            believable. If you are going to use a passage of Lorem Ipsum.
                                         </p>
                                         <a href="{{ route('newsDetails') }}" class="theme-btn mt-4 line-height">
                                            <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                                         </a>
                                    </div>
                                </div>
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-2.jpg') }}')">
                                       
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2>
                                            <a href="{{ route('newsDetails') }}">
                                                Achieving Fashion Elegant Design Runway Life
                                            </a>
                                         </h2>
                                         <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                            teration in some form, by injected humour, or randomised words which don't look even slight
                                            believable. If you are going to use a passage of Lorem Ipsum.
                                         </p>
                                         <a href="{{ route('newsDetails') }}" class="theme-btn mt-4 line-height">
                                            <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                                         </a>
                                    </div>
                                </div>
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-6.jpg') }}')">
                                        <div class="video-play-btn">
                                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-button ripple video-popup"><i class="fas fa-play"></i></a>                  
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2>
                                            <a href="{{ route('newsDetails') }}">
                                                Achieving Fashion Elegant Design Runway Life
                                            </a>
                                         </h2>
                                         <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                            teration in some form, by injected humour, or randomised words which don't look even slight
                                            believable. If you are going to use a passage of Lorem Ipsum.
                                         </p>
                                         <a href="{{ route('newsDetails') }}" class="theme-btn mt-4 line-height">
                                            <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                                         </a>
                                    </div>
                                </div>
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-3.jpg') }}')">
                                        
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2>
                                            <a href="{{ route('newsDetails') }}">
                                                Achieving Fashion Elegant Design Runway Life
                                            </a>
                                         </h2>
                                         <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                            teration in some form, by injected humour, or randomised words which don't look even slight
                                            believable. If you are going to use a passage of Lorem Ipsum.
                                         </p>
                                         <a href="{{ route('newsDetails') }}" class="theme-btn mt-4 line-height">
                                            <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                                         </a>
                                    </div>
                                </div>
                                <div class="single-blog-post quote-post format-quote">
                                    <div class="post-content text-white bg-cover">
                                        <div class="quote-content">
                                            <div class="icon">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="quote-text">
                                                <h2>Excepteur sint occaecat cupida tat non proident, sunt in.</h2>
                                                <div class="post-meta">
                                                    <span><i class="fal fa-comments"></i>35 Comments</span>
                                                    <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog-post">
                                    <div class="postbox-audio">
                                        <iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/316547873&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2>
                                            <a href="{{ route('newsDetails') }}">
                                                How to Remedy Tailbone Back Problems
                                            </a>
                                         </h2>
                                         <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                            teration in some form, by injected humour, or randomised words which don't look even slight
                                            believable. If you are going to use a passage of Lorem Ipsum.
                                         </p>
                                         <a href="{{ route('newsDetails') }}" class="theme-btn mt-4 line-height">
                                            <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                                         </a>
                                    </div>
                                </div>
                                <div class="single-blog-post">
                                    <div class="swiper blog-post-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-7.jpg') }}')">
                                                    
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-8.jpg') }}')">
                                                    
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="post-featured-thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/post-9.jpg') }}')">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="array-button">
                                            <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                                            <button class="array-next"><i class="far fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <span><i class="fal fa-comments"></i>35 Comments</span>
                                            <span><i class="fal fa-calendar-alt"></i>24th March 2024</span>
                                        </div>
                                        <h2>
                                            <a href="{{ route('newsDetails') }}">
                                                Achieving Fashion Elegant Design Runway Life
                                            </a>
                                         </h2>
                                         <p>
                                            There are many variations of passages of Lorem Ipsum available, but majority have suffered
                                            teration in some form, by injected humour, or randomised words which don't look even slight
                                            believable. If you are going to use a passage of Lorem Ipsum.
                                         </p>
                                         <a href="{{ route('newsDetails') }}" class="theme-btn mt-4 line-height">
                                            <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                                         </a>
                                    </div>
                                </div>
                            </div>
                            <div class="page-nav-wrap mt-5 text-center">
                                <ul>
                                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                                    <li><a class="page-numbers" href="#">01</a></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="page-numbers" href="#">..</a></li>
                                    <li><a class="page-numbers" href="#">10</a></li>
                                    <li><a class="page-numbers" href="#">11</a></li>
                                    <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Search</h3>
                                    </div>
                                    <div class="search_widget">
                                        <form action="#">
                                            <input type="text" placeholder="Keywords here....">
                                            <button type="submit"><i class="fal fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Popular Feeds</h3>
                                    </div>
                                    <div class="popular-posts">
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/pp1.jpg') }}')"></div>
                                            <div class="post-content">
                                                <h5><a href="{{ route('newsDetails') }}">
                                                    Achieving Fashion 
                                                    Runway to Real Life
                                                </a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>24th March 2024
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/pp2.jpg') }}')"></div>
                                            <div class="post-content">
                                                <h5><a href="{{ route('newsDetails') }}"> Achieving Fashion 
                                                    Runway to Real Life</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>25th March 2024
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-item">
                                            <div class="thumb bg-cover" style="background-image: url('{{ asset('assets/img/news/pp3.jpg') }}')"></div>
                                            <div class="post-content">
                                                <h5><a href="{{ route('newsDetails') }}"> Achieving Fashion 
                                                    Runway to Real Life</a></h5>
                                                <div class="post-date">
                                                    <i class="far fa-calendar-alt"></i>26th March 2024
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="widget_categories">
                                        <ul>
                                            <li><a href="{{ route('news') }}">Digital Marketing <span>02</span></a></li>
                                            <li><a href="{{ route('news') }}">SEO optimization <span>05</span></a></li>
                                            <li><a href="{{ route('news') }}">Content Marketing  <span>10</span></a></li>
                                            <li><a href="{{ route('news') }}">Marketing <span>03</span></a></li>
                                            <li><a href="{{ route('news') }}">Keywords Research <span>10</span></a></li>
                                            <li><a href="{{ route('news') }}">Technical Adult <span>03</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Never Miss News</h3>
                                    </div>
                                    <div class="social-link">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Popular Tags</h3>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="{{ route('newsDetails') }}">Marketing</a>     
                                        <a href="{{ route('newsDetails') }}">Product</a>
                                        <a href="{{ route('newsDetails') }}">Social Media</a>
                                        <a href="{{ route('newsDetails') }}">SEO Optimize</a>
                                        <a href="{{ route('newsDetails') }}">Content</a>
                                        <a href="{{ route('newsDetails') }}">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection