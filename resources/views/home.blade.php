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
    <div class="ms-auto w-75" style="background-color: #F8AC00;">
      <div class="">
        <p class="">
          SAMBUTAN KEPALA DINAS
        </p>

        <p class="fs-2">
          DESY DAMAYANTI S.T., M.T.
        </p>

        <p class=" fs-5">
          Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Samarinda
        </p>

        <p class="">
          Kami menampilkan Informasi dalam bentuk Pelayanan E-Government, sehingga seluruh masyarakat, dapat mengakses data terkait Perdagangan.
        </p>
      </div>
    </div>
</div>

    
@endsection