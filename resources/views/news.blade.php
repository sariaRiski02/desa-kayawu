@extends('app.app')

@section('title', 'berita')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Berita Terbaru</h1>
        <form action="{{ route('news.search') }}" method="GET" class="mb-4 flex flex-col md:flex-row items-center gap-2">
            <input type="text" name="query" placeholder="Cari berita..." class="input input-bordered w-full md:w-auto flex-grow">
            <button type="submit" class="btn btn-primary w-full md:w-auto">Cari</button>
        </form>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @if($news->isEmpty())
                <div class="col-span-full text-center">
                    @if(request()->has('query'))
                        <p class="text-gray-500 text-lg">
                            Tidak ada berita yang cocok dengan pencarian "<strong>{{ request('query') }}</strong>".
                        </p>
                        <a href="{{ route('news') }}" class="btn btn-secondary mt-4">Kembali ke Berita</a>
                    @else
                        <p class="text-gray-500 text-lg">
                            Belum ada postingan berita yang ditambahkan. nantikan berita dari pihak kelurahan di lain waktu.
                        </p>
                    @endif
                </div>
            @else
                @foreach ($news as $item)
                    <div class="card bg-base-100 shadow-xl">
                        @if (!empty($item->image))
                            <figure><img src="{{ asset('/storage/'.$item->image) }}" alt="" class="w-full h-48 object-cover"></figure>
                        @else
                            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">Kayawu News</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $item->title }}</h2>
                            <p><a href="{{ route('news.category', $item->category->slug) }}" class="text-blue-500">{{ $item->category->name }}</a></p>
                            <div class="card-actions justify-end">
                                <a href="{{ route('single.post', $item->slug) }}" class="btn btn-primary">Baca</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
