@extends('layout.layout')

@php
    $header = 'false';
    $breadcrumb = 'false';
    $footer = 'false';
@endphp

@section('content')
@include('components.admin.sidebar')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<div class="admin-dashboard container text-center">
    <h2 class="mb-4">Homestay Availability</h2>


    <form method="GET" action="{{ route('admin.availability') }}" class="mb-4">
        <label for="homestay_id">Select Homestay:</label>
        <select name="homestay_id" id="homestay_id" onchange="this.form.submit()">
            <option value="">All Houses</option>
            @foreach($homestays as $house)
                <option value="{{ $house->id }}" {{ $homestayId == $house->id ? 'selected' : '' }}>
                    {{ $house->name }}
                </option>
            @endforeach
        </select>
    </form>

    <div id="real-calendar" class="mx-auto" style="max-width: 600px;"></div>
</div>

<script>
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
            height: 500,
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
@endsection
