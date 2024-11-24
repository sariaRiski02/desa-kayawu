@extends('app.app')

@section('title', 'berita')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Berita Terbaru</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="" alt="" class="w-full h-48 object-cover"></figure>
                    <div class="card-body">
                        <h2 class="card-title"></h2>
                        <p></p>
                        <div class="card-actions justify-end">
                            <a href="" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
@endsection
    
