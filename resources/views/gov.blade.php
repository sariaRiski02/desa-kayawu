@extends('app.app')

@section('title', 'kayawu | pemerintahan')


@section('content')
    
<!-- Content -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Heading -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-primary">Pemerintahan Kelurahan Kayawu</h1>
            <p class="mt-3 text-gray-600">Mengenal lebih dekat struktur, tugas, dan fungsi pemerintahan kelurahan.</p>
        </div>

        <!-- Struktur Pemerintahan -->
        <div class="mt-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Struktur Organisasi</h2>
            <div class="text-center">
                <img src="https://via.placeholder.com/800x400" alt="Struktur Organisasi" class="rounded-lg shadow-lg mx-auto">
            </div>
            <p class="mt-4 text-gray-600 text-center">
                Struktur organisasi kelurahan terdiri dari Lurah, Sekretaris, Kepala Seksi (Kasi), dan staf pendukung lainnya. Setiap bagian memiliki tugas dan tanggung jawab yang saling mendukung dalam memberikan pelayanan terbaik kepada masyarakat.
            </p>
        </div>

        <!-- Tugas dan Fungsi -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Tugas dan Fungsi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Tugas</h3>
                    <ul class="mt-4 text-gray-600 list-disc pl-5">
                        <li>Menyelenggarakan administrasi pemerintahan di tingkat kelurahan.</li>
                        <li>Melaksanakan kebijakan pemerintah daerah di tingkat kelurahan.</li>
                        <li>Membina ketentraman dan ketertiban masyarakat.</li>
                        <li>Memberikan pelayanan publik kepada masyarakat.</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Fungsi</h3>
                    <ul class="mt-4 text-gray-600 list-disc pl-5">
                        <li>Pelayanan administrasi kependudukan, seperti pembuatan KTP dan KK.</li>
                        <li>Koordinasi program pembangunan di tingkat kelurahan.</li>
                        <li>Pendampingan kegiatan masyarakat untuk kesejahteraan sosial.</li>
                        <li>Peningkatan partisipasi warga dalam kegiatan lingkungan.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Informasi Lurah -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Profil Lurah</h2>
            <div class="flex flex-col md:flex-row items-center gap-8">
                <img src="https://via.placeholder.com/200x200" alt="Foto Lurah" class="rounded-full shadow-lg">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Nama Lurah</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Bapak/Ibu [Nama Lurah] telah menjabat sebagai Lurah sejak tahun xxxx. Dengan dedikasi tinggi, beliau memimpin pemerintahan kelurahan untuk memberikan pelayanan terbaik dan mewujudkan visi kelurahan yang maju dan sejahtera.
                    </p>
                </div>
            </div>
        </div>

        <!-- Layanan Pemerintahan -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Layanan Pemerintahan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Administrasi Kependudukan</h3>
                    <p class="mt-2 text-gray-600">Pelayanan pembuatan KTP, KK, surat pindah, dan surat keterangan lainnya.</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Pengurusan Izin</h3>
                    <p class="mt-2 text-gray-600">Pengurusan izin usaha kecil, izin keramaian, dan rekomendasi lainnya.</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Kesejahteraan Sosial</h3>
                    <p class="mt-2 text-gray-600">Program bantuan sosial dan pemberdayaan masyarakat kurang mampu.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection