@extends('layout.adminLayout')

@section('content')
<div class="grid grid-cols-12 gap-x-6">
    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <h5>List Of Bookings</h5>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('admin.bookings') }}" class="mb-4">
                    <label for="homestay_id" class="form-label">Filter by Homestay:</label>
                    <select name="homestay_id" onchange="this.form.submit()" class="form-select w-full max-w-sm">
                        <option value="">All Houses</option>
                        @foreach($homestays as $house)
                            <option value="{{ $house->id }}" {{ $homestayId == $house->id ? 'selected' : '' }}>
                                {{ $house->name }}
                            </option>
                        @endforeach
                    </select>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Homestay</th>
                                <th>User</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->homestay->name }}</td>
                                    <td>{{ $booking->customer->name ?? 'Guest' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('d-m-Y') }}</td>
                                    <td>
                                        @php
                                            $status = strtolower($booking->status);
                                            $badgeClass = match($status) {
                                                'pending' => 'bg-warning-500',
                                                'paid' => 'bg-success-500',
                                                'cancelled' => 'bg-danger-500',
                                                default => 'bg-theme-bg-2'
                                            };
                                        @endphp
                                        <span class="badge {{ $badgeClass }} text-white text-sm">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No bookings found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
