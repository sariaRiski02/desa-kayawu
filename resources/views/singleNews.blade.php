@extends('app.app')

@section('title', 'berita')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            @if ($post->image)
                <img src="{{ asset("/storage/".$post->image) }}" alt="" class="w-full h-64 object-cover">
            @else
                <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">Tidak ada gambar</span>
                </div>
            @endif
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
                <p class="text-gray-700 text-base leading-relaxed">
                    {!! $post->content !!}
                </p>
            </div>
        </div>
    </div>
@endsection