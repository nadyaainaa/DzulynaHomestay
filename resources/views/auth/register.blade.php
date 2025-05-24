@extends('layout.layout2')

@php
    $header = 'false';
    $breadcrumb = 'false';
@endphp

@if(isset($header) && $header == 'true')
    @include('components.header')
@endif

@section('content')

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-lg-6">
        <div class="hero-contact-box p-4 shadow rounded bg-white text-center">
            <img src="{{ asset('assets/img/dzl2.png') }}" alt="Logo" class="mb-3" style="max-width: 400px;">
            <h3 class="mb-1">Sign Up</h3>
            <p class="mb-3">Create an account to start booking</p>

            <form action="{{ route('register') }}" method="POST" class="contact-form-item">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-clt">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-clt">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-clt">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-clt">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-clt">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="theme-btn w-50">
                            Create Account
                        </button>
                    </div>
                    <div class="col-lg-12 text-center mt-3">
                        <p>Already have an account?</p>
                        <a href="{{ route('login') }}" class="text-primary font-weight-bold">
                            Click here to Sign In <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
