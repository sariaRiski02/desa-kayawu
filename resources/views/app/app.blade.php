<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa Kayawu')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="{{ asset('storage/img/logo-tomohon.png') }}" type="image/png">
</head>
<body class="bg-base-100">
    <!-- Navbar -->
    @include('header')

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('footer')

    <script>

        const btn = document.querySelector('button.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
        // Contoh script sederhana
            // Smooth scrolling untuk navigasi
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
    
            // Validasi formulir kontak
            const contactForm = document.querySelector('#kontak form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const nama = this.querySelector('input[type="text"]').value;
                    const email = this.querySelector('input[type="email"]').value;
                    const pesan = this.querySelector('textarea').value;
    
                    // Validasi sederhana
                    if (!nama || !email || !pesan) {
                        alert('Mohon lengkapi semua field');
                        return;
                    }
    
                    // Simulasi pengiriman pesan (ganti dengan logic backend sebenarnya)
                    alert('Pesan berhasil dikirim! Terima kasih, ' + nama);
                    
                    // Reset formulir
                    this.reset();
                });
            }
    
            // Animasi scroll reveal (minimal)
            function revealOnScroll() {
                const reveals = document.querySelectorAll('.reveal');
                
                reveals.forEach(reveal => {
                    const windowHeight = window.innerHeight;
                    const revealTop = reveal.getBoundingClientRect().top;
                    const revealPoint = 150;
    
                    if (revealTop < windowHeight - revealPoint) {
                        reveal.classList.add('active');
                    } else {
                        reveal.classList.remove('active');
                    }
                });
            }
    
            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Jalankan saat pertama kali dimuat
    
            // Tambahkan class 'reveal' pada elemen yang ingin di-reveal
            const sectionsToReveal = document.querySelectorAll('#tentang, #potensi, #pemerintahan, #berita');
            sectionsToReveal.forEach(section => {
                section.classList.add('reveal');
            });
                    function togglePassword() {
                        var passwordField = document.querySelector('input[name="password"]');
                        if (passwordField.type === "password") {
                            passwordField.type = "text";
                        } else {
                            passwordField.type = "password";
                        }
                    }
                
        </script>

<style>
    /* Scrollbar untuk browser yang mendukung ::-webkit-scrollbar */
    ::-webkit-scrollbar {
        width: 8px; /* Lebar scrollbar */
        height: 8px; /* Tinggi scrollbar horizontal */
    }
    
    ::-webkit-scrollbar-track {
        background: #f4f4f4; /* Warna latar belakang track scrollbar */
        border-radius: 10px; /* Sudut membulat */
    }
    
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #969e96, #d4e5d4); /* Warna dan efek gradient pada thumb */
        border-radius: 10px; /* Sudut membulat */
        border: 2px solid #f4f4f4; /* Memberikan ruang antara track dan thumb */
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, #c9ccc9, #dcdedc); /* Warna saat hover */
    }
    
    /* Scrollbar untuk browser berbasis Firefox */
    * {
        scrollbar-width: thin; /* Scrollbar lebih tipis */
        scrollbar-color: #b3b6b3 #f4f4f4; /* Thumb dan track */
    }
    </style>
    
</body>
</html>
