<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Management Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
  <link rel="icon" href="{{ asset('storage/img/logo-tomohon.png') }}" type="image/png">
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

</head>
<body>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-base-200 p-4">
      <h2 class="text-xl font-bold mb-6">Menejemen Informasi</h2>
      <ul class="menu bg-base-200 w-full">
        <li><a class="@if (Route::is('berita'))
            active
        @endif" href="{{ route('berita') }}">Berita</a></li>
        <li><a href="{{ route('logout') }}">Keluar</a></li>
      </ul>
    </div>

   @yield('content')
  </div>
</body>
</html>
