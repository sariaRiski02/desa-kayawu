@extends('app.dashboard')

@section('title','update')

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
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" id="title"
                placeholder="{{ $post->title }}" class="input input-bordered w-full" value="{{ old('title') }}" required>
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
                <textarea name="content" id="content" 
                
                class="textarea textarea-bordered w-full" rows="5" required>{{ $post->content }}</textarea>
                @error('content')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="image" id="photo" class="input input-bordered w-full" accept="image/*" required>
                @error('photo')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="select select-bordered w-full" required>
                <option value="published">Published</option>
                <option value="draft">Draft</option>
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
@endsection