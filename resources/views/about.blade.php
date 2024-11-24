@extends('app.app')

@section('title', "About | kayawu")

@section('content')

<!-- Content -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Heading -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-primary">Tentang Kelurahan</h1>
            <p class="mt-3 text-gray-600">Informasi seputar kelurahan, visi, misi, dan layanan masyarakat.</p>
        </div>

        <!-- About Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="https://via.placeholder.com/600x400" alt="Kelurahan" class="rounded-lg shadow-lg">
            </div>
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">Sejarah Kelurahan</h2>
                <p class="mt-4 text-gray-600 leading-relaxed">
                    Kelurahan kami merupakan salah satu wilayah administrasi di Indonesia yang telah berdiri sejak tahun xxxx. Berlokasi di wilayah strategis, kelurahan ini memiliki sejarah panjang dalam memberikan pelayanan kepada masyarakat serta berperan aktif dalam pembangunan daerah.
                </p>
            </div>
        </div>
        
        <div class="pt-10">
            <p class="mt-4 text-gray-600 leading-relaxed">
                Kelurahan kami merupakan salah satu wilayah administrasi di Indonesia yang telah berdiri sejak tahun xxxx. Berlokasi di wilayah strategis, kelurahan ini memiliki sejarah panjang dalam memberikan pelayanan kepada masyarakat serta berperan aktif dalam pembangunan daerah.
            </p>
        </div>

        <!-- Visi dan Misi -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-center text-primary mb-6">Visi dan Misi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Visi</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">
                        "Mewujudkan kelurahan yang mandiri, maju, dan sejahtera melalui pelayanan yang berkualitas."
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Misi</h3>
                    <ul class="mt-2 text-gray-600 list-disc pl-5">
                        <li>Meningkatkan pelayanan publik yang efektif dan efisien.</li>
                        <li>Mendorong partisipasi masyarakat dalam pembangunan daerah.</li>
                        <li>Melestarikan nilai-nilai budaya dan tradisi lokal.</li>
                        <li>Meningkatkan kualitas pendidikan, kesehatan, dan ekonomi warga.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-center text-primary mb-6">Hubungi Kami</h2>
            <div class="text-center text-gray-600">
                <p>Alamat: Jl. Contoh Raya No. 123, Kelurahan Contoh, Kota Contoh</p>
                <p>Email: info@kelurahancontoh.go.id</p>
                <p>Telepon: +62 812-3456-7890</p>
            </div>
        </div>
    </div>
</section>

    
@endsection
    
