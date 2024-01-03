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
<div class="d-flex flex-row my-5">
  {{-- Foto Kepala Dinas --}}
  <div class=" ms-5 px-5">
    <img src="/assets/temp/desy-damayanti-st-mt.png" class="img-fluid" alt="">
  </div>

  {{-- Teks Kepala Dinas --}}
  <div class="card border-0 rounded-0 ms-auto w-75" style="background-color: #F8AC00;">
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
        Kami menampilkan Informasi dalam bentuk Pelayanan E-Government, sehingga seluruh masyarakat, dapat mengakses data terkait Perdagangan.
      </p>
    </div>
  </div>
</div>

{{-- Berita Terbaru PUPR Samarinda --}}
<div class="container">
  <h1 class="mb-4 text-center">
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

{{-- Struktur Organisasi (Bidang-bidang Kami) --}}
<div class="col" style="background-color: #F8AC00;">

</div>
    
@endsection