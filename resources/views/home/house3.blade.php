@extends('layout.layout')

@php
     $header = 'false';
     $breadcrumb = 'false';
     $footer = 'false';
@endphp

@section('content')

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

       
        <!-- Header Area Start -->
        @include('components/header1')

        <section class="section-padding">
            <div class="container">
                <h3  class="wow fadeInUp mb-2" data-wow-delay=".2s"> DzuLyna Homestay 3 : Sg.Tiang</h3>
                <!-- ✅ Image Slider -->
                <div class="swiper house1-slider mb-5">
                    <div class="swiper-wrapper">
                        @foreach(range(1, 7) as $i)
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/house/house3/image'.$i.'.jpg') }}" class="img-fluid rounded house-img" alt="House Image {{ $i }}">
                            </div>
                        @endforeach
                    </div>
                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
        
                <!-- ✅ Two Column Layout -->
                <div class="row mt-5">
                    <!-- Amenities -->
                    <div class="col-md-6">
                        <h4  class="wow fadeInUp mb-3" data-wow-delay=".4s" style="text-decoration: underline;">Main Amenities</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled amenities-list">
                                    <li>🧑‍💻 Workspace Area</li>
                                    <li>🧺 Laundry Area</li>
                                    <li>📺 Smart Television</li>
                                    <li>📖 Reading Area</li>
                                </ul>
                                </div>
                                <div class="col-sm-6">
                                <ul class="list-unstyled amenities-list">
                                    <li>🛏 2 Queen Bed</li>
                                    <li>💧 Cuckoo Water Filter</li>
                                    <li>🥐 Food and Snacks</li>
                                    <li>🍽️ Dining Area</li>
                                </ul>
                            </div>
                            <div class="mt-4">
                                <h4 class="wow fadeInUp mb-3" data-wow-delay=".4s" style="text-decoration: underline;">Location</h4>
                                <div class="ratio ratio-16x9">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAP_EMBED_LINK_HERE"
                                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Date Picker & Availability -->
                    <div class="col-md-6 text-center">
                        <h4  class="wow fadeInUp mb-4" data-wow-delay=".4s"  style="text-decoration: underline;">Select Booking Date</h4>
                        
                        <form id="bookingForm">
                            <!-- Check-in & Check-out side by side -->
                            <div class="row g-3">
                                <div class="col-6">
                                    <label for="checkin" class="form-label">Tarikh Masuk</label>
                                    <input type="date" id="checkin" name="checkin" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label for="checkout" class="form-label">Tarikh Keluar</label>
                                    <input type="date" id="checkout" name="checkout" class="form-control">
                                </div>
                            </div>
                    
                            <!-- Calendar (availability visual) -->
                            <div class="mt-4 text-center">
                                <label class="form-label mb-3">Homestay Availability</label>
                                <div id="real-calendar" class="mx-auto" style="max-width: 500px;"></div>
                            </div>
                    
                            <!-- Book Now Button -->
                            <div class="mt-4 text-center">
                                @auth
                                <button type="button" id="previewBooking" class="btn btn-primary px-4 py-2">Book Now</button>
                            @else
                                <button type="button" onclick="alert('Please login or register to book.')" class="btn btn-primary px-4 py-2">Book Now</button>
                            @endauth                          
                             </div>
                        </form>
                    </div>                    
                </div>
            </div>

        <!-- Booking Confirmation Modal -->
            <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Booking Confirmation</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Homestay</label>
                                            <input type="text" class="form-control" value="DzuLyna Homestay 3 - Sg. Tiang" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Check-in</label>
                                            <input type="text" class="form-control" id="confirmCheckin" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Check-out</label>
                                            <input type="text" class="form-control" id="confirmCheckout" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @auth
                                        <div class="mb-3">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->phone }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                        @endauth
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label"><h5>Total Price</h5></label>
                                            <input type="text" class="form-control fw-bold text-success" id="confirmPrice" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form id="confirmBookingForm" method="POST" action="{{ route('booking.store') }}">
                                @csrf
                                <input type="hidden" name="checkin" id="modalCheckin">
                                <input type="hidden" name="checkout" id="modalCheckout">
                                <input type="hidden" name="homestay" value="3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Confirm Booking</button>
                            </form>
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


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>

     // Swiper Initialization
    new Swiper('.house1-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
         const unavailableDates = @json($unavailableDates);

        const events = unavailableDates.map(date => ({
            title: 'Not Available',
            start: date,
            color: '#F44336'
        }));

        const calendarEl = document.getElementById('real-calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 400,
            events: events,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            }
        });

        calendar.render();
    });
</script>


{{-- Modal JS --}}
<script>
document.getElementById('previewBooking').addEventListener('click', function () {
    const checkin = document.getElementById('checkin').value;
    const checkout = document.getElementById('checkout').value;

    if (!checkin || !checkout) {
        alert('Please select both check-in and check-out dates.');
        return;
    }

    // Format date as DD/MM/YYYY
    function formatDate(dateStr) {
        const date = new Date(dateStr);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
    }

    // Set formatted values in modal
    document.getElementById('confirmCheckin').value = formatDate(checkin);
    document.getElementById('confirmCheckout').value = formatDate(checkout);
    document.getElementById('modalCheckin').value = checkin;
    document.getElementById('modalCheckout').value = checkout;

    // Calculate price
    const pricePerNight = 120;
    const checkinDate = new Date(checkin);
    const checkoutDate = new Date(checkout);
    const diffTime = checkoutDate - checkinDate;
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    if (diffDays <= 0) {
        alert('Check-out date must be after check-in date.');
        return;
    }

    const totalPrice = diffDays * pricePerNight;
    const formattedTotal = totalPrice.toFixed(2);

    // Set total price in modal
    document.getElementById('confirmPrice').value = 'RM ' + formattedTotal;

    // Show the modal
    const modal = new bootstrap.Modal(document.getElementById('bookingModal'));
    modal.show();
});
</script>


@endsection