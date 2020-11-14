@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"  style="height: 100vh; background-image: url(./img/carousel-1.jpg); background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Cari Movie Favoritmu</h2>
                    <p class="lead">Dapatkan pengalaman mencari dengan mudah seperti membalik telapak tangan.</p>
                </div>
            </div>
            <div class="carousel-item"  style="height: 100vh; background-image: url(./img/carousel-2.jpg); background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Masukkan Keranjang Movie</h2>
                    <p class="lead">Pilih bebas dan nikmati segala kemudahan memasukkan keranjang.</p>
                </div>
            </div>
            <div class="carousel-item"  style="height: 100vh; background-image: url(./img/carousel-3.jpg); background-size: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Beli Movie Idamanmu</h2>
                    <p class="lead">Cepat dan tanggap, tak perlu menunggu waktu lama untuk memesan semua movie.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection