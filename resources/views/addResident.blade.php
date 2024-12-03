@extends('app.dashboard')
@section('title', 'dashboard')

@section('content')


<div class="flex flex-col w-full">


<!-- Form for Family -->
<div class="w-full mx-auto p-4 bg-white shadow-md rounded-md mt-6">
    <h2 class="text-2xl font-bold mb-4">Tambahkan KK</h2>
    <form action="{{ route('dashboard.resident.addKK') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="kk" class="block text-sm font-medium">No Kartu Keluarga</label>
            @error('kk')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <input type="text" id="kk" name="kk" class="input input-bordered w-full" placeholder="Masukkan nomor KK"  />
        </div>

        <div class="mb-4">
            <label for="name_family_head" class="block text-sm font-medium">
                Nama Kepala Keluarga
            </label>
            @error('name_family_head')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <input type="text" id="name_family_head" name="name_family_head" class="input input-bordered w-full" placeholder="Masukkan nama kepala keluarga"  />
        </div>

        <button type="submit" class="btn btn-primary w-full">Simpan Kartu Keluarga</button>
    </form>
</div>

<!-- Form for Member Family -->
<div class="w-full mx-auto p-4 bg-white shadow-md rounded-md mt-6">
    <h2 class="text-2xl font-bold mb-4">Tambah Data Penduduk</h2>
    <form action="{{ route('dashboard.resident.addResident') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="id_family" class="block text-sm font-medium">Pilih KK</label>
            <select id="id_family" name="id_family" class="select select-bordered w-full">
                <option value="" disabled {{ old('id_family') === null ? 'selected' : '' }}>Pilih KK (kepala keluarga)</option>
                @foreach ($kk as $item)
                <option value="{{ $item->kk }}" {{ old('id_family') == $item->kk ? 'selected' : '' }}>{{ $item->name_family_head }}</option>
                @endforeach
            </select>
            @error('id_family')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Nama</label>
            <input type="text" id="name" name="name" class="input input-bordered w-full" placeholder="Masukkan nama Lengkap" value="{{ old('name') }}" required/>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium">Jenis Kelamin</label>
            <select id="gender" name="gender" class="select select-bordered w-full">
                <option value="" disabled {{ old('gender') === null ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                <option value="L" >Laki-Laki</option>
                <option value="P" >Perempuan</option>
            </select>
            @error('gender')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium">Alamat</label>
            <select id="address" name="address" class="select select-bordered w-full" required>
                <option value="" disabled {{ old('address') === null ? 'selected' : '' }}>Pilih Alamat</option>
                @foreach ($lingkungan as $item)
                <option value="{{ $item }}" {{ old('address') ==  $item  ? 'selected' : '' }}>{{ $item }}</option>
                    
                @endforeach
                
            </select>
            @error('address')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="marital_status" class="block text-sm font-medium">Status Pernikahan</label>
            <select id="marital_status" name="marital_status" class="select select-bordered w-full" required>
                <option value="" disabled {{ old('marital_status') === null ? 'selected' : '' }}>Pilih Status Pernikahan</option>
                @foreach ($status as $item)
                <option value="single" {{ old('marital_status') == 'single' ? 'selected' : '' }}>{{ $item }}</option>
                    
                @endforeach
                
            </select>
            @error('marital_status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="birth_place" class="block text-sm font-medium">Tempat Lahir</label>
            <input type="text" id="birth_place" name="birth_place" class="input input-bordered w-full" placeholder="Masukkan tempat lahir" value="{{ old('birth_place') }}" required/>
            @error('birth_place')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="birth_date" class="block text-sm font-medium">Tanggal Lahir</label>
            <input type="date" id="birth_date" name="birth_date" class="input input-bordered w-full" value="{{ old('birth_date') }}" required/>
            @error('birth_date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="religion" class="block text-sm font-medium">Agama</label>
            <input type="text" id="religion" name="religion" class="input input-bordered w-full" placeholder="Masukkan agama" value="{{ old('religion') }}" required/>
            @error('religion')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="education_level" class="block text-sm font-medium">Pendidikan Terakhir</label>
            <select id="education_level" name="education_level" class="select select-bordered w-full" required>
                <option value="" disabled {{ old('education_level') === null ? 'selected' : '' }}>Pilih Pendidikan Terakhir</option>
                @foreach ($pendidikan as $item)
                <option value="{{ $item }}" {{ old('education_level') == $item ? 'selected' : '' }}>{{ $item }}</option>
                @endforeach
            </select>
            @error('education_level')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="occupation" class="block text-sm font-medium">Pekerjaan</label>
            <input type="text" id="occupation" name="occupation" class="input input-bordered w-full" placeholder="Masukkan pekerjaan" value="{{ old('occupation') }}" required/>
            @error('occupation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="family_position" class="block text-sm font-medium">Status Dalam Keluarga</label>
            <select id="family_position" name="family_position" class="select select-bordered w-full" required>
                <option value="" disabled {{ old('family_position') === null ? 'selected' : '' }}>Pilih Status Dalam Keluarga</option>
                @foreach ($family_position as $item)
                <option value="{{ $item }}" {{ old('family_position') == 'ayah' ? 'selected' : '' }}>{{ $item }}</option>
                    
                @endforeach
                
            </select>
            @error('family_position')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="nik" class="block text-sm font-medium">NIK</label>
            <input type="text" id="nik" name="nik" class="input input-bordered w-full" placeholder="Masukkan NIK" value="{{ old('nik') }}" required/>
            @error('nik')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-full">Simpan Data</button>
    </form>
</div>


{{-- nontifikasi --}}
@if (session('error'))
<div role="alert" class="fixed m-5 w-auto alert alert-error">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6 shrink-0 stroke-current"
      fill="none"
      viewBox="0 0 24 24">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>{{ session('error') }}</span>
    <button id="close">
        X
    </button>
</div>
@endif


@if (session('success'))
<div role="alert" class="fixed m-5 w-auto alert alert-success">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6 shrink-0 stroke-current"
      fill="none"
      viewBox="0 0 24 24">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>{{ session('success') }}</span>
    <button id="close">
        X
    </button>
</div>
@endif

<script>
    document.getElementById('close').addEventListener('click', function() {
        this.parentElement.style.display = 'none';
    });
</script>



</div>    
@endsection
