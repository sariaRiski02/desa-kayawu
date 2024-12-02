<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- Logo -->
                <div>
                    <a href="/" class="flex items-center py-5 px-2 text-gray-700 custom-font">
                        <svg class="h-6 w-6 mr-1 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0H7m6 0v6m0 0H7m6 0h6" /></svg>
                        <span class="font-bold">Kayawu</span>
                    </a>
                </div>
                <!-- Primary Nav -->
                <div class="hidden md:flex items-center space-x-1 custom-font">
                    <a href="{{ route('gov') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Pemerintahan</a>
                    <a href="{{ route('demo') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Demografi</a>
                    <a href="{{ route('potention') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Potensi</a>
                    <a href="{{ route('news') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Berita</a>
                    <a href="{{ route('about') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Tentang</a>
                    <a href="{{ route('contact') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Kontak</a>
                </div>
            </div>

            {{-- @if (!Auth::user()) --}}
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center space-x-1 custom-font">
                    <a href="{{ route('login') }}" class=" btn btn-primary">Login</a>
                </div>  
            {{-- @else --}}
            
                <!-- Dashboard Button -->
                <div class="hidden md:flex items-center space-x-1 custom-font">
                    <a href="{{ route('berita') }}" class="btn btn-primary">Dashboard</a>
                </div>
            {{-- @endif --}}


            <!-- Mobile Button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16" /></svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden custom-font">
        <a href="{{ route('gov') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Pemerintahan</a>
        <a href="{{ route('demo') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Demografi</a>
        <a href="#potensi" class="block py-2 px-4 text-sm hover:bg-gray-200">Potensi</a>
        <a href="{{ route('news') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Berita</a>
        <a href="{{ route('about') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Tentang Desa</a>
        <a href="{{ route('contact') }}" class="block py-2 px-4 text-sm hover:bg-gray-200">Kontak</a>
    </div>
</nav>
