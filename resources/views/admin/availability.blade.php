@extends('layout.adminLayout')

@section('content')
<!-- FullCalendar CSS (CDN) -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/main.min.css" rel="stylesheet" />
<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<style>
    #real-calendar {
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        min-height: 400px;
    }
</style>

<div class="grid grid-cols-12 gap-x-6">
    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <h5>Homestay Availability</h5>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('admin.availability') }}" class="mb-4">
                    <label for="homestay_id" class="form-label">Select Homestay:</label>
                    <select name="homestay_id" id="homestay_id" onchange="this.form.submit()" class="form-select w-full max-w-sm">
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
        </div>
    </div>
</div>

<!-- FullCalendar JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/main.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const unavailableDates = @json($unavailableDates);

        const events = unavailableDates.map(date => ({
            title: 'Not Available',
            start: date,
            color: '#F44336'
        }));

        const calendarEl = document.getElementById('real-calendar');

        if (calendarEl) {
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
        }
    });
</script>
@endsection
