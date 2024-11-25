@extends('app.app')

@section('title', 'berita')

@section('content')
    <div class="prose px-5 pt-6 lg:prose-xl mx-auto">
        <h1 class=" text-4xl font-bold mb-4">{{ $post->title }}</h1>
        <img src="{{ asset("/storage/".$post->image) }}" alt="" class="border w-1/3 mb-4 mx-auto rounded shadow-lg">
        <p class="text-lg leading-relaxed font-sans">
            {{ $post->content }}
        </p>
    </div>
    
@endsection