@extends('app.app')


@section('title', 'Demografi | kayawu')

@section('content')

    <div class="min-h-screen bg-base-200">
        <!-- Hero Section -->
        <div class="hero bg-base-100 py-8">
            <div class="hero-content text-center">
                <div>
                    <h1 class="text-5xl font-bold text-primary">Demografi</h1>
                    <p class="py-6">Informasi lengkap mengenai struktur dan karakteristik penduduk</p>
                </div>
            </div>
        </div>

        <div class="p-6">
            <h1 class="text-2xl font-bold text-center mb-6">Data Penduduk Desa</h1>
        
            <!-- Flexbox untuk Diagram Batang -->
            <div class="flex items-end justify-between h-64">
                <div class="flex flex-col items-center justify-content-start border w-full h-full">
                    <div class="bg-blue-500 text-center text-white w-full" style="height: 50%">50%</div>
                    <div class="mt-2 border">RT 01</div>
                </div>
                <div class="flex flex-col items-center border w-full w-full h-full">
                    <div class="bg-yellow-500 text-center text-white w-full" style="height: 70%">70%</div>
                    <div class="mt-2">RT 02</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="bg-red-500 text-center text-white w-full" style="height: 30%">30%</div>
                    <div class="mt-2">RT 03</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="bg-green-500 text-center text-white w-full" style="height: 90%">90%</div>
                    <div class="mt-2">RT 04</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="bg-purple-500 text-center text-white w-full" style="height: 60%">60%</div>
                    <div class="mt-2">RT 05</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="bg-teal-500 text-center text-white w-full" style="height: 40%">40%</div>
                    <div class="mt-2">RT 06</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="bg-indigo-500 text-center text-white w-full" style="height: 75%">75%</div>
                    <div class="mt-2">RT 07</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="bg-pink-500 text-center text-white w-full" style="height: 35%">35%</div>
                    <div class="mt-2">RT 08</div>
                </div>
            </div>
        </div>
        
            
            
            
            

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Jumlah Penduduk Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Jenis kelamin
                        </h2>
                    <div class="flex items-end justify-between h-64">
                        <div class="flex flex-col items-center w-full h-full">
                            <div class="bg-blue-500 text-center text-white w-full" style="height: 60%">60%</div>
                            <div class="mt-2">Laki-laki</div>
                        </div>
                        <div class="flex flex-col items-center w-full h-full">
                            <div class="bg-pink-500 text-center text-white w-full" style="height: 40%">40%</div>
                            <div class="mt-2">Perempuan</div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Struktur Penduduk Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            2. Struktur Penduduk
                        </h2>
                        <div class="collapse collapse-plus bg-base-200">
                            <input type="checkbox" /> 
                            <div class="collapse-title font-medium">
                                Jenis Kelamin
                            </div>
                            <div class="collapse-content"> 
                                <p>Laki-laki dan perempuan, rasio jenis kelamin</p>
                            </div>
                        </div>
                        <div class="collapse collapse-plus bg-base-200">
                            <input type="checkbox" /> 
                            <div class="collapse-title font-medium">
                                Kelompok Umur
                            </div>
                            <div class="collapse-content"> 
                                <ul class="list-disc list-inside">
                                    <li>Anak-anak (0-14 tahun)</li>
                                    <li>Usia produktif (15-64 tahun)</li>
                                    <li>Usia lanjut (65 tahun ke atas)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="collapse collapse-plus bg-base-200">
                            <input type="checkbox" /> 
                            <div class="collapse-title font-medium">
                                Status Perkawinan
                            </div>
                            <div class="collapse-content"> 
                                <ul class="list-disc list-inside">
                                    <li>Belum menikah</li>
                                    <li>Menikah</li>
                                    <li>Cerai hidup</li>
                                    <li>Cerai mati</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Distribusi Penduduk Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            3. Distribusi Penduduk
                        </h2>
                        <ul class="list-disc list-inside">
                            <li>Persebaran penduduk di wilayah tertentu</li>
                            <li>Kepadatan penduduk per kilometer persegi</li>
                        </ul>
                    </div>
                </div>

                <!-- Pendidikan Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                            4. Pendidikan
                        </h2>
                        <ul class="list-disc list-inside">
                            <li>Tingkat pendidikan tertinggi yang ditempuh</li>
                            <li>Tingkat melek huruf</li>
                        </ul>
                    </div>
                </div>

                <!-- Kesehatan Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            5. Kesehatan
                        </h2>
                        <ul class="list-disc list-inside">
                            <li>Angka kelahiran dan kematian</li>
                            <li>Angka harapan hidup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


    
@endsection

