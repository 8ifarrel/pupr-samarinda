<div>
    <div class="d-flex justify-content-center">
        <div class="calendar-container w-75">
            <div class="calendar-header">
                <button wire:click="loadPekanSebelumnya">Pekan Sebelumnya</button>
                <div class="week-header" colspan="5">
                    {{ $tanggalPertamaPekan->format('F Y') }}
                </div>
                <button wire:click="loadPekanBerikutnya">Pekan Berikutnya</button>
            </div>
            <div class="calendar-body">
                @foreach ($jadwal as $kegiatan)
                @php
                $tanggal = Carbon\Carbon::parse($kegiatan['tanggal']);
                $isActiveDate = $tanggal->toDateString() === $activeDate;
                @endphp

                <div class="calendar-day @if($isActiveDate) active-date @endif"
                    wire:click="pilihTanggal('{{ $kegiatan['tanggal'] }}')">
                    {{ $tanggal->locale('id')->isoFormat('D') }}<br>
                    {{ $tanggal->locale('id')->isoFormat('dddd') }}<br>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Kode di luar calendar-body --}}
    <div class="w-50">
        @if (!$agenda_kegiatan_filter->isEmpty())
        @foreach ($agenda_kegiatan_filter as $item)
        <div class="card rounded-4 mx-auto border-0 bg-blue-18 my-3">
            <div class="card-body">
                <p class="fs-md mb-2">
                    {{ $item->nama }}
                </p>

                <div class="badge rounded-pill bg-blue shadow-md mb-2">
                    <p class=" px-2 py-1 text-yellow fw-bold m-0 fs-default">
                        <small>
                            {{ $item->dihadiri_oleh }}
                        </small>
                    </p>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <p class="m-0">
                            <small>
                                {{ $item->waktu }} | {{ $item->tempat }}
                            </small>
                        </p>
                    </div>

                    <div class="d-flex align-items-center" id="dot-{{ $item->id }}">
                        @php
                        $now = now('Asia/Makassar'); // Current time in Makassar timezone
                        $eventTime = \Carbon\Carbon::parse($item->waktu, 'Asia/Makassar');

                        // Calculate time difference in hours and days
                        $hoursDifference = $now->diffInHours($eventTime);
                        $daysDifference = $now->diffInDays($eventTime);

                        // Set status based on time difference
                        if ($daysDifference >= 1) {
                        $status = "Akan Berlangsung";
                        $showDot = false;
                        } elseif ($hoursDifference == 1) {
                        $status = "Sedang Berlangsung";
                        $showDot = true;
                        } else {
                        $status = "Selesai";
                        $showDot = false;
                        }
                        @endphp


                        @if($showDot)
                        <dotlottie-player src="https://lottie.host/534d821f-20c2-4173-b8d4-b8a0e719ee64/mpgYgLfCR1.json"
                            background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay>
                        </dotlottie-player>
                        @endif

                        <!-- Display the status -->
                        <span class="ml-2">{{ $status }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="card rounded-4 mx-auto border-0 bg-blue-18 my-3">
            <div class="card-body">
                <p class="fs-md mb-2">
                    Tidak ada agenda
                </p>
            </div>
        </div>
        @endif
    </div>

</div>