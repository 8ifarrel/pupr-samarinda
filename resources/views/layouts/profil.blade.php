@extends('layouts.main')

@section('container')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="/assets/img/samarinda-lawas.png" class="d-block w-100" alt="..." style="filter: brightness(45%);">
      
      <div class="carousel-caption d-flex justify-content-center align-items-start flex-column h-100">
        <h1 class="fs-lg fw-medium m-0">PROFIL</h1>
        <p class="fs-xl fw-bold m-0">{{ $title }}</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  {{-- Breadcrumb --}}
  <div class="badge rounded-4 bg-blue mt-4">
    <div class="px-2 py-1">
      <p class="p-0 my-auto text-yellow fs-default">
        <span>
          Home
        </span>
        /
        <span>
          Profil
        </span>
        /
        <span>
          {{ $title }}
        </span>
      </p>
    </div>
  </div>

  {{-- Text --}}
  <div class="row mb-5 mt-4">
    <div class="w-75">
      <div class="col">
        <div class="card rounded-5 bg-blue-18 border-0">
          <div class="card-body mt-2">
            @yield('content')

            <div class="mt-5 mb-4">
              <div class="d-flex justify-content-center align-items-center">
                <p class="fs-md m-0 mx-2 vertical-black">
                  Bagikan
                </p>

                <img src="{{ asset('assets/logo/facebook.png') }}" alt="" style="height: 40px" class="mx-2">
                <img src="{{ asset('assets/logo/instagram.svg') }}" alt="" style="height: 40px" class="mx-2">
                <img src="{{ asset('assets/logo/whatsapp.svg') }}" alt="" style="height: 40px" class="mx-2">
                <img src="{{ asset('assets/logo/x.svg') }}" alt="" style="height: 40px" class="mx-2">
              </div>
            </div>
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
                Profil Lainnya
              </h1>

              <div>
                <hr>
                <p class="mb-3 fw-semibold">▷ Kepala Dinas</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Sejarah Kota Samarinda</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Sejarah DPUPR Kota Samarinda</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Struktur Organisasi</p>
                <hr>
                <p class="mb-3 fw-semibold">▷ Tugas, Pokok, dan Fungsi</p>
                <hr>
                <p class="fw-semibold">▷ Visi dan Misi</p>
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