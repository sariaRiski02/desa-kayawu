@extends('app.app')

@section('title', 'Desa Kayawu')

@section('content')
        <!-- Hero Section -->
        <div class="hero min-h-screen" style="background-image: url('{{ asset('storage/img/kayawu-lanscape.jpg') }}');">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Selamat Datang di kelurahan Kayawu</h1>
                    <p class="mb-5">kelurahan yang indah dan sejahtera, tempat di mana tradisi dan modernitas berpadu.</p>
                </div>
            </div>
        </div>

        <!-- Tentang kelurahan -->
        <div id="tentang" class="container mx-auto px-4 py-8">
            <div class="card lg:card-side bg-base-100 shadow-xl">
                <figure><img src="{{ asset('storage/img/kayawu-lanscape.jpg') }}" alt="kelurahan" class="w-full lg:w-96"/></figure>
                <div class="card-body">
                    <h2 class="card-title">Tentang kelurahan Kayawu</h2>
                    <p>kelurahan kami terletak di Tomohon utara, dengan sejarah panjang dan budaya yang kaya. Kami bangga dengan keberagaman dan semangat gotong royong.</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('about') }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Potensi kelurahan -->
        <div id="potensi" class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center mb-8">Potensi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="{{ asset('storage/img/pertanian.jpg') }}" alt="Pertanian" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Pertanian</h2>
                        <p>kelurahan kami memiliki lahan pertanian yang subur</p>
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
            <div class="flex justify-center mt-8">
                <a href="{{ route('potention') }}" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    
        <!-- Data Demografi -->
        <div id="demografi" class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center mb-8">Data Demografi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center">
                        <h2 class="card-title">Jumlah Penduduk</h2>
                        <p class="text-5xl font-bold">2809</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center">
                        <h2 class="card-title">Laki-laki</h2>
                        <p class="text-5xl font-bold">1433</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center">
                        <h2 class="card-title">Perempuan</h2>
                        <p class="text-5xl font-bold">1376</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body text-center">
                        <h2 class="card-title">Keluarga</h2>
                        <p class="text-5xl font-bold">871</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <a href="{{ route('demo') }}" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <!-- Pemerintahan -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('storage/images/lurah-kayawu.jpg') }}" alt="Kepala kelurahan" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Kepala kelurahan</h2>
                    <p>Ferry E. M. M. Pojoh S.Pd</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('storage/images/sekretaris.jpg') }}" alt="Sekretaris kelurahan" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Sekretaris kelurahan</h2>
                    <p>Anita. E. Lolong, S.AP</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('storage/images/kepala-seksi-edit.jpg') }}" alt="Bendahara kelurahan" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Kepala Seksi Pemerintahan</h2>
                    <p>Yanti A. Longdong, S.E</p>
                </div>
            </div>
        </div>
        
    
        <div id="berita" class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center mb-8">Berita Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($post as $item)
                <div class="card bg-base-100 shadow-xl border-5">
                    @if (!empty($item->image))
                        <figure>
                            <img src="{{ asset('/storage/'.$item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                        </figure>
                    @else
                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500 text-lg font-semibold">Kayawu News</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <h2 class="card-title">{{ $item->title }}</h2>
                        <p>{!! Str::words(strip_tags($item->content), 5) !!}</p>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary" href="{{ route('single.post', $item->slug) }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-8">
                <a href="{{ route('news') }}" class="btn btn-primary">Lihat Semua Berita</a>
            </div>
        </div>
        
@endsection
