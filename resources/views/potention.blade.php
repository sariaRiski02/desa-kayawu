@extends('app.app')

@section('title', 'potensi')

@section('content')
<div class="container mx-auto py-12 px-6">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Potensi Desa</h1>
    <p class="text-center text-lg text-gray-600 mb-12">Selamat datang di halaman potensi desa. Di sini Anda dapat menemukan informasi mengenai berbagai potensi yang dimiliki oleh desa kami.</p>

    <!-- Potensi Highlights -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-green-600 mb-3">Pertanian</h3>
            <p class="text-gray-500">Desa kami memiliki lahan pertanian yang subur dan menghasilkan berbagai macam hasil bumi seperti padi, jagung, dan sayuran.</p>
        </div>
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-blue-600 mb-3">Pariwisata</h3>
            <p class="text-gray-500">Desa kami memiliki tempat wisata yang indah seperti pegunungan, dan situs bersejarah serta Goa Jepang Kayawu yang menarik banyak wisatawan.</p>
        </div>
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-red-600 mb-3">Pengolahan Gula Aren</h3>
            <p class="text-gray-500">Desa kami memiliki petani gula aren yang mengolah gula aren secara tradisional, menghasilkan produk berkualitas tinggi yang diminati banyak orang.</p>
        </div>
    </div>

    <!-- Potensi Details with Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <img src="{{ asset('storage/img/pertanian.jpg') }}" alt="Pertanian" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 mb-2">Pertanian</h5>
                <p class="text-gray-600">Desa kami memiliki lahan pertanian yang subur dan menghasilkan berbagai macam hasil bumi seperti padi, dan sayur-sayuran.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <img src="{{ asset('storage/img/goa-kayawu.jpg') }}" alt="Pariwisata" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 mb-2">Pariwisata</h5>
                <p class="text-gray-600">Desa kami memiliki tempat wisata yang indah seperti, pegunungan, dan situs bersejarah seperti goa jepang yang menarik banyak wisatawan.</p>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <img src="{{ asset('storage/img/gula-aren.jpg') }}" alt="Pengolahan Gula Aren" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 mb-2">Pengolahan Gula Aren</h5>
                <p class="text-gray-600">Desa kami memiliki petani yang memproduksi gula aren secara tradisional, menghasilkan produk berkualitas tinggi yang sangat diminati.</p>
            </div>
        </div>
    </div>
</div>
@endsection