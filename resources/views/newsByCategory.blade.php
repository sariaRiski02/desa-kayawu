@extends('app.app')

@section('title', 'Berita Kategori')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Berita dalam Kategori: {{ $category->name }}</h1>
        
        @if($news->isEmpty())
            <div class="text-center text-gray-500">
                <p class="text-lg">Tidak ada berita yang ditemukan untuk kategori ini.</p>
                <a href="{{ route('news.index') }}" class="btn btn-primary mt-4">Kembali ke Berita</a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($news as $item)
                    <div class="card bg-base-100 shadow-xl">
                        @if (!empty($item->image))
                            <figure><img src="{{ asset('/storage/'.$item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover"></figure>
                        @else
                            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Kayawu News</span>
                            </div>
                        @endif

                        <div class="card-body">
                            <h2 class="card-title">{{ $item->title }}</h2>
                            <p>{{ $item->excerpt }}</p>
                            <div class="card-actions justify-end">
                                <a href="{{ route('single.post', $item->slug) }}" class="btn btn-primary">Baca</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Tombol Kembali di Paling Bawah -->
        <div class="text-center mt-8">
            <a href="{{ route('news') }}" class="btn btn-secondary">Kembali ke Berita Utama</a>
        </div>
    </div>
@endsection
