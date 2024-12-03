@extends('app.dashboard')

@section('title', 'Dashboard')

@section('content')
     <!-- Content Area -->
     <div class="flex-1 bg-base-100">
        <!-- Header -->
        <div class="navbar bg-base-300">
          <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Dashboard</a>
          </div>
          <div class="flex-none">
              <a href="{{ route('home') }}" class="btn btn-secondary">Site</a>
          </div>
        </div>
  
        <!-- Main Content -->
        <div class="p-6">
          <!-- Welcome -->
            <h1 class="text-2xl font-bold">Selamat datang di Dashboard</h1>
            <p class="text-sm mt-2">Kelola data penduduk dengan mudah.</p>
  
          <!-- Berita Stats -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
            <div class="stat bg-primary text-primary-content">
              <div class="stat-title text-white">Jumlah Penduduk</div>
              <div class="stat-value">2832</div>
            </div>
            <div class="stat bg-warning text-primary-content">
              <div class="stat-title text-white">Jumlah KK</div>
              <div class="stat-value">199</div>
            </div>
            <div class="stat bg-info text-primary-content">
              <div class="stat-title text-white">Jumlah Lingkungan</div>
              <div class="stat-value">8</div>
            </div>
          </div>
  
          <!-- Recent Posts -->
          <div class="mt-8">
          <a href="{{ route('dashboard.resident.add') }}" class="btn btn-primary mb-4">Tambah Penduduk</a>
            <div class="overflow-x-auto">
              <table class="table w-full">
                <!-- Head -->
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nik</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($resident as $item)

                  <tr>
                    <td>{{ ($resident->currentPage() - 1) * $resident->perPage() + $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>
                      <a href="{{ route('dashboard.resident.update', $item->nik) }}" class="btn btn-sm btn-warning">Edit</a>
                      <a href=""  class="btn btn-sm btn-infox" target="_blank">Lihat</a>
                      <a href="{{ route('dashboard.resident.delete', $item->nik) }}" class="btn btn-sm btn-error">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
                <div class="mt-4">
                {{ $resident->links() }}
                </div>
              </table>
            </div>
          </div>
        </div>
      </div>

      {{-- Notifikasi --}}
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
          <button id="close" class="btn btn-sm">X</button>
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
          <button id="close" class="btn btn-sm">X</button>
      </div>
      @endif

      <script>
          document.getElementById('close')?.addEventListener('click', function() {
              this.parentElement.style.display = 'none';
          });
      </script>
@endsection
