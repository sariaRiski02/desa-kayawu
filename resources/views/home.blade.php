@extends('app.app')

@section('title', 'Desa Kayawu')

@section('content')
    <!-- Hero Section -->
    <div class="hero min-h-screen" style="background-image: url('{{ asset('storage/img/kayawu-lanscape.jpg') }}');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Selamat Datang di Desa Kayawu</h1>
                <p class="mb-5">Desa yang indah dan sejahtera, tempat di mana tradisi dan modernitas berpadu.</p>
            </div>
        </div>
    </div>

     <!-- Tentang Desa -->
     <div id="tentang" class="container mx-auto px-4 py-8">
        <div class="card lg:card-side bg-base-100 shadow-xl">
            <figure><img src="{{ asset('storage/img/kayawu-lanscape.jpg') }}" alt="Desa" class="w-full lg:w-96"/></figure>
            <div class="card-body">
                <h2 class="card-title">Tentang Desa Kayawu</h2>
                <p>Desa kami terletak di Tomohon utara, dengan sejarah panjang dan budaya yang kaya. Kami bangga dengan keberagaman dan semangat gotong royong.</p>
                <div class="card-actions justify-end">
                    <a href="{{ route('about') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Potensi Desa -->
    <div id="potensi" class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-center mb-8">Potensi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('storage/img/pertanian.jpg') }}" alt="Pertanian" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Pertanian</h2>
                    <p>Desa kami memiliki lahan pertanian yang subur</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img  src="{{ asset('storage/img/pertanian.jpg') }}" alt="Peternakan" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Peternakan</h2>
                    <p>Pengembangan peternakan yang modern</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="{{ asset('storage/img/pertanian.jpg') }}" alt="Pariwisata" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Pariwisata</h2>
                    <p>Destinasi wisata yang menarik</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Kontak -->
    
    <!-- Data Demografi -->
<!-- Data Demografi -->
<div id="demografi" class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center mb-8">Data Demografi</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body text-center">
                <h2 class="card-title">Jumlah Penduduk</h2>
                <p class="text-5xl font-bold">1,234</p>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body text-center">
                <h2 class="card-title">Laki-laki</h2>
                <p class="text-5xl font-bold">600</p>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body text-center">
                <h2 class="card-title">Perempuan</h2>
                <p class="text-5xl font-bold">634</p>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body text-center">
                <h2 class="card-title">Keluarga</h2>
                <p class="text-5xl font-bold">300</p>
            </div>
        </div>
    </div>
</div>
        <!-- Pemerintahan -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('storage/img/kepala-desa.png') }}" alt="Kepala Desa" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Kepala Desa</h2>
                    <p>[Nama Kepala Desa]</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('storage/img/kepala-desa.png') }}" alt="Sekretaris Desa" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Sekretaris Desa</h2>
                    <p>[Nama Sekretaris Desa]</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('storage/img/kepala-desa.png') }}" alt="Bendahara Desa" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Bendahara Desa</h2>
                    <p>[Nama Bendahara Desa]</p>
                </div>
            </div>
        </div>
        
    
        <!-- Berita -->
        <div id="berita" class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center mb-8">Berita Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4b9.jpg" alt="Berita 1" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Berita Desa Terbaru</h2>
                        <p>Informasi terkini seputar kegiatan dan perkembangan desa</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4b9.jpg" alt="Berita 2" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Kegiatan Masyarakat</h2>
                        <p>Berbagai kegiatan positif yang dilakukan warga desa</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4b9.jpg" alt="Berita 3" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Pembangunan Desa</h2>
                        <p>Progres dan rencana pembangunan infrastruktur desa</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
