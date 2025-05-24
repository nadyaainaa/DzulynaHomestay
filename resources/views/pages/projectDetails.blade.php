@extends('layout.layout')

@php
    $title = 'Website Design & Development';
    $subTitle='Home';
    $subTitle2='Website Design & Development';
@endphp

@section('content')

        <!-- Project Details Section Start -->
        <section class="project-details-section fix section-padding">
            <div class="container">
                <div class="project-details-wrapper">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-8">
                            <div class="project-details-image">
                               <img src="{{ asset('assets/img/project/details-1.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-details-image">
                               <img src="{{ asset('assets/img/project/details-2.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="project-details-content">
                                <h5>Design, Branding</h5>
                                <h2>Introduction Of Projects <br> Overview</h2>
                                <p class="mt-4">
                                    Designing a digital product and branding project involves several key steps and <br> considerations to create a successful and cohesive user experience. Below is an <br> overview of the project details and the typical steps involved
                                </p>
                                <h4 class="mt-50">Project Initiation</h4>
                                <ul class="project-list">
                                    <li>
                                        <i class="far fa-check"></i>
                                        Define the project scope, goals, and objectives
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Identify the target audience and market research.
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Determine the budget, timeline, and available resources.
                                    </li>
                                </ul>
                                <h4 class="mt-4">Project Initiation</h4>
                                <ul class="project-list">
                                    <li>
                                        <i class="far fa-check"></i>
                                        Conduct user research to understand the needs and preferences of the target audience
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Analyze competitors and industry trends.
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Create user personas and user journeys to guide design decisions.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="project-information">
                                <h4>Project Information's</h4>
                                <ul>
                                    <li>
                                        Clients <span>Myron S.</span>
                                    </li>
                                    <li>
                                        Category <span>Design & Dev</span>
                                    </li>
                                    <li>
                                        Date <span>  October, 2024</span>
                                    </li>
                                    <li>
                                        Location <span>  New York</span>
                                    </li>
                                    <li>
                                        Duration <span> 1 month</span>
                                    </li>
                                </ul>
                                <div class="social-icon d-flex align-items-center">
                                    <h5>Project Share</h5>
                                    <div class="icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-details-img mt-50">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="thumb">
                                   <img src="{{ asset('assets/img/project/details-3.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="thumb">
                                   <img src="{{ asset('assets/img/project/details-4.jpg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-3">Branding</h4>
                    <ul class="p-list">
                        <li>
                            <i class="far fa-check"></i>
                            Develop or refine the brand identity, including logo, colors, typography, and brand guidelines.
                        </li>
                        <li>
                            <i class="far fa-check"></i>
                            Ensure the brand reflects the values and messaging of the product
                        </li>
                    </ul>
                    <h4 class="mt-50">User Experience (UX) Design:</h4>
                    <p class="mt-3">
                        Throughout the project, effective communication and collaboration among the project team members, including designers, developers, marketers, and stakeholders, are crucial for its success. Regular reviews and feedback loops should be established to ensure that the digital product and branding align with the project's goals and objectives.
                    </p>
                    <ul class="p-list mt-4">
                        <li>
                            <i class="far fa-check"></i>
                            Create wireframes and prototypes to visualize the product's layout and functionality
                        </li>
                        <li>
                            <i class="far fa-check"></i>
                            Design the user interface (UI) based on the wireframes, incorporating the brand identity.
                        </li>
                        <li>
                            <i class="far fa-check"></i>
                            Conduct usability testing to refine the design and user flow
                        </li>
                    </ul>
                </div>
            </div>
        </section>
       
        <!-- Project Section Start -->
        <section class="project-section section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-content">
                       <img src="{{ asset('assets/img/bale.png') }}" alt="img">
                        Work Gallery
                    </span>
                    <h2>
                        Explore Featured Projects
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6">
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
                            <div class="col-lg-6 col-md-6">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection