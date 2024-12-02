@extends('app.app')

@section('title', 'kontak')

@section('content')

    <div class="social-media min-h-screen flex flex-col justify-center items-center bg-gray-100 p-8">
        <h2 class="text-4xl font-bold mb-8">Kontak Kami</h2>
        <p class="text-lg mb-8 text-center">Hubungi kami melalui media sosial berikut untuk informasi lebih lanjut dan update terbaru.</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 w-full max-w-4xl">
            <a href="https://www.facebook.com/yourpage" target="_blank" class="flex flex-col items-center justify-center p-6 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                <i class="fab fa-facebook-f text-4xl mb-2"></i>
                <span class="text-xl">Facebook</span>
            </a>
            <a href="https://www.twitter.com/yourprofile" target="_blank" class="flex flex-col items-center justify-center p-6 bg-blue-400 text-white rounded-lg shadow-md hover:bg-blue-500 transition">
                <i class="fab fa-twitter text-4xl mb-2"></i>
                <span class="text-xl">Twitter</span>
            </a>
            <a href="https://www.instagram.com/yourprofile" target="_blank" class="flex flex-col items-center justify-center p-6 bg-pink-500 text-white rounded-lg shadow-md hover:bg-pink-600 transition">
                <i class="fab fa-instagram text-4xl mb-2"></i>
                <span class="text-xl">Instagram</span>
            </a>
            <a href="https://wa.me/yourwhatsappnumber" target="_blank" class="flex flex-col items-center justify-center p-6 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 transition">
                <i class="fab fa-whatsapp text-4xl mb-2"></i>
                <span class="text-xl">WhatsApp</span>
            </a>
        </div>
    </div>
@endsection
