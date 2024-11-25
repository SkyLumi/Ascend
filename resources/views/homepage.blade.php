<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-black min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-green-400 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-white">Ascend</a>
            <ul class="flex items-center space-x-6 text-sm">
                <li><a href="/komunitas" class="text-white hover:underline">Komunitas</a></li>
                <li><a href="/pencatatan" class="text-white hover:underline">Pencatatan</a></li>
                <li><a href="/challenge" class="text-white hover:underline">Challenge</a></li>
            </ul>
            <a href="/login" class="bg-green-700 text-white py-2 px-4 rounded-lg font-medium hover:bg-green-600 transition">
                Login
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-green-500 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di Ascend!</h1>
            <p class="text-lg mb-6">Tempat terbaik untuk mencatat perjalananmu, bergabung dengan komunitas, dan menghadapi tantangan yang seru.</p>
            <a href="/register" class="bg-white text-green-500 py-3 px-6 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                Mulai Sekarang
            </a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Fitur Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-green-500 text-4xl mb-4">💬</div>
                <h3 class="text-xl font-bold mb-2">Komunitas</h3>
                <p>Bergabunglah dengan komunitas yang aktif dan berbagi pengalamanmu.</p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-green-500 text-4xl mb-4">📋</div>
                <h3 class="text-xl font-bold mb-2">Pencatatan</h3>
                <p>Catat perkembangan harianmu dengan fitur pencatatan yang mudah digunakan.</p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-green-500 text-4xl mb-4">🏆</div>
                <h3 class="text-xl font-bold mb-2">Challenge</h3>
                <p>Ikuti tantangan seru untuk meningkatkan motivasi dan keterlibatanmu.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-400 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Ascend. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
