@extends('layouts.main')

@section('container')

<div class="container">
    <div class="left">
        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date"></div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days"></div>
            <div class="goto-today">
                <div class="goto">
                    <input type="text" placeholder="mm/yyyy" class="date-input" />
                    <button class="goto-btn">Go</button>
                </div>
                <button class="today-btn">Today</button>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="today-date">
            <!-- Display the selected date -->
            <div class="event-day">{{ \Carbon\Carbon::parse($selectedDate)->format('d') }}</div>
            <div class="event-date">{{ \Carbon\Carbon::parse($selectedDate)->format('jS F Y') }}</div>
        </div>
        <div class="events">
            <h2>Agenda Kegiatan for {{ \Carbon\Carbon::parse($selectedDate)->format('jS F Y') }}</h2>

            <ul>
                @forelse($agenda_kegiatan as $agenda)
                <li>
                    {{ $agenda->nama }} - {{ $agenda->tempat }}
                </li>
                @empty
                <li>No agenda for this date</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>

<script>
    const agendaKegiatan = @json($agenda_kegiatan);
</script>
<script src="{{ asset('js/calendar.js') }}">
    </script

</body>

</html>

@endsection