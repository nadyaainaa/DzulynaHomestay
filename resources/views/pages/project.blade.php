@extends('layout.layout')

@php
    $title= 'Popular Projects';
    $subTitle='Home';
    $subTitle2='Popular Projects';
@endphp

@section('content')

        <!-- Project Section Start -->
        <section class="project-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content wow fadeInUp">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Work Gallery
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Explore Featured Projects
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items">
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
                                <div class="project-card-items">
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
                                <div class="project-card-items">
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
                                <div class="project-card-items">
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
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/09.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Product Design</p>
                                        <h3>
                                            <a href="{{ route('projectDetails') }}">
                                                Business Card Design and <br> Branding Identity 
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="project-card-items">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/10.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Website Design</p>
                                        <h3>
                                            <a href="{{ route('projectDetails') }}">
                                                Modern T-Shirt Design and <br> Branding Identity
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/11.jpg') }}" alt="img">
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
                                <div class="project-card-items">
                                    <div class="project-image">
                                       <img src="{{ asset('assets/img/project/12.jpg') }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <p>Product Design</p>
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
            </div>
        </section>

@endsection