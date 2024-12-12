<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homepage')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-black flex flex-col min-h-screen">
    <!-- Navbar -->
    <x-navbar_user/>

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
