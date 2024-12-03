@extends('app.app')

@section('title', 'Dashboard')

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
            <p class="text-gray-500">Desa kami memiliki tempat wisata yang indah seperti air terjun, pegunungan, dan kebun teh yang menarik banyak wisatawan.</p>
        </div>
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-yellow-600 mb-3">Kerajinan Tangan</h3>
            <p class="text-gray-500">Desa kami terkenal dengan kerajinan tangan seperti anyaman bambu, ukiran kayu, dan tenun tradisional yang memiliki nilai seni tinggi.</p>
        </div>
    </div>

    <!-- Potensi Details with Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <img src="path/to/pertanian.jpg" alt="Pertanian" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 mb-2">Pertanian</h5>
                <p class="text-gray-600">Desa kami memiliki lahan pertanian yang subur dan menghasilkan berbagai macam hasil bumi seperti padi, jagung, dan sayuran.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <img src="path/to/pariwisata.jpg" alt="Pariwisata" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 mb-2">Pariwisata</h5>
                <p class="text-gray-600">Desa kami memiliki tempat wisata yang indah seperti air terjun, pegunungan, dan kebun teh yang menarik banyak wisatawan.</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
            <img src="path/to/kerajinan.jpg" alt="Kerajinan Tangan" class="w-full h-48 object-cover">
            <div class="p-6">
                <h5 class="text-xl font-semibold text-gray-800 mb-2">Kerajinan Tangan</h5>
                <p class="text-gray-600">Desa kami terkenal dengan kerajinan tangan seperti anyaman bambu, ukiran kayu, dan tenun tradisional yang memiliki nilai seni tinggi.</p>
            </div>
        </div>
    </div>
</div>
@endsection