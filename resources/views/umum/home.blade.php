@extends('layouts.main')

@section('container')

{{-- Gambar Slide --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="/assets/img/slides/slide_3.jpg" class="d-block w-20" alt="..." style="filter: brightness(35%);">
            <div class="container">
                <div class="carousel-caption d-flex justify-content-center flex-column h-100">
                    <h1 class="fw-bold fs-xl pb-2">Website Resmi Dinas Pekerjaan Umum dan Penantaan Ruang Kota Samarinda
                    </h1>
                    <p class="fs-md">Selamat datang di website Dinas Pekerjaan Umum dan Penantaan Ruang Kota Samarinda,
                        tempat
                        informasi mengenai pembangunan, pemeliharaan, dan pengelolaan infrastruktur, serta tata ruang
                        dan pengawasan
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