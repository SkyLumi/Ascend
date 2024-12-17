<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Ascend!</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-400 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-green-400 shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-white text-xl font-bold">Ascend</h1>
            <a href="/login" class="text-white font-semibold hover:underline">Masuk</a>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="flex-grow relative">
        <!-- Background Shape -->
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-full">
                <path fill="#ffffff" fill-opacity="0.2" d="M0,128L1440,64L1440,320L0,320Z"></path>
            </svg>
        </div>

        <!-- Bagian Hero -->
        <section class="text-center py-16 relative z-10">
            <h1 class="text-5xl font-extrabold text-white mb-6">Selamat Datang di Aplikasi Kami</h1>
            <p class="text-white text-lg mb-8">Perjalanan Anda menuju pengembangan diri dimulai di sini!</p>
            <a href="/register" class="bg-green-500 text-white py-3 px-8 rounded-full font-semibold shadow-lg hover:bg-green-400 transition">Mulai Sekarang</a>
        </section>

        <!-- Promosi Fitur dengan Card -->
        <section class="container mx-auto px-4 py-12 grid grid-cols-1 sm:grid-cols-2 gap-6 relative z-10">
            <!-- Tugas Harian -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex items-center">
                <div class="w-16 h-16 bg-green-100 p-4 rounded-full flex items-center justify-center mr-6">
                    <!-- Icon for Tugas Harian -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 0v4m0-4H8m4 0h4M19 4h-4.586A2 2 0 0014 2H10a2 2 0 00-1.414.586H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-green-600 mb-4">Tugas Harian</h2>
                    <p class="text-gray-600">Tetap termotivasi dengan tantangan harian yang dipersonalisasi khusus untuk Anda.</p>
                </div>
            </div>
            <!-- Tantangan -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex items-center">
                <div class="w-16 h-16 bg-green-100 p-4 rounded-full flex items-center justify-center mr-6">
                    <!-- Icon for Tantangan -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-4 4m0 0l-4-4m4 4V3m10 14h-4.586A2 2 0 0014 16H10a2 2 0 00-1.414.586H5a2 2 0 00-2 2v2a2 2 0 002 2h14a2 2 0 002-2v-2a2 2 0 00-2-2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-green-600 mb-4">Tantangan</h2>
                    <p class="text-gray-600">Bersaing dengan orang lain dan dorong batas kemampuan Anda dengan tantangan seru.</p>
                </div>
            </div>
            <!-- Papan Peringkat -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex items-center">
                <div class="w-16 h-16 bg-green-100 p-4 rounded-full flex items-center justify-center mr-6">
                    <!-- Icon for Papan Peringkat -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v4m0 0h4m-4 0H8m4 0v4m0 4h4m-4 0v4m-8 0h16m-8 4V6"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-green-600 mb-4">Papan Peringkat</h2>
                    <p class="text-gray-600">Pantau kemajuan Anda dan raih posisi teratas di papan peringkat.</p>
                </div>
            </div>
            <!-- Komunitas -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex items-center">
                <div class="w-16 h-16 bg-green-100 p-4 rounded-full flex items-center justify-center mr-6">
                    <!-- Icon for Komunitas -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12c0 2.5-2 4.5-4.5 4.5S12 14.5 12 12s2-4.5 4.5-4.5S21 9.5 21 12zm-9 0c0 2.5-2 4.5-4.5 4.5S3 14.5 3 12s2-4.5 4.5-4.5S12 9.5 12 12z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-green-600 mb-4">Komunitas</h2>
                    <p class="text-gray-600">Terhubung dengan individu yang berpikiran sama dan tumbuh bersama.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-green-500 text-center py-4">
        <p class="text-sm text-white">&copy; 2024 Aplikasi Kami. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
