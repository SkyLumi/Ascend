<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <!-- Header -->
    <x-navbar_admin />

    <div class="flex flex-1">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4">
        &copy; {{ date('Y') }} Ascend. All rights reserved.
    </footer>
</body>
</html>
