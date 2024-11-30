@extends('app.dashboard')

@section('title', 'post')

@section('content')
     <!-- Content Area -->
     <div class="flex-1 bg-base-100">
        <!-- Header -->
        <div class="navbar bg-base-300">
          <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Dashboard</a>
          </div>
          <div class="flex-none">
              <a href="{{ route('home') }}" class="btn btn-secondary">site</a>
          </div>
        </div>
  
        <!-- Main Content -->
        <div class="p-6">
          <!-- Welcome -->
          <h1 class="text-2xl font-bold">Selamat datang di Dashboard berita</h1>
          <p class="text-sm mt-2">Kelola Berita Anda secara efektif dengan Dashboard ini.</p>
  
          <!-- Berita Stats -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
            <div class="stat bg-primary text-primary-content">
              <div class="stat-title text-white">Total Post</div>
              <div class="stat-value">{{ $countPost }}</div>
            </div>
            <div class="stat bg-warning text-primary-content">
              <div class="stat-title text-white">Total Kategori</div>
              <div class="stat-value">{{ $countCategory }}</div>
            </div>
            <div class="stat bg-info text-primary-content">
              <div class="stat-title text-white">Jumlah Yang diarsip</div>
              <div class="stat-value">{{$countDraft}}</div>
            </div>
            
          </div>
  
          <!-- Recent Posts -->
          <div class="mt-8">
          <a href="{{ route('berita.add') }}" class="btn btn-primary mb-4">tambahkan berita</a>
            <div class="overflow-x-auto">
              <table class="table w-full">
                <!-- Head -->
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $item)
                  
                  
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td><span class="badge 
                       @if ($item->status == 'published')
                           badge-success
                       @else
                       badge-warning
                       @endif
                      ">{{ $item->status }}</span></td>
                    <td>
                      <a href="{{ route('berita.update',$item->slug) }}" class="btn btn-sm btn-warning">Edit</a>
                      <a href="{{ route('single.post', $item->slug) }}"  class="btn btn-sm btn-infox" target="_blank">Lihat</a>
                      <a href="{{ route('berita.delete', $item->slug) }}" class="btn btn-sm btn-error">Delete</a>
                    </td>
                  </tr>
                  
                      
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
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

    
    

@endsection