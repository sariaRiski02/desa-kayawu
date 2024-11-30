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

        <h1 class="text-xl font-bold text-center mb-3 pt-4">Persentase penduduk per Lingkungan</h1>
        <div class="p-6">
            
        
            <!-- Flexbox untuk Diagram Batang -->
            
            <div class="flex items-end justify-between h-64 border bg-white shadow-xl rounded rounded-5">
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 01</div>
                    <div class="bg-blue-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan1'] }}%">{{ $lingkungan['lingkungan1'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 02</div>
                    <div class="bg-yellow-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan2'] }}">{{ $lingkungan['lingkungan2'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 03</div>
                    <div class="bg-red-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan3'] }}%">{{ $lingkungan['lingkungan3'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 04</div>
                    <div class="bg-green-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan4'] }}%">{{ $lingkungan['lingkungan4'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 05</div>
                    <div class="bg-purple-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan5'] }}%">{{ $lingkungan['lingkungan5'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 06</div>
                    <div class="bg-teal-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan6'] }}%">{{ $lingkungan['lingkungan6'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 07</div>
                    <div class="bg-indigo-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan7'] }}%">{{ $lingkungan['lingkungan7'] }}%</div>
                </div>
                <div class="flex flex-col items-center w-full h-full">
                    <div class="mt-2">Ling. 08</div>
                    <div class="bg-pink-500 text-center text-white w-full" style="height: {{ $lingkungan['lingkungan8'] }}%">{{ $lingkungan['lingkungan8'] }}%</div>
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
                            <div class="bg-blue-500 text-center text-white w-full" style="height: {{ $genderM }}%">{{ $genderM }}%</div>
                            <div class="mt-2">Laki-laki</div>
                        </div>
                        <div class="flex flex-col items-center w-full h-full">
                            <div class="bg-pink-500 text-center text-white w-full" style="height: {{ $genderW }}%">{{ $genderW }}%</div>
                            <div class="mt-2">Perempuan</div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Usia Penduduk Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5 9 5z" />
                            </svg>
                            Usia Penduduk
                        </h2>
                        <div class="flex items-end justify-between h-64">
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-blue-500 text-center text-white w-full" style="height: {{ $age0_14 }}%">{{ $age0_14 }}%</div>
                                <div class="mt-2">0-14 tahun</div>
                            </div>
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-green-500 text-center text-white w-full" style="height: {{ $age14_65 }}%">{{ $age14_65 }}%</div>
                                <div class="mt-2">15-64 tahun</div>
                            </div>
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-red-500 text-center text-white w-full" style="height: {{ $age65_up == 0 ? '10' : $age65_up }}%">{{ $age65_up }}%</div>
                                <div class="mt-2">65 > tahun</div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                <!-- Agama Penduduk Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 0V4m0 4a4 4 0 110 8 4 4 0 010-8zm0 0V4m0 4a4 4 0 110 8 4 4 0 010-8z" />
                            </svg>
                            Agama Penduduk
                        </h2>
                        <div class="flex items-end justify-between h-64">
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-blue-500 text-center text-white w-full" style="height: {{ $islam }}%">{{ $islam }}%</div>
                                <div class="mt-2">Islam</div>
                            </div>
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-yellow-500 text-center text-white w-full" style="height: {{ $kristen }}%">{{ $kristen }}%</div>
                                <div class="mt-2">Kristen</div>
                            </div>
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-red-500 text-center text-white w-full" style="height: {{ $hindu }}%">{{ $hindu }}%</div>
                                <div class="mt-2">Hindu</div>
                            </div>
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-green-500 text-center text-white w-full" style="height: {{ $budha }}%">{{ $budha }}%</div>
                                <div class="mt-2">Buddha</div>
                            </div>
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-purple-500 text-center text-white w-full" style="height: {{ $konghuchu}}%">{{ $konghuchu}}%</div>
                                <div class="mt-2">konghuchu</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tingkat pendudukan Penduduk Card -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5 9 5z" />
                            </svg>
                            Tingkat Pendidikan
                        </h2>
                        <div class="flex items-end justify-between h-64">
                            @foreach ($pendidikanCounts as $item)
                                
                            <div class="flex flex-col items-center w-full h-full">
                                <div class="bg-[{{ $item['backgroundColor'] }}] text-center text-white w-full" style="height: {{ $item['value'] }}%">{{ $item['value'] }}%</div>
                                <div class="mt-2">{{ $item['name'] }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pekerjaan Penduduk Card -->
            <div class="card bg-base-100 shadow-xl m-3">
                <div class="card-body">
                    <h2 class="card-title text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7l9-5-9-5-9 5 9 5z" />
                        </svg>
                        Pekerjaan Penduduk
                    </h2>
                    <div class="overflow-x-auto">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($top10Pekerjaan as $item)
                                <div class="flex flex-col items-center w-full h-full">
                                    <div class="bg-[{{ $item['backgroundColor'] }}] text-center text-black w-full"  style="height: 50%">
                                        <span class="block">{{ $item['value'] }}%</span>
                                    </div>
                                    <div class="mt-2">{{ $item['name'] }}</div>
                                </div>
                            @endforeach

                            <div class="flex flex-col items-center w-full h-full">
                                <div class="text-center rounded bg-gray-200 text-black w-full py-2" style="height: 50%">
                                    <span class="block">{{ $item['value'] }}%</span>
                                </div>
                                <div class="mt-2">Lainnya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>


    
@endsection

