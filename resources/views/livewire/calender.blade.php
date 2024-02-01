<div class="container">
    <div class="left">
        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">{{ $activeDate->format('F Y') }}</div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                <div>{{ $day }}</div>
                @endforeach
            </div>
            <div class="days">
                @php
                // Assuming $jadwal is an array of events
                $eventsByDate = $jadwal->groupBy(function($event) {
                return Carbon\Carbon::parse($event['tanggal'])->toDateString();
                });
                @endphp

                @foreach ($activeMonthDays as $day)
                @php
                $date = Carbon\Carbon::parse($day);
                $isActiveDate = $date->toDateString() === $activeDate->toDateString();
                $events = $eventsByDate[$date->toDateString()] ?? [];
                @endphp

                <div class="calendar-day {{ $isActiveDate ? 'active-date' : '' }}"
                    wire:click="pilihTanggal('{{ $date->toDateString() }}')">
                    {{ $date->locale('id')->isoFormat('D') }}<br>
                    {{ $date->locale('id')->isoFormat('dddd') }}<br>

                    {{-- Display events for the day --}}
                    @foreach ($events as $event)
                    <div class="event">{{ $event['nama_kegiatan'] }}</div>
                    @endforeach
                </div>
                @endforeach
            </div>

            <div class="goto-today">
                <div class="goto">
                    <input type="text" placeholder="mm/yyyy" class="date-input" />
                    <button class="goto-btn">Go</button>
                </div>
                <button class="today-btn" wire:click="goToToday">Today</button>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="today-date">
            <div class="event-day">{{ $activeDate->format('D') }}</div>
            <div class="event-date">{{ $activeDate->format('jS F Y') }}</div>
        </div>
        <div class="events"></div>
    </div>
</div>