@extends('layouts.main')

@section('container')

{{-- Gambar Slide --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="/assets/img/slides/slide_3.jpg" class="d-block w-20" alt="..." style="filter: brightness(35%);">
      <div class="container">
        <div class="carousel-caption d-flex justify-content-center flex-column h-100">
          <h1 class="fw-bold fs-xl pb-2">Website Resmi Dinas Pekerjaan Umum dan Penantaan Ruang Kota Samarinda</h1>
          <p class="fs-md">Selamat datang di website Dinas Pekerjaan Umum dan Penantaan Ruang Kota Samarinda, tempat
            informasi mengenai pembangunan, pemeliharaan, dan pengelolaan infrastruktur, serta tata ruang dan pengawasan
            bangunan di wilayah Kota Samarinda.</p>
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
            <img src="assets/temp/desy-damayanti-st-mt.png" alt="" style="width: 530px; height: 530px;"
              class="rounded-top-pill bg-blue">
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
    <div class="ms-5 my-auto" style="width: 40%" data-aos="fade-left" data-aos-duration="1500">
      <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
        SAMBUTAN
      </p>

      <h1 class="fs-lg fw-bold my-3">
        SAMBUTAN KEPALA DINAS
      </h1>

      <p class="fs-md">
        Kami menampilkan informasi dalam bentuk Pelayanan E-Goverment sehingga seluruh masyarakat dapat mengakses data
        terkait perdagangan.
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
              {{ $item->tanggal }}
            </p>

            {{--
            <p class="card-text">
              {{ $item->excerpt }}
            </p>
            --}}

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
    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/SEKRETARIAT.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                SEKRETARIAT
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Menyusun koordinasi penyusunan program, mengelola keuangan, kepegawaian kelengkapan kantor, dan
                administrasi
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/JSA.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                SUMBER DAYA AIR
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Mengelola sumber daya air di berbagai wilayah, termasuk sungai, bendungan, danau, irigasi, dll., untuk
                konservasi dan kebutuhan kota.
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/BINAMARGA.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                BINA MARGA
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Memimpin perencanaan, pembangunan, dan preservasi jalan serta jembatan. Termasuk
                pengamanan, penerangan jalan, dan pengendalian mutu pekerjaan.
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/CIPTAKARYA.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto ">
              <h5 class="card-title fw-semibold mb-4 text-center">
                CIPTA KARYA
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Menangani infrastruktur permukiman, bangunan, dan pengelolaan air minum, drainase,
                air limbah, serta persampahan di kawasan strategis kota.
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/TATARUANG.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                TATA RUANG
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Menangani perumusan dan pelaksanaan aturan tata ruang sesuai kewenangan Pemerintah Kota berdasarkan
                perundangan-undangan yang berlaku
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/KONSTRUKSI.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                BINA KONSTRUKSI
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                melaksanakan kebijakan dalam pembinaan jasa konstruksi sesuai dengan peraturan perundang-undangan yang
                berlaku
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets/logo/bidang/PERTANAHAN.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                PERTANAHAN
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Bidang Pertanahan mengkoordinasikan izin lokasi, redistribusi dan pengadaan tanah. Juga menangani ganti
                rugi tanah, perencanaan penggunaan tanah, dan monitoring.
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets\logo\bidang\uptd-jalan-dan-jembatan.png" alt="" style="height: 62px"
                class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                UPTD JALAN DAN JEMBATAN
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Melaksanakan kegiatan teknis operasional khususnya pemeliharaan jalan dan jembatan.
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets\logo\bidang\DRAINASE.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                UPTD PEMELIHARAAN SALURAN DRAINASE DAN IRIGASI
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                melaksanakan kegiatan teknis operasional hususnya pemeliharaan saluran drainase dan irigasi.
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

    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-duration="1500">
      <div class="card card-hover rounded-4 border-0 shadow mx-1">
        <a href="" class="text-decoration-none text-black">
          <div class="card-body d-flex align-items-start flex-column" style="height: 420px">
            <div class="mx-auto my-4">
              <img src="assets\logo\bidang\LIMBAH.png" alt="" style="height: 62px" class="position-absolute">

              <img src="assets/element/dot.svg" alt="" class="">
            </div>

            <div class="mx-auto">
              <h5 class="card-title fw-semibold mb-4 text-center">
                UPTD PENGELOLAAN AIR LIMBAH DOMESTIK
              </h5>
            </div>

            <div class="mx-auto">
              <p class="card-text text-center">
                Mengelola dan penangan masalah air dan limbah
              </p>
            </div>

            <div class="mx-auto mt-auto">
              <p class="card-text mt-3 mb-0 text-decoration-none text-blue fw-semibold text-center">
                Selengkapnya
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

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
    <div class="border rounded-4"
      style="background-color: rgba(113, 113, 113, 0.30); border-color: rgba(22, 21, 108, 0.50) !important;">
      <p class="fs-md fw-extrabold text-blue px-3 py-2 mb-0" id="current-agenda"></p>
    </div>
  </div>

  <section class="page-section-ptb pt-20" style="background: rgba(255, 255, 255, 0.97)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title mt-md-5 text-left mb-10">
            <div class="text-blue-dark-second text-bold-800 font-medium-5">
              Agenda<span class="text-blue-sky pl-1"> 15 - 21</span> Januari 2024
            </div>
            <p class="mb-20 font-medium-1 text-black">
              Kegiatan Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu
            </p>
          </div>
        </div>
        <div class="col-lg-12">
          <div wire:id="rv83q1bohG5QGqywarma" xmlns:wire="http://www.w3.org/1999/xhtml">
            <div class="mb-20 row">
              <div class="col-lg-6 col-7 row mb-10">
                <div class="col-lg-3 col-6">
                  <select class="custom-select" wire:model="bulan">
                    <option>-- Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
                </div>
                <div class="col-lg-3 col-6 pl-0">
                  <select class="custom-select" wire:model="tahun">
                    <option>-- Tahun</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-6 col-5 text-right pr-0">
                <button class="btn btn-outline-success rounded-2" wire:click="modeSelect('month')">
                  Bulan
                </button>
                <button class="btn btn-outline-danger rounded-2" wire:click="modeSelect('week')">
                  Minggu
                </button>
              </div>
            </div>
            <div class="tab round">
              <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-15 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="true">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Sen
                    </div>
                    <div class="text-bold-700 font-medium-2">15</div>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-16 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="true">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Sel
                    </div>
                    <div class="text-bold-700 font-medium-2">16</div>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-17 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="false">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Rab
                    </div>
                    <div class="text-bold-700 font-medium-2">17</div>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-18 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1 active" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="true">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Kam
                    </div>
                    <div class="text-bold-700 font-medium-2">18</div>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-19 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="false">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Jum
                    </div>
                    <div class="text-bold-700 font-medium-2">19</div>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-20 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="true">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Sab
                    </div>
                    <div class="text-bold-700 font-medium-2">20</div>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a wire:click="dateValue('2024-01-21 00:00:00')" wire:ignore=""
                    class="nav-link rounded-2 box-shadow-0-1 ml-1 mr-1" id="home-07-tab" data-toggle="tab"
                    href="#home-07" role="tab" aria-controls="home-07" aria-selected="true">
                    <div class="font-small-2 text-bold-500 text-uppercase">
                      Min
                    </div>
                    <div class="text-bold-700 font-medium-2">21</div>
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane active show" id="home-07" role="tabpanel" aria-labelledby="home-07-tab">
                  <div class="text-center mt-120 mb-120">
                    <img src="https://dpmptsp.samarindakota.go.id/image/callender.webp" alt=""
                      class="img-fluid width-90" />
                    <p class="text-bold-700 text-black font-medium-1 text-center mt-20 mb-0">
                      Tidak ada agenda hari ini
                    </p>
                    <p class="text-bold-400 text-blue-grey font-small-3 text-center">
                      Lakukan pencarian tanggal lainnya atau
                      <a href="https://dpmptsp.samarindakota.go.id/agenda-dpmptsp"
                        class="text-green text-bold-600"><u>Lihat Selengkapnya</u></a>
                    </p>
                  </div>
                </div>
              </div>
              <div wire:ignore.self="" class="modal fade backdrop detail-agenda pl-20" id="detail-agenda" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog mt-30" role="document">
                  <div class="modal-content border-0 rounded-1"></div>
                </div>
              </div>
            </div>
            <div class="entry-pagination mt-40 mb-40">
              <nav aria-label="Page navigation example text-center">
                <style>
                  .pagination {
                    justify-content: center;
                  }
                </style>
                <div></div>
              </nav>
            </div>
          </div>

          <!-- Livewire Component wire-end:rv83q1bohG5QGqywarma -->
        </div>
      </div>
    </div>
  </section>


  <script>
    document.querySelectorAll('input[name="btnradio"]').forEach((radio) => {
            radio.addEventListener('click', function () {
                // Get the selected date from the checked radio button
                const selectedDate = radio.getAttribute('data-date');

                // Call a function to update the agenda content based on the selected date
                updateAgenda(selectedDate);
            });
        });

        // Function to update agenda content based on the selected date
        function updateAgenda(selectedDate) {
            // Fetch the agenda for the selected date from the server using AJAX
            // Replace the following with your actual AJAX implementation
            // ...

            // Simulate data for demonstration purposes
            const data = { description: `Agenda for ${selectedDate}` };

            // Update the agenda content based on the retrieved data
            const agendaContent = document.getElementById('agenda-content');
            agendaContent.innerHTML = data.description || 'No agenda for this day.';
        }
  </script>
</div>




{{-- Keterangan kegiatan --}}
<div class="w-50">
  @foreach ($agenda_kegiatan->take(3) as $item)
  @php
  $tanggalKegiatan = \Carbon\Carbon::parse($item->tanggal);
  $tanggalSekarang = \Carbon\Carbon::now();
  @endphp

  @if ($tanggalKegiatan->isSameDay($tanggalSekarang))
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

        <div class="d-flex">
          <div class="my-auto" id="dot-{{ $item->id }}">
            <dotlottie-player src="https://lottie.host/534d821f-20c2-4173-b8d4-b8a0e719ee64/mpgYgLfCR1.json"
              background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay>
            </dotlottie-player>
          </div>

          <!-- Perbaikan: Menambahkan elemen dengan ID status-text dinamis berdasarkan item ID -->
          <p id="status-{{ $item->id }}" class="m-0 text-blue">
            <small class="status-text"></small>
          </p>
        </div>

        <!-- Perbaikan: Memasukkan skrip status di dalam loop -->
        <script>
          function updateStatus{{ $item->id }}() {
                  var statusElement = document.querySelector("#status-{{ $item->id }} .status-text");
                  var dotElement = document.getElementById("dot-{{ $item->id }}");

                  var now = new Date();
                  var currentTime = now.getTime();

                  var waktuMulaiString = "{{ $item->tanggal }} {{ $item->waktu }}";
                  var waktuMulai = new Date(waktuMulaiString);

                  var duration = 10800000;

                  if (now.getFullYear() !== waktuMulai.getFullYear()) {
                      statusElement.innerHTML = 'Selesai';
                      dotElement.style.display = 'none';
                  } else if (currentTime >= waktuMulai.getTime() && currentTime <= waktuMulai.getTime() + duration) {
                      statusElement.innerHTML = 'Sedang Berlangsung';
                      dotElement.style.display = 'inline';
                  } else if (currentTime > waktuMulai.getTime() + duration) {
                      statusElement.innerHTML = 'Selesai';
                      dotElement.style.display = 'none';
                  } else if (currentTime >= waktuMulai.getTime()) {
                      var formattedTime = waktuMulai.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                      statusElement.innerHTML = formattedTime;
                      dotElement.style.display = 'none';
                  } else {
                      statusElement.innerHTML = 'Belum Dimulai';
                      dotElement.style.display = 'none';
                  }
              }

              updateStatus{{ $item->id }}();
              setInterval(updateStatus{{ $item->id }}, 1000);
        </script>
      </div>
    </div>
    @endif
    @endforeach
  </div>



  <div class="text-center mt-4 mb-5">
    <button class="btn rounded-5 py-2 px-4 fw-bold fs-md">
      Lihat Agenda Selengkapnya
    </button>
  </div>
</div>

{{-- Statistik Pengunjung --}}
<div class="bg-grey py-5">
  <div class="container">
    <div class="text-center">
      <p class="badge rounded-pill px-3 py-2 bg-blue text-yellow fw-bold m-0 fs-default">
        STATISTIK
      </p>

      <h1 class="fs-lg fw-bold mt-3 mb-5">
        STATISTIK PENGUNJUNG
      </h1>
    </div>

    <div class="row w-75 mx-auto">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card rounded-4 bg-blue">
          <div class="card-body">
            <h1 class="card-title text-yellow fs-lg fw-bold text-center">
              MINGGU INI
            </h1>
            <p class="card-text text-yellow fs-lg fw-bold text-center odometer">100
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card rounded-4 bg-blue">
          <div class="card-body">
            <h1 class="card-title text-yellow fs-lg fw-bold text-center">
              BULAN INI
            </h1>
            <p class="card-text text-yellow fs-lg fw-bold text-center odometer" id="odometer">0
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4 rounded-4">
        <div class="card rounded-4 bg-blue">
          <div class="card-body">
            <h1 class="card-title text-yellow fs-lg fw-bold text-center">
              TAHUN INI
            </h1>
            <p class="card-text text-yellow fs-lg fw-bold text-center odometer" id="odometer">0
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Partner --}}
<div class="py-5">
  p <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active d-flex">



        <a href="https://pu.go.id"><img
            src="{{ asset('storage/kementrian-pekerjaan-umum-dan-perumahan-rakyat-republik-indonesia.png') }}"
            class="d-block w-20" alt="..."></a>
        <a href="http://lpse.samarindakota.go.id/eproc4"><img src="{{ asset('storage/lpse-samarinda.png') }}"
            class="d-block w-20" alt="..."></a>
        <a href="https://sirup.lkpp.go.id/sirup/loginctr/index"><img
            src="{{ asset('storage/sistem-informasi-rencana-umum-pengadaan.png') }}" class="d-block w-20" alt="..."></a>
        <a href="https://gistaru.samarindakota.go.id"><img src="{{ asset('storage/webgis-pupt.png') }}"
            class="d-block w-20" alt="..."></a>
      </div>
    </div>
  </div>
</div>


@endsection