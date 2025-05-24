@extends('layout.layout2')

@php
     $header = 'false';
     $breadcrumb = 'false';
     $footer = 'false';
@endphp

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-lg-5">
        <div class="hero-contact-box p-4 shadow rounded bg-white text-center">
            <img src="{{ asset('assets/img/dzl2.png') }}" alt="Logo" class="mb-3" style="max-width: 300px;">
            <h3 class="mb-1">Edit Profile</h3>
            <p class="mb-3">Update your personal information below.</p>

            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}" class="contact-form-item">
                @csrf
                <div class="row justify-content-center g-3">
                    <div class="col-10 mx-auto">
                        <div class="form-clt">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Full Name" value="{{ old('name', $user->name) }}" required>
                            @error('name') <div class="invalid-feedback text-start">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="col-10 mx-auto">
                        <div class="form-clt">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                   placeholder="Phone Number" value="{{ old('phone', $user->phone) }}">
                            @error('phone') <div class="invalid-feedback text-start">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="col-10 mx-auto">
                        <div class="form-clt">
                            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="theme-btn w-40">
                            Save Changes <i class="far fa-save"></i>
                        </button>
                    </div>

                    <div class="col-12 mt-3">
                        <a href="{{ route('homepage') }}" class="text-primary">← Back to Home</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
