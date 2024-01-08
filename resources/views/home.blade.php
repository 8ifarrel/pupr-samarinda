@extends('layouts.main')

@section('container')
{{-- Gambar Slide --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    {{-- <div class="carousel-item active" data-bs-interval="2000">
      <img src="/assets/temp/slide_1.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="/assets/temp/slide_2.jpg" class="d-block w-100" alt="...">
    </div> --}}

    <div class="carousel-item active" data-bs-interval="2000">
      <div class="position-relative">
        <img src="/assets/img/slides/slide_3.jpg" class="d-block w-100" alt="..." style="filter: brightness(60%);">
        <div class="position-absolute"><p class="text-yellow">INI TULISAN GEDE</p></div>
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

    {{-- Teks Sambutan --}}
    <div class="ms-5 my-auto" style="width: 40%">
      <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
        SAMBUTAN
      </p>

      <h1 class="fs-lg fw-bold my-3">
        SAMBUTAN KEPALA DINAS
      </h1>

      <p class="fs-md">
        Kami menampilkan informasi dalam bentuk Pelayanan E-Goverment sehingga seluruh masyarakat dapat mengakses data terkait perdagangan.
      </p>

      <button class="rounded-5 py-2 px-4 bg-yellow text-blue fw-bold fs-md border-0">
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
    <?php for ($i = 0; $i < 6; $i++) { ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100 rounded-4 border-0 shadow mx-1">
          <a href="" class="text-decoration-none">
            <div class="py-2 px-3 text-white rounded-top-4 bg-blue">
              <p class="text-center m-0 fw-bold">
                <small>
                  UPTD Pemeliharaan Saluran Drainase dan Irigasi
                </small>
              </p>
            </div>
          </a>
          
          <a href="" class="text-decoration-none text-black">
            <img src="https://source.unsplash.com/540x300?Irigasi" class="card-img-top rounded-0" alt="">

            <div class="card-body d-flex align-items-start flex-column">
              <h5 class="card-title fw-bold mb-0">
                Penandatanganan Kontrak Rehabilitasi dan Renovasi Stadion
              </h5>

              <p class="card-text">
                <small>
                  Sabtu, 18 Mei 2023
                </small>
              </p>

              <p class="card-text">
                Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda bersama dengan Komisi...
              </p>

              <p class="mt-3 mb-0 text-decoration-none text-blue fw-semibold horizontal-blue">
                Selengkapnya
              </p>
            </div>
          </a>
        </div>
      </div>
    <?php } ?>
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
      <div class="col-md-3 mb-4">
        <div class="card rounded-4 border-0 shadow mx-1">
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

@endsection