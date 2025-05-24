@extends('layout.layout')

@php
    $title = 'Team Details';
    $subTitle='Home';
    $subTitle2='Team Details';
@endphp

@section('content')

        <!-- Team Details Start -->
        <section class="team-details section-padding fix">
            <div class="container">
                <div class="team-details-wrapper">
                    <div class="team-details-image-area">
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <h2 class="text">Next</h2>
                            </div>
                            <div class="col-lg-4">
                                <div class="details-iamge bg-cover" style="background-image: url('{{ asset('assets/img/team/details.jpg') }}')"></div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-4">
                                <div class="right-content">
                                    <h2>Robert Broom</h2>
                                    <p>Backend Developer</p>
                                    <div class="list">
                                        <h5 class="mb-3">Department: <span>Web Design</span></h5>
                                        <h5 class="mb-3">Experience: <span>15 Years</span></h5>
                                        <h5 class="mb-3">Email: <a href="mailto:info@example.com">info@example.com</a></h5>
                                        <h5>Phone: <a href="tel:+19009384957435">+1-900-938-4957-43</a></h5>
                                    </div>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#" class="color-1"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="color-2"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="color-3"><i class="fab fa-youtube"></i></a>
                                        <a href="#" class="color-4"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-details-content section-padding pb-0">
                        <h2>Alen Walker’s biography</h2>
                        <p class="mb-4">
                            A vast majority of the app marketers mainly concentrate on the post-launch app marketing techniques and measures while completely missing on the pre-launch campaign. This prevents the app to create buzz and hype just around the time when the app is launched. As and when you launch the app, already a considerable number of people should expectantly look forward to your app and this requires long-drawn marketing
                        </p>
                        <p>
                            To create pre-launch buzz and hype about the app a mobile app development company has an array of marketing options like social media campaign, search engine ads, video ads, email campaigns, etc. Apart from online options, you can also reach out to the wider audience with traditional marketing 
                        </p>
                        <div class="details-information-area">
                            <div class="row g-4 justify-content-between">
                                <div class="col-lg-5">
                                    <div class="progress-wrap">
                                        <div class="pro-items">
                                            <div class="pro-head">
                                                <h6 class="title">
                                                    Web Development
                                                </h6>
                                                <span class="point">
                                                90%
                                                </span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="pro-items">
                                            <div class="pro-head">
                                                <h6 class="title">
                                                    Business Solution
                                                </h6>
                                                <span class="point">
                                                50%
                                                </span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-value style-two"></div>
                                            </div>
                                        </div>
                                        <div class="pro-items">
                                            <div class="pro-head">
                                                <h6 class="title">
                                                    Digital Marketing
                                                </h6>
                                                <span class="point">
                                                80%
                                                </span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-value style-three"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="information-content-items">
                                        <div class="content-box-area">
                                            <div class="content mb-4">
                                                <h3>Next Company</h3>
                                                <p>Web Designer, Figma</p>
                                            </div>
                                            <div class="content">
                                                <h3>Moove Ux</h3>
                                                <p>Web Designer, Figma</p>
                                            </div>
                                        </div>
                                        <div class="content-box-area">
                                            <div class="content mb-4">
                                                <h3>Amazon Company</h3>
                                                <p>Web Designer, Figma</p>
                                            </div>
                                            <div class="content">
                                                <h3>Parv Infotech Company</h3>
                                                <p>Web Designer, Figma</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Best Skills</h2>
                        <p>
                            A vast majority of the app marketers mainly concentrate on the post-launch app marketing techniques and measures while completely missing on the pre-launch campaign. This prevents the app to create buzz and hype just around the time when the app is launched. As and when you launch the app, already a considerable number of people should expectantly look forward to your app and this requires long-drawn marketing
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section class="contact-section-2 fix section-padding pt-0">
            <div class="container">
                <div class="contact-form-items">
                    <div class="title">
                        <h2>Let’s Get in Touch</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <form action="contact') }}" id="contact-form" method="POST">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="name" id="name" placeholder="Your Name*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="email" id="email" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <input type="text" name="text" id="text" placeholder="Website*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <textarea name="message" id="message" placeholder="Write Message*"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <button type="submit" class="theme-btn">
                                  Send Your Meassge
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

@endsection