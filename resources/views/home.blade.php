@extends('layouts.main')

@section('container')

{{-- Gambar Slide --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="/assets/temp/slide_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/assets/temp/slide_2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

{{-- Sambutan Kepala Dinas --}}
<div class="d-flex flex-row py-5 mb-5 bg-body-secondary">
  {{-- Foto Kepala Dinas --}}
  <div class="mt-auto mb-auto" style="width: 450px; height: 200px; background-color: #F8AC00;">
    <img src="/assets/temp/desy-damayanti-st-mt.png" class="img-fluid position-relative" alt="" style="top: -50px; margin-left: 10rem;">
  </div>

  {{-- Teks Kepala Dinas --}}
  <div class="border-0 rounded-0 ms-5 ps-5" style="width: 60%">
    <div class="m-5">
      <p class="m-0 p-0 mb-3 fs-5 fw-bold">
        SAMBUTAN KEPALA DINAS
      </p>

      <p class="fs-2 m-0 p-0 fw-bold">
        DESY DAMAYANTI S.T., M.T.
      </p>

      <p class=" fs-5 m-0 p-0 mb-4 fw-bold text-black-50">
        Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda
      </p>

      <p class="m-0 p-0">
        Kami menampilkan Informasi dalam bentuk Pelayanan E-Government sehingga seluruh masyarakat dapat mengakses data terkait perdagangan.
      </p>

      {{-- Tombol profil selengkapnya --}}
      <button class="mt-4 btn btn-primary border border-2 rounded-0 border-black bg-transparent text-black text-start" type="button">
        Lihat Profil Selengkapnya
      </button>
    </div>
  </div>
</div>

{{-- Berita Terbaru PUPR Samarinda --}}
<div class="container">
  <h1 class="mb-4 text-center fw-bold">
    Berita Terkini DPUPR Kota Samarinda
  </h1>

  <div class="row" style="margin-left: 5rem; margin-right: 5rem;">
    <?php for ($i = 0; $i < 4; $i++) { ?>
      <div class="col-md-3 mb-3">
        <div class="card h-100">
          {{-- Foto berita --}}
          <a href=""><img src="https://source.unsplash.com/300x300?random" class="card-img-top" alt=""></a>
          
          <div class="card-body d-flex align-items-start flex-column">
            {{-- Judul berita --}}
            <h5 class="card-title fw-bold">
              <a href="" class="text-decoration-none text-black">
                Ini Judul
              </a>
            </h5>
  
            {{-- Dari bidang apa --}}
            <p class="mb-0 pb-0">
              <small> 
                <a href="" class="text-decoration-none fw-bold text-black-50">
                  UPTD Saluran Drainase dan Sungai
                </a> 
              </small>
            </p>

            {{-- Waktu berita berapa lama --}}
            <p class="mt-0 pt-0">
              <small>
                16 jam lalu
              </small>
            </p>
            
            {{-- Tombol baca selengkapnya --}}
            <a href="" class="mt-auto text-decoration-none">
              Klik untuk baca selengkapnya
            </a>
          </div>
        </div>
      </div>
    <?php } ?>

    {{-- Tombol lihat semua berita --}}
    <div class="d-flex justify-content-center">
      <a href="" class="btn btn-primary fw-bold rounded-5 border-0 py-2 px-5" style="background-color: #16156C;"> 
        Lihat semua berita
      </a>
    </div>
  </div>
</div>

{{-- Bidang-bidang kami --}}
<div class="mt-5 pt-5" style="background-color: #F8AC00; padding-bottom: 20rem">
  <h1 class="mb-4 text-center fw-bold">
    Bidang-bidang Kami
  </h1>
</div>

{{-- Agenda Kegiatan --}}    
<div class="w-75 ms-auto me-auto mt-5">
  <h1 class="mb-4 text-center fw-bold">
    Agenda Kegiatan
  </h1>

  <div class="calendar-body">
    <div class="calendar-container">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Minggu</div>
            <div>Senin</div>
            <div>Selasa</div>
            <div>Rabu</div>
            <div>Kamis</div>
            <div>Jumat</div>
            <div>Sabtu</div>
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
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Add Event</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Event Name" class="event-name" />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time From"
                class="event-time-from"
              />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time To"
                class="event-time-to"
              />
            </div>
          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Add Event</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>
  </div>
</div>

{{-- Statistik Pengunjung --}}
<div class="mt-5 pt-5" style="background-color: #F8AC00; padding-bottom: 20rem">
  <h1 class="mb-4 text-center fw-bold">
    Statistik Pengunjung
  </h1>
</div>

@endsection