@extends('layouts.main')

@section('container')

<div class="p-5 bg-grey">
  <div class="text-center">
    <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
      BERITA
    </p>

    <h1 class="fs-lg fw-bold mt-3 mb-5">
      {{ $title }}
    </h1>
  </div>
  {{-- Breadcrumb --}}
  <div class="badge rounded-4 bg-blue mt-4">
    <div class="px-2 py-1">
      <p class="p-0 my-auto text-yellow fs-default">
        <span>
          Home
        </span>
        /
        <span>
          Berita
        </span>
        /
        <span>
          {{ $title }}
        </span>
      </p>
    </div>
  </div>

  {{-- Berita --}}
  <div class="row mb-5 mt-4">
    <div class="w-75">
      <div class="col">
        <div class="card rounded-5 bg-blue-18 border-0">
          <div class="card-body mt-2">
            @yield('content')

            {{-- Tolong tambahkan if agar hanya muncul saat berada di dalam berita --}}
            {{-- <div class="mt-5 mb-4">
              <div class="d-flex justify-content-center align-items-center">
                <p class="fs-md m-0 mx-2 vertical-black">
                  Bagikan
                </p>

                <img src="{{ asset('assets/logo/facebook.png') }}" alt="" style="height: 40px" class="mx-2">
                <img src="{{ asset('assets/logo/instagram.svg') }}" alt="" style="height: 40px" class="mx-2">
                <img src="{{ asset('assets/logo/whatsapp.svg') }}" alt="" style="height: 40px" class="mx-2">
                <img src="{{ asset('assets/logo/x.svg') }}" alt="" style="height: 40px" class="mx-2">
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="w-25">
      <div class="col sticky-top z-2" style="top: 85px">
        <div class="">
          <div class="card rounded-5 bg-blue-18 border-0">
            <div class="card-body">
              <h1 class="card-title fw-bold fs-md text-center mb-4">
                Kategori Lainnya
              </h1>

              <div>
                <hr>
                <p class="mb-3 fw-semibold">▷ Sekretariat</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Bidang Sumber Daya Air</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Bidang Cipta Karya</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Bidang Bina Marga</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Bidang Bina Konstruksi</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Bidang Tata Ruang</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Bidang Pertanahan</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ UPTD Pengelolaan Air Limbah Domestik</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ UPTD Pemeliharaan Jalan dan Jembatan</p>
                <hr>
                <p class="fw-semibold">▷ UPTD Pemeliharaan Saluran Drainase dan Irigasi</p>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection