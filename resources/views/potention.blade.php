@extends('app.app')

@section('title', 'dashboard')


@section('content')

<div class="container">
    <h1>Potensi Desa</h1>
    <p>Selamat datang di halaman potensi desa. Di sini Anda dapat menemukan informasi mengenai berbagai potensi yang dimiliki oleh desa kami.</p>
    
    <div class="row">
        <div class="col-md-4">
            <h3>Pertanian</h3>
            <p>Desa kami memiliki lahan pertanian yang subur dan menghasilkan berbagai macam hasil bumi seperti padi, jagung, dan sayuran.</p>
        </div>
        <div class="col-md-4">
            <h3>Pariwisata</h3>
            <p>Desa kami memiliki tempat wisata yang indah seperti air terjun, pegunungan, dan kebun teh yang menarik banyak wisatawan.</p>
        </div>
        <div class="col-md-4">
            <h3>Kerajinan Tangan</h3>
            <p>Desa kami terkenal dengan kerajinan tangan seperti anyaman bambu, ukiran kayu, dan tenun tradisional yang memiliki nilai seni tinggi.</p>
        </div>
    </div>
</div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="path/to/pertanian.jpg" class="card-img-top" alt="Pertanian">
                <div class="card-body">
                    <h5 class="card-title">Pertanian</h5>
                    <p class="card-text">Desa kami memiliki lahan pertanian yang subur dan menghasilkan berbagai macam hasil bumi seperti padi, jagung, dan sayuran.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="path/to/pariwisata.jpg" class="card-img-top" alt="Pariwisata">
                <div class="card-body">
                    <h5 class="card-title">Pariwisata</h5>
                    <p class="card-text">Desa kami memiliki tempat wisata yang indah seperti air terjun, pegunungan, dan kebun teh yang menarik banyak wisatawan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="path/to/kerajinan.jpg" class="card-img-top" alt="Kerajinan Tangan">
                <div class="card-body">
                    <h5 class="card-title">Kerajinan Tangan</h5>
                    <p class="card-text">Desa kami terkenal dengan kerajinan tangan seperti anyaman bambu, ukiran kayu, dan tenun tradisional yang memiliki nilai seni tinggi.</p>
                </div>
            </div>
        </div>
    </div>
@endsection