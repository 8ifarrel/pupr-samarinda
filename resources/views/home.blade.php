@extends('layouts.main')

@section('container')
{{-- Gambar Slide --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    {{-- <div class="carousel-item" data-bs-interval="2000">
      <img src="/assets/temp/slide_1.jpg" class="d-block w-100" alt="...">
    </div> --}}

    <div class="carousel-item active" data-bs-interval="2000">
      <img src="/assets/img/slides/slide_3.jpg" class="d-block w-100" alt="..." style="filter: brightness(35%);">
      <div class="container">
        <div class="carousel-caption d-flex justify-content-center flex-column h-100">
          <h1 class="fw-bold fs-xl pb-2">Website Resmi Dinas Pekerjaan Umum dan Penantaan Ruang Kota Samarinda</h1>
          <p class="fs-md">Selamat datang di website Dinas Pekerjaan Umum dan Penantaan Ruang Kota Samarinda, tempat informasi mengenai pembangunan, pemeliharaan, dan pengelolaan infrastruktur, serta tata ruang dan pengawasan bangunan di wilayah Kota Samarinda.</p>
        </div>
      </div>
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
<div class="p-5 bg-grey">
  <div class="p-4 d-flex">
    {{-- Biodata Kepala Dinas --}}
    <div data-aos="fade-right" data-aos-duration="1500">
      <div style="width: 625px; height: 608px;">
        <div class="d-flex justify-content-end">
          <img src="assets/element/dots.svg" alt="" class="position-absolute">
        </div>

        <div class="d-flex justify-content-center flex-row z-3" style="padding-top: 2rem;">
          <div class="rounded-start-pill bg-blue z-3" style="width: 530px !important;">
            <img src="assets/temp/desy-damayanti-st-mt.png" alt="" style="width: 530px; height: 530px;" class="rounded-top-pill bg-blue">
          </div>
        </div>

        <div class="shadow py-2 bg-white rounded-4">
          <p class="fw-extrabold text-center m-0 fs-md">
            DESY DAMAYANTI S.T., M.T.
          </p>

          <p class="fw-semibold text-center m-0 fs-md">
            Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda
          </p>
        </div>
      </div>
    </div>

    {{-- Teks Sambutan --}}
    <div class="ms-5 my-auto" style="width: 40%"  data-aos="fade-left" data-aos-duration="1500">
      <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
        SAMBUTAN
      </p>

      <h1 class="fs-lg fw-bold my-3">
        SAMBUTAN KEPALA DINAS
      </h1>

      <p class="fs-md">
        Kami menampilkan informasi dalam bentuk Pelayanan E-Goverment sehingga seluruh masyarakat dapat mengakses data terkait perdagangan.
      </p>

      <button class="btn rounded-5 py-2 px-4 fw-bold fs-md">
        Lihat Profil Selengkapnya
      </button>
    </div>
  </div>
</div>

{{-- Berita Terbaru --}}
<div class="container mt-5">
  <div class="text-center">
    <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
      BERITA TERBARU
    </p>

    <h1 class="fs-lg fw-bold mt-3 mb-5">
      SEPUTAR DPUPR SAMARINDA
    </h1>
  </div>

  <div class="mx-3 row">
    @foreach ($berita as $item)
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card card-hover h-100 rounded-4 border-0 shadow mx-1">
          <a href="" class="text-decoration-none">
            <div class="py-2 px-3 text-white rounded-top-4 bg-blue">
              <p class="text-center m-0 fw-bold">
                <small>
                  {{ $item->kategori->label }}
                </small>
              </p>
            </div>
          </a>

          <a href="" class="text-decoration-none text-black">
            <img src="https://source.unsplash.com/540x300?Irigasi" class="card-img-top rounded-0" alt="">

            <div class="card-body d-flex align-items-start flex-column">
              <h5 class="card-title fw-bold">
                {{ $item->judul }}
              </h5>

              <p class="card-text">
                {{ $item->excerpt }}
              </p>

              <p class="mt-3 mb-0 text-decoration-none text-blue fw-semibold horizontal-blue">
                Selengkapnya
              </p>
            </div>
          </a>
        </div>
      </div>
    @endforeach
  </div>

  <div class="text-center mt-5 mb-5">
    <button class="btn rounded-5 py-2 px-4 bg-yellow text-blue fw-bold fs-md">
      Lihat Semua Berita
    </button>
  </div>
</div>

{{-- Bidang-Bidang Kami --}}
<div class="p-5 bg-grey">
  <div class="text-center">
    <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
      STRUKTUR ORGANISASI
    </p>

    <h1 class="fs-lg fw-bold mt-3 mb-5">
      BIDANG-BIDANG KAMI
    </h1>
  </div>

  <div class="mx-3 row d-flex justify-content-center">
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card card-hover rounded-4 border-0 shadow mx-1">
          <a href="" class="text-decoration-none text-black">
            <div class="card-body d-flex align-items-start flex-column">
              <div class="mx-auto my-4">
                <img src="assets/logo/struktur-organisasi/uptd-jalan-dan-jembatan.png" alt="" style="height: 62px" class="position-absolute">

                <img src="assets/element/dot.svg" alt="" class="">
              </div>

              <div class="mx-auto">
                <h5 class="card-title fw-semibold mb-4 text-center">
                  BIDANG PERTAHANAN
                </h5>
              </div>

              <div class="mx-auto">
                <p class="card-text text-center">
                  Melaksanakan kegiatan teknis operasional khususnya pemeliharaan jalan dan jembatan.
                </p>
              </div>

              <div class="mx-auto">
                <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                  Selengkapnya
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

{{-- Agenda Kegiatan --}}
<div class="container mt-5">
  <div class="text-center">
    <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
      JADWAL
    </p>

    <h1 class="fs-lg fw-bold mt-3 mb-5">
      AGENDA KEGIATAN
    </h1>
  </div>

  <div class="d-flex justify-content-between w-75 mx-auto mb-3">
    <div class="d-flex">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle rounded-4 fs-default fw-bold text-blue" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgba(113, 113, 113, 0.30); border-color: rgba(22, 21, 108, 0.50);">
          Minggu ke-1
        </a>
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>

      {{-- Range tanggal --}}
      <p class="fw-bold mb-0 ms-3" style="font-size: 25px"> 
        1 - 7 Januari 2024
      </p>
    </div>

    <div class="my-auto">
      <button class="btn rounded-4 py-1 px-4 fw-bold bg-blue text-yellow">
        Cari
      </button>
    </div>
  </div>

  <div class="card rounded-4 w-75 mx-auto border border-secondary bg-blue-18">
    <div class="card-body">
      <div class="btn-group d-flex justify-content-between" role="group" aria-label="Basic radio toggle button group">
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio1">
          <p class="m-0">1</p>
          <p class="m-0">Senin</p>
          <img src="assets/element/dot-original.svg" alt="">
        </label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio2">
          <p class="m-0">2</p>
          <p class="m-0">Selasa</p>
        </label>
      
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio3">
          <p class="m-0">3</p>
          <p class="m-0">Rabu</p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio4">
          <p class="m-0">4</p>
          <p class="m-0">Kamis</p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio5">
          <p class="m-0">5</p>
          <p class="m-0">Jumat</p>
          <img src="assets/element/dot-original.svg" alt="">
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-red" for="btnradio6">
          <p class="m-0">6</p>
          <p class="m-0">Sabtu</p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-red" for="btnradio7">
          <p class="m-0">7</p>
          <p class="m-0">Minggu</p>
        </label>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    {{-- Garis dan titik --}}
    <div class="d-flex flex-column me-4">
      <div class="p-1 bg-black border border-light rounded-circle mx-auto" style="height: 15px; width: 15px; margin-top: 102.7px"></div>
      
      <div class="d-flex bg-black mx-auto" style="height: 151.9px; width: 2px;">
        <div class="vr"></div>
      </div>

      <div class="p-1 bg-black border border-light rounded-circle mx-auto" style="height: 15px; width: 15px;"></div>

      <div class="d-flex bg-black mx-auto" style="height: 151.9px; width: 2px;">
        <div class="vr"></div>
      </div>

      <div class="p-1 bg-black border border-light rounded-circle mx-auto" style="height: 15px; width: 15px;"></div>
    </div>

    {{-- Keterangan kegiatan --}}
    <div class="w-50">
      <?php for ($i = 0; $i < 3; $i++) { ?>
        <div class="card rounded-4 mx-auto border-0 bg-blue-18 my-3">
          <div class="card-body">
            <p class="fs-md mb-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, quibusdam.
            </p>

            <div class="badge rounded-pill bg-blue shadow-md mb-2">
              <p class=" px-2 py-1 text-yellow fw-bold m-0 fs-default">
                <small>
                  UPTD Jalan dan Jembatan
                </small>
              </p>
            </div>

            <div class="d-flex justify-content-between">
              <div>
                <p class="m-0">
                  <small>
                    09.30 - 10.45 WITA
                  </small>
                </p>
              </div>

              <div>
                <p class="m-0 text-blue">
                  <small>
                    Sedang berlangsung
                  </small>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

@endsection