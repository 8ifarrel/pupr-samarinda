@extends('layouts.main')

@section('container')

{{-- Gambar Slide --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    {{-- <div class="carousel-item" data-bs-interval="2000">
      <img src="/assets/temp/slide_1.jpg" class="d-block w-20" alt="...">
    </div> --}}

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

  <div class="card rounded-4 w-75 mx-auto border border-secondary bg-blue-18">
    <div class="card-body">
      <div class="btn-group d-flex justify-content-between" role="group" aria-label="Basic radio toggle button group">

        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['senin']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio1">
          <p class="m-0">
            {{ $tanggal_minggu_ini['senin'] }}
          </p>

          <p class="m-0">
            Senin
          </p>
          <img src="assets/element/dot-original.svg" alt="">
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['selasa']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio2">
          <p class="m-0">
            {{ $tanggal_minggu_ini['selasa'] }}
          </p>

          <p class="m-0">
            Selasa
          </p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['rabu']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio3">
          <p class="m-0">
            {{ $tanggal_minggu_ini['rabu'] }}
          </p>

          <p class="m-0">
            Rabu
          </p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['kamis']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio4">
          <p class="m-0">
            {{ $tanggal_minggu_ini['kamis'] }}
          </p>

          <p class="m-0">
            Kamis
          </p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['jumat']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-blue" for="btnradio5">
          <p class="m-0">
            {{ $tanggal_minggu_ini['jumat'] }}
          </p>

          <p class="m-0">
            Jumat
          </p>
          <img src="assets/element/dot-original.svg" alt="">
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['sabtu']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-red" for="btnradio6">
          <p class="m-0" id="sabtu">
            {{ $tanggal_minggu_ini['sabtu'] }}
          </p>

          <p class="m-0">
            Sabtu
          </p>
        </label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off" {{
          (intval(date('d'))===$tanggal_minggu_ini['minggu']) ? 'checked' : '' }}>
        <label class="btn border border-0 rounded-4 fs-md fw-semibold text-red" for="btnradio7">
          <p class="m-0" id="minggu">
            {{ $tanggal_minggu_ini['minggu'] }}
          </p>
          <p class="m-0">
            Minggu
          </p>
        </label>
      </div>
    </div>
  </div>

  <div class="w-75 mx-auto mt-4 mb-3 me-5">
    <p class="m-0 text-blue fs-md">
      Terdapat <span class="fw-bold">3 kegiatan</span>
    </p>
  </div>

  <div class="d-flex justify-content-center">
    {{-- Garis dan titik --}}
    <div class="d-flex flex-column me-4">
      @php $tanggalKegiatanCount = $agenda_kegiatan->where('tanggal', $item->tanggal)->count(); @endphp

      @for ($i = 0; $i < $tanggalKegiatanCount; $i++) <div
        class="p-1 bg-black border border-light rounded-circle mx-auto" style="height: 15px; width: 15px;">
    </div>

    @if ($i < $tanggalKegiatanCount - 1) <div class="d-flex bg-black mx-auto" style="height: 151.9px; width: 2px;">
      <div class="vr"></div>
  </div>
  @endif
  @endfor
</div>

<style>
  .d-flex.flex-column.me-4 {
    position: relative;
  }

  .d-flex.flex-column.me-4 .vr {
    background-color: #000;
    width: 2px;
    height: 100%;
    margin: 0 auto;
  }
</style>




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
            <p class="card-text text-yellow fs-lg fw-bold text-center">
              180
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
            <p class="card-text text-yellow fs-lg fw-bold text-center">
              2004
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
            <p class="card-text text-yellow fs-lg fw-bold text-center">
              180504
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Partner --}}
<div class="py-5">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
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