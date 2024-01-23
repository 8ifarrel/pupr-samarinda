<div>
    <h1 class="text-2xl font-bold mb-4">Agenda</h1>

    <div class="grid grid-cols-7 gap-4">
        @foreach ($days as $day)
        <div class="border p-4 text-center">
            <h2 class="text-xl font-bold">{{ $day['date']->format('d') }}</h2>
            <p class="text-gray-500">{{ $day['date']->format('D') }}</p>

            @if ($day['events']->isNotEmpty())
            <ul>
                @foreach ($day['events'] as $event)
                <li>{{ $event->title }}</li>
                @endforeach
            </ul>
            @else
            <p class="text-gray-500">Tidak ada agenda hari ini</p>
            @endif
        </div>
        @endforeach
    </div>
</div>