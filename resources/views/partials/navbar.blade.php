<div class="fs-md">
  <div class="my-3" style="margin-right: 100px; margin-left: 100px">
    <div class="d-flex justify-content-between container-fluid text-blue">
      {{-- Logo --}}
      <div class="d-flex justify-content-start">
        <a class="pe-2" href="#">
          <img src="{{ asset('assets/logo/kota-samarinda.png') }}" alt="kota-samarinda" style="width: 54px">
        </a>
        <a class="pe-2" href="#">
          <img src="{{ asset('assets/logo/dpupr-kota-samarinda.png') }}" alt="dpupr-kota-samarinda" style="height: 54px">
        </a>
        <p class="fw-bold m-0">
          DINAS PEKERJAAN UMUM DAN <br> PENATAAN RUANG KOTA SAMARINDA
        </p>
      </div>

      {{-- Jam --}}
      <div class="d-flex justify-content-end align-items-center">
        <p class="m-0 fw-bold" id="current-time"></p>
      </div>
    </div>
  </div>
</div>

{{-- Menu navbar --}}
<nav class="navbar navbar-expand-lg sticky-top bg-blue">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav mx-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">
            Beranda
          </a>
        </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profil Kepala</a></li>
              <li><a class="dropdown-item" href="#">Riwayat Pimpinan</a></li>
              <li><a class="dropdown-item" href="#">Sejarah Kota Samarinda</a></li>
              <li><a class="dropdown-item" href="#">Sejarah DPUPR Kota Samarinda</a></li>
              <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="#">Tugas Pokok dan Fungsi</a></li>
              <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Dinas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pengumuman</a></li>
              <li><a class="dropdown-item" href="#">Berita</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bidang Teknis
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Sekretariat</a></li>
              <li><a class="dropdown-item" href="#">Bidang Bina Konstruksi</a></li>
              <li><a class="dropdown-item" href="#">Bidang Bina Marga</a></li>
              <li><a class="dropdown-item" href="#">Bidang Cipta Karya</a></li>
              <li><a class="dropdown-item" href="#">Bidang Pertahanan</a></li>
              <li><a class="dropdown-item" href="#">Bidang Sumber Daya Air</a></li>
              <li><a class="dropdown-item" href="#">Bidang Tata Ruang</a></li>
              <li><a class="dropdown-item" href="#">UPTD Pemeliharaan Jalan dan Jembatan</a></li>
              <li><a class="dropdown-item" href="#">UPTD Pemeliharaan Saluran Drainase dan Irigasi</a></li>
              <li><a class="dropdown-item" href="#">UPTD Pengelolaan Air Limbah Domestik</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PPID Pelaksana
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Peraturan Keputusan dan Kebijakan</a></li>
              <li><a class="dropdown-item" href="#">Dokumen SAKIP</a></li>
              <li><a class="dropdown-item" href="#">Informasi yang Wajib Disediakan dan Diumumkan Secara Berkala</a></li>
              <li><a class="dropdown-item" href="#">Informasi yang Wajib Diumumkan Secara Serta-merta</a></li>
              <li><a class="dropdown-item" href="#">Informasi yang Wajib Tersedia Setiap Saat</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SKM
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">LAPOR!</a></li>
              <li><a class="dropdown-item" href="#">Kuesioner Survei Kepuasan Masyarakat</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Aplikasi Hantu Banyu</a></li>
              <li><a class="dropdown-item" href="#">Aplikasi UPTD Limbah</a></li>
              <li><a class="dropdown-item" href="#">Aplikasi Parit</a></li>
              <li><a class="dropdown-item" href="#">Aplikasi UPTD Jalan</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              E-Library
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Galeri</a></li>
              <li><a class="dropdown-item" href="#">Video</a></li>
              <li><a class="dropdown-item" href="#">Infografis</a></li>
            </ul>
          </li>

        <li class="nav-item">
          <button class="btn fw-bold rounded-4 py-2 px-4 ">
            Pelayanan 
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>