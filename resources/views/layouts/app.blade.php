<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homepage')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-black min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-green-400 shadow-lg" aria-label="Main Navigation">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-white" aria-label="Homepage">Ascend</a>
            <ul class="flex items-center space-x-6 text-sm">
                <li><a href="/homepage" class="text-white hover:underline">Homepage</a></li>
                <li><a href="/komunitas" class="text-white hover:underline">Komunitas</a></li>
                <li><a href="/pencatatan" class="text-white hover:underline">Pencatatan</a></li>
                <li><a href="/challenge" class="text-white hover:underline">Challenge</a></li>
            </ul>
            <a href="/login" class="bg-green-700 text-white py-2 px-4 rounded-lg font-medium hover:bg-green-600 transition">
                Login
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-green-400 text-white py-6" role="contentinfo">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Ascend. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
