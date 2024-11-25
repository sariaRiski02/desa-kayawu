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
              <div class="stat-value">12</div>
            </div>
            <div class="stat bg-warning text-primary-content">
              <div class="stat-title text-white">Total Kategori</div>
              <div class="stat-value">15</div>
            </div>
            <div class="stat bg-info text-primary-content">
              <div class="stat-title text-white">Jumlah Yang diarsip</div>
              <div class="stat-value">11</div>
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
                  <tr>
                    <th>1</th>
                    <td>How to Start Beritaging</td>
                    <td>Tutorial</td>
                    <td><span class="badge badge-success">Published</span></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Edit</button>
                      <button class="btn btn-sm btn-error">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td>Top 10 Beritaging Tools</td>
                    <td>Resources</td>
                    <td><span class="badge badge-warning">Draft</span></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Edit</button>
                      <button class="btn btn-sm btn-error">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th>3</th>
                    <td>Understanding SEO for Beritas</td>
                    <td>SEO</td>
                    <td><span class="badge badge-success">Published</span></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Edit</button>
                      <button class="btn btn-sm btn-error">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection