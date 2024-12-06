@extends('app.dashboard')

@section('title', 'tambah berita')

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
  
        <!-- Add Blog Form -->
        <div class="mt-8 py-5 px-5">
            <h2 class="text-xl font-bold mb-4">Tambahkan Berita Baru</h2>
            <form action="{{ route('berita.add') }}" method="POST" enctype="multipart/form-data">
                
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" id="title" class="input input-bordered w-full" value="{{ old('title') }}" required>
                @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category" class="select select-bordered w-full" required>
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}" >
                        {{ $item->name }}   
                    </option>
                        
                    @endforeach
                    
                </select>
                @error('category')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                <input id="content" type="hidden" name="content">
                <trix-editor input="content" class="trix-content">
                    {{ old('content') }}
                </trix-editor>
                @error('content')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="image" id="photo" class="input input-bordered w-full" accept="image/*">
                @error('photo')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="select select-bordered w-full" required>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary">Tambahkan Berita</button>
            </div>
            </form>
        </div>
      </div>

@endsection