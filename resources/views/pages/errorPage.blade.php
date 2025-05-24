@extends('layout.layout')

@php
    $title = 'Error 404';
    $subTitle='Home';
    $subTitle2='Error 404';
@endphp

@section('content')

        <!-- Error Section Start -->
        <div class="error-section fix section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="error-items text-center">
                            <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                               <img src="{{ asset('assets/img/error.png') }}" alt="img">
                            </div>
                            <a href="{{ route('index') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                                <span>Back To Home<i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection