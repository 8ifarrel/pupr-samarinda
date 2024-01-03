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
<div class="d-flex flex-row mt-5 mb-5">
  {{-- Foto Kepala Dinas --}}
  <img src="/assets/temp/desy-damayanti-st-mt.png" class="img-fluid ms-5" alt="">

  {{-- Teks Kepala Dinas --}}
  <div class="ms-auto" style="background-color: #F8AC00;">
    <div class="m-5">
      <p class="m-0 p-0 mb-3 fs-5 fw-bold">
        SAMBUTAN KEPALA DINAS
      </p>

      <p class="fs-2 m-0 p-0 fw-bold">
        DESY DAMAYANTI S.T., M.T.
      </p>

      <p class=" fs-5 m-0 p-0 mb-4 fw-bold" style="color: rgba(0, 0, 0, 0.55 )">
        Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda
      </p>

      <p class="m-0 p-0">
        Kami menampilkan Informasi dalam bentuk Pelayanan E-Government, sehingga seluruh masyarakat, dapat mengakses data terkait Perdagangan.
      </p>
    </div>
  </div>
</div>

{{-- Berita PUPR Samarinda --}}
<div class="container">
  <div class="row">
    
    <?php for ($i = 0; $i < 6; $i++) { ?>
      <div class="col-md-4 mb-3">
        <div class="card h-100">
          <a href="">
            <div class="position-absolute m-2 bg-dark py-2 px-3 text-white border rounded" style="--bs-bg-opacity: .8;">
              Ini kategori pos
            </div>
          </a>
          
          <img src="https://source.unsplash.com/300x300?random"  class="card-img-top" alt="">
  
          <div class="card-body d-flex align-items-start flex-column">
            <h5 class="card-title">
              Ini judul
            </h5>
  
            <p>
              <small> 
                By 
                <a href="" class="text-decoration-none">
                  By Farrel
                </a> 
                16 jam lalu.
              </small>
            </p>
  
            <p class="card-text">
              Ini excerpt. Ini excerpt. Ini excerpt. Ini excerpt. Ini excerpt. Ini excerpt. Ini excerpt. Ini excerpt.
            </p>
  
            <a href="" class="btn btn-primary mt-auto">
              Read more
            </a>
          </div>
        </div>
      </div>
      <?php } ?>
  </div>
</div>
    
@endsection