@extends('layout.layout2')

@php
    $header = 'false';
    $breadcrumb = 'false';
    $footer = 'false';
@endphp

@section('content')

@include('components/header1')
<section class="section-padding">
<div class="container my-3 ">
    <div class="row justify-content-center mb-5">
        {{-- Edit Profile Form --}}
        <div class="col-lg-5 mb-5">
            <div class="p-4 shadow rounded bg-white text-center">
                <h3 class="mb-1">Edit Profile</h3>
                <p class="mb-3">Update your personal information below.</p>

                @if (session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}" class="contact-form-item">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               placeholder="Full Name" value="{{ old('name', $user->name) }}" required>
                        @error('name') <div class="invalid-feedback text-start">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                               placeholder="Phone Number" value="{{ old('phone', $user->phone) }}">
                        @error('phone') <div class="invalid-feedback text-start">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                    <a href="{{ route('homepage') }}" class="d-block mt-3 text-primary">← Back to Home</a>
                </form>
            </div>
        </div>

        {{-- Booking History & Reviews --}}
        <div class="col-lg-7">
            <div class="p-4 shadow rounded bg-white">
                <h4 class="mb-3 text-center">Your Booking List</h4>

                <table class="table table-bordered table-hover text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Homestay</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Review</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->homestay->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('d-m-Y') }}</td>
                                <td>RM {{ number_format($booking->price, 2) }}</td>
                                <td>
                                    @if($booking->status === 'paid')
                                        <span class="badge bg-success text-white">Paid</span>
                                    @elseif($booking->status === 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($booking->status === 'cancelled')
                                        <span class="badge bg-danger text-white">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    @if($booking->end_date && \Carbon\Carbon::now()->gt($booking->end_date))
                                        @if(isset($reviews[$booking->id]))
                                            <!-- View Review Button -->
                                            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#viewReviewModal{{ $booking->id }}">
                                                View Review
                                            </button>

                                            <!-- View Review Modal -->
                                            <div class="modal fade" id="viewReviewModal{{ $booking->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content p-3">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Your Review for {{ $booking->homestay->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body text-start">
                                                            <strong>Rating:</strong> {{ $reviews[$booking->id]->rating }} / 5 <br>
                                                            <strong>Comment:</strong><br>
                                                            <p>{{ $reviews[$booking->id]->comment }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <!-- Give Review Button -->
                                            <button class="btn btn-sm btn-outline-primary" onclick="openReviewModal({{ $booking->id }}, '{{ $booking->homestay->name }}')">
                                                Review
                                            </button>
                                        @endif
                                    @else
                                        <!-- Not Yet Eligible -->
                                        <button class="btn btn-sm btn-outline-secondary" onclick="alert('You can only review after your stay is completed.')">
                                            Not Yet
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
{{-- Review Modal --}}
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form id="reviewForm" method="POST" action="{{ route('review.submit') }}">
        @csrf
        <input type="hidden" name="booking_id" id="modalBookingId">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Leave a Review for <span id="modalHomestayName"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 text-center">
                    <label class="form-label">Rating</label>
                    <div id="stars" class="mb-2">
                        @for ($i = 5; $i >= 1; $i--)
                            <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}" required>
                            <label for="star{{ $i }}">★</label>
                        @endfor
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="comment" class="form-control" rows="4" placeholder="Write your feedback..." required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit Review</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
  </div>
</div>

{{-- JS for modal --}}
<script>
    function openReviewModal(bookingId, homestayName) {
        document.getElementById('modalBookingId').value = bookingId;
        document.getElementById('modalHomestayName').innerText = homestayName;
        new bootstrap.Modal(document.getElementById('reviewModal')).show();
    }
</script>

{{-- CSS for stars --}}
<style>
#stars {
    direction: rtl; /* Right to left to highlight properly */
    display: inline-flex;
}
#stars input[type="radio"] {
    display: none;
}
#stars label {
    font-size: 2rem;
    color: lightgray;
    cursor: pointer;
}
#stars input[type="radio"]:checked ~ label {
    color: gold;
}
#stars label:hover,
#stars label:hover ~ label {
    color: gold;
}
.star-rating {
    display: flex;
    flex-direction: row; /* ensure left to right */
    direction: ltr;
}
</style>

@endsection
