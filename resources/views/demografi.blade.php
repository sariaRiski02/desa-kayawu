@extends('app.app')

@section('title', 'Demografi | kayawu')

@section('content')
    <div class="min-h-screen bg-base-200">
        <!-- Hero Section -->
        <div class="hero bg-base-100 py-8">
            <div class="hero-content text-center">
                <div>
                    <h1 class="text-5xl font-bold text-primary">Demografi</h1>
                    <p class="py-6">Informasi lengkap mengenai data kependudukan dan karakteristik penduduk</p>
                </div>
            </div>
        </div>

        <h1 class="text-2xl font-bold text-center mb-3 pt-4">Persentase penduduk per Lingkungan</h1>
        <div class="p-6">
            

        
            <!-- Flexbox untuk Diagram Batang -->
            
            <div class="flex items-end justify-between h-64 border bg-white shadow-xl rounded rounded-5">
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 01</div>
                    <div class="bg-blue-500 text-center text-white w-full" style="height: {{ number_format((346/2809) * 100, 2) }}%">{{ number_format((346/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 02</div>
                    <div class="bg-yellow-500 text-center text-white w-full" style="height: {{ number_format((328/2809) * 100, 2) }}%">{{ number_format((328/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 03</div>
                    <div class="bg-red-500 text-center text-white w-full" style="height: {{ number_format((357/2809) * 100, 2) }}%">{{ number_format((357/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 04</div>
                    <div class="bg-green-500 text-center text-white w-full" style="height: {{ number_format((404/2809) * 100, 2) }}%">{{ number_format((404/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 05</div>
                    <div class="bg-purple-500 text-center text-white w-full" style="height: {{ number_format((351/2809) * 100, 2) }}%">{{ number_format((351/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 06</div>
                    <div class="bg-teal-500 text-center text-white w-full" style="height: {{ number_format((339/2809) * 100, 2) }}%">{{ number_format((339/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 07</div>
                    <div class="bg-indigo-500 text-center text-white w-full" style="height: {{ number_format((370/2809) * 100, 2) }}%">{{ number_format((370/2809) * 100, 2) }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 08</div>
                    <div class="bg-pink-500 text-center text-white w-full" style="height: {{ number_format((314/2809) * 100, 2) }}%">{{ number_format((314/2809) * 100, 2) }}%</div>
                </div>
            </div>
        </div>


        <div class="p-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Card Jumlah Penduduk -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body text-center">
                <h2 class="card-title text-primary text-lg">Jumlah Penduduk</h2>
                <p class="text-2xl font-bold">2811</p>
                </div>
            </div>
            <!-- Card Jumlah KK -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body text-center">
                <h2 class="card-title text-primary text-lg">Jumlah KK</h2>
                <p class="text-2xl font-bold">871</p>
                </div>
            </div>
            <!-- Card Jumlah Laki-laki -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body text-center">
                <h2 class="card-title text-primary text-lg">Jumlah Laki-laki</h2>
                <p class="text-2xl font-bold">1433</p>
                </div>
            </div>
            <!-- Card Jumlah Perempuan -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body text-center">
                <h2 class="card-title text-primary text-lg">Jumlah Perempuan</h2>
                <p class="text-2xl font-bold">1376</p>
                </div>
            </div>
            </div>
        </div>


        <div class="bg-gray-200">

            <div class="container mx-auto p-8">
                <h2 class="text-2xl font-bold text-center text-black mb-10">Agama Penduduk</h2>
        
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <!-- KRISTEN PROTESTAN -->
                    <div class="flex flex-col items-center bg-secondary p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <div class="w-20 h-60 bg-white rounded-lg mb-4" style="height: 45%"></div>
                        <span class="text-xl font-semibold text-white">KRISTEN PROTESTAN</span>
                        <span class="text-sm text-white opacity-70">2664</span>
                    </div>
        
                    <!-- KRISTEN KATOLIK -->
                    <div class="flex flex-col items-center bg-accent p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <div class="w-20 h-60 bg-white rounded-lg mb-4" style="height: 30%"></div>
                        <span class="text-xl font-semibold text-white">KRISTEN KATOLIK</span>
                        <span class="text-sm text-white opacity-70">134</span>
                    </div>
        
                    <!-- ISLAM -->
                    <div class="flex flex-col items-center bg-primary p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <div class="w-20 h-60 bg-white rounded-lg mb-4" style="height: 70%"></div>
                        <span class="text-xl font-semibold text-white">ISLAM</span>
                        <span class="text-sm text-white opacity-70">17</span>
                    </div>

                    
        
        
                </div>
            </div>
        
        </div>
        
        
        <div class="space-y-4 px-6 mb-3">
            <h1 class="text-xl font-bold text-center mb-3 pt-4">
                Jumlah penduduk perlingkungan
            </h1>
            <!-- Looping untuk setiap lingkungan dengan card styling -->
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 1 (L: 185 | P: 161)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="185" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="161" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 2 (L: 172 | P: 156)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="172" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="156" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 3 (L: 178 | P: 179)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="178" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="179" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 4 (L: 200 | P: 204)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="200" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="204" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 5 (L: 182 | P: 169)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="182" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="169" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 6 (L: 175 | P: 164)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="175" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="164" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 7 (L: 193 | P: 177)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="193" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="177" max="200"></progress>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl p-4">
                <label class="block font-medium mb-3">Lingkungan 8 (L: 148 | P: 166)</label>
                <div class="flex items-center space-x-2">
                    <progress class="progress progress-primary h-4 w-1/2" value="148" max="200"></progress>
                    <progress class="progress progress-accent h-4 w-1/2" value="166" max="200"></progress>
                </div>
            </div>
        </div>
        

        <div class="card bg-base-100 shadow-xl mb-3 mx-5">
            <div class="card-body">
                <h2 class="card-title text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5z" />
                    </svg>
                    Kategori Umur
                </h2>
                <div class="space-y-2">
                    <!-- Age Category 0-20 -->
                    <div>
                        <label class="block text-sm font-medium mb-1">0-20 (L: 414 | P: 420)</label>
                        <progress class="progress progress-primary w-full mb-1" value="414" max="500"></progress>
                        <progress class="progress progress-secondary w-full" value="420" max="500"></progress>
                    </div>
                    <!-- Age Category 21-40 -->
                    <div>
                        <label class="block text-sm font-medium mb-1">21-40 (L: 445 | P: 404)</label>
                        <progress class="progress progress-primary w-full mb-1" value="445" max="500"></progress>
                        <progress class="progress progress-secondary w-full" value="404" max="500"></progress>
                    </div>
                    <!-- Age Category 41-60 -->
                    <div>
                        <label class="block text-sm font-medium mb-1">41-60 (L: 380 | P: 362)</label>
                        <progress class="progress progress-primary w-full mb-1" value="380" max="500"></progress>
                        <progress class="progress progress-secondary w-full" value="362" max="500"></progress>
                    </div>
                    <!-- Age Category 61-80 -->
                    <div>
                        <label class="block text-sm font-medium mb-1">61-80 (L: 178 | P: 170)</label>
                        <progress class="progress progress-primary w-full mb-1" value="178" max="500"></progress>
                        <progress class="progress progress-secondary w-full" value="170" max="500"></progress>
                    </div>
                    <!-- Age Category 81-100 -->
                    <div>
                        <label class="block text-sm font-medium mb-1">81-100 (L: 10 | P: 26)</label>
                        <progress class="progress progress-primary w-full mb-1" value="10" max="500"></progress>
                        <progress class="progress progress-secondary w-full" value="26" max="500"></progress>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="bg-gray-100">
            <div class="container mx-auto p-8">
                <h2 class="text-2xl font-bold text-center mb-8">Jumlah Penduduk Berdasarkan Pekerjaan</h2>
                
                <!-- Pekerjaan 1 - PELAJAR/MAHASISWA -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">PELAJAR/MAHASISWA</span>
                        <span class="font-semibold">634</span>
                    </div>
                    <progress class="progress progress-primary w-full" value="634" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 2 - BELUM/TIDAK BEKERJA -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">BELUM/TIDAK BEKERJA</span>
                        <span class="font-semibold">1025</span>
                    </div>
                    <progress class="progress progress-secondary w-full" value="1025" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 3 - PETANI/PEKEBUN -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">PETANI/PEKEBUN</span>
                        <span class="font-semibold">438</span>
                    </div>
                    <progress class="progress progress-accent w-full" value="438" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 4 - KARYAWAN SWASTA -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">KARYAWAN SWASTA</span>
                        <span class="font-semibold">248</span>
                    </div>
                    <progress class="progress progress-success w-full" value="248" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 8 - Guru -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">Guru</span>
                        <span class="font-semibold">32</span>
                    </div>
                    <progress class="progress progress-info w-full" value="32" max="1000"></progress>
                </div>

                <!-- Pekerjaan 5 - SOPIR -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">SOPIR</span>
                        <span class="font-semibold">35</span>
                    </div>
                    <progress class="progress progress-warning w-full" value="35" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 6 - WIRASWASTA -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">WIRASWASTA</span>
                        <span class="font-semibold">72</span>
                    </div>
                    <progress class="progress progress-info w-full" value="72" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 7 - TUKANG KAYU -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">TUKANG KAYU</span>
                        <span class="font-semibold">35</span>
                    </div>
                    <progress class="progress progress-neutral w-full" value="35" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 8 - PENSIUNAN -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">PENSIUNAN</span>
                        <span class="font-semibold">16</span>
                    </div>
                    <progress class="progress progress-warning w-full" value="16" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 9 - DOSEN -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">DOSEN</span>
                        <span class="font-semibold">3</span>
                    </div>
                    <progress class="progress progress-primary w-full" value="3" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 10 - TUKANG BATU -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">TUKANG BATU</span>
                        <span class="font-semibold">11</span>
                    </div>
                    <progress class="progress progress-secondary w-full" value="11" max="1000"></progress>
                </div>
        
                <!-- Pekerjaan 2 - Pekerjaan Lainnya -->
                <div class="mb-6">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">Pekerjaan Lainnya</span>
                        <span class="font-semibold">33</span>
                    </div>
                    <progress class="progress progress-secondary w-full" value="33" max="1000"></progress>
                </div>
            </div>
        </div>

        <div class="bg-gray-100">
            <div class="container mx-auto p-8">
                <h2 class="text-2xl font-bold text-center mb-8"> Pendidikan Penduduk</h2>
        
                <!-- TIDAK/BELUM SEKOLAH -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">TIDAK/BELUM SEKOLAH</span>
                        <span class="font-semibold">224</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-primary h-4 rounded-full" style="width: 10%"></div>
                    </div>
                </div>
        
                <!-- TK -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">TK</span>
                        <span class="font-semibold">41 </span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-secondary h-4 rounded-full" style="width: 16%"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">Tidak Tamat SD</span>
                        <span class="font-semibold">73</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-info h-4 rounded-full" style="width: 50%"></div>
                    </div>
                </div>
        
                <!-- SD -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">SD</span>
                        <span class="font-semibold">587</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-accent h-4 rounded-full" style="width: 24%"></div>
                    </div>
                </div>
        
                <!-- SLTP/SEDERAJAT -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">SMP</span>
                        <span class="font-semibold">475</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-success h-4 rounded-full" style="width: 20%"></div>
                    </div>
                </div>
        
                <!-- SLTA/SEDERAJAT -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">SMA</span>
                        <span class="font-semibold">915</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-info h-4 rounded-full" style="width: 50%"></div>
                    </div>
                </div>
                {{-- Diploma 1/2 --}}
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">D1/D2</span>
                        <span class="font-semibold">16</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-neutral h-4 rounded-full" style="width: 16%"></div>
                    </div>
                </div>
        

                {{-- Diploma 3 --}}
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">D3</span>
                        <span class="font-semibold">57</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-accent h-4 rounded-full" style="width: 24%"></div>
                    </div>
                </div>

                <!-- S1 -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">S1</span>
                        <span class="font-semibold">2</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-warning h-4 rounded-full" style="width: 40%"></div>
                    </div>
                </div>
        
                <!-- S2 -->
                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold">S2</span>
                        <span class="font-semibold">8</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-neutral h-4 rounded-full" style="width: 16%"></div>
                    </div>
                </div>
        
            </div>
        </div>

        

        </div>
    </div>

</section>


    
@endsection

