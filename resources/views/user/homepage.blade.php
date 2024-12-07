@extends('layouts.app')

@section('title', 'Selamat Datang di Ascend!')

@section('content')
<!-- Hero Section -->
<header class="bg-green-500 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-extrabold mb-4">Selamat Datang di Ascend</h1>
        <p class="text-lg font-medium mb-6">Temukan tantangan baru setiap hari untuk meningkatkan dirimu bersama komunitas terbaik!</p>
    </div>
</header>

<!-- Daily Challenges Section -->
<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Tantangan Harian</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Challenge Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition">
            <h3 class="text-2xl font-bold text-green-500 mb-2">Olahraga 30 Menit</h3>
            <p class="text-gray-600 mb-4">Tingkatkan kesehatanmu dengan melakukan olahraga ringan selama 30 menit hari ini.</p>
            <div class="flex justify-between items-center text-sm text-gray-500">
                <span>🏆 10 Poin</span>
                <span>⏳ 1 Hari</span>
            </div>
        </div>
        <!-- Challenge Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition">
            <h3 class="text-2xl font-bold text-green-500 mb-2">Baca Buku 10 Halaman</h3>
            <p class="text-gray-600 mb-4">Luangkan waktu untuk menambah wawasanmu dengan membaca buku favoritmu.</p>
            <div class="flex justify-between items-center text-sm text-gray-500">
                <span>🏆 15 Poin</span>
                <span>⏳ 1 Hari</span>
            </div>
        </div>
        <!-- Challenge Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition">
            <h3 class="text-2xl font-bold text-green-500 mb-2">Meditasi 10 Menit</h3>
            <p class="text-gray-600 mb-4">Kendalikan pikiranmu dengan meditasi untuk meningkatkan fokus dan ketenangan.</p>
            <div class="flex justify-between items-center text-sm text-gray-500">
                <span>🏆 8 Poin</span>
                <span>⏳ 1 Hari</span>
            </div>
        </div>
    </div>
</section>

<!-- Community Section -->
<section class="bg-green-100 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Komunitas Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <p class="text-gray-700 text-lg mb-6">Bergabunglah dengan komunitas yang mendukung dan saling menginspirasi. Berbagi pengalaman dan saling mendukung untuk mencapai tujuan bersama.</p>
                <a href="/komunitas" class="bg-green-500 text-white py-3 px-6 rounded-lg font-bold shadow-lg hover:bg-green-600 transition">
                    Bergabung Sekarang
                </a>
            </div>
            <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Komunitas" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>

<!-- Progress Analytics Section -->
<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Histori Progress (Analitik)</h2>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <canvas id="progressChart" height="100"></canvas>
    </div>
</section>

<!-- Motivation Section -->
<section class="bg-green-500 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">Tetap Semangat, Raih Potensimu!</h2>
        <p class="text-lg font-medium mb-6">"Perubahan besar dimulai dari langkah kecil yang konsisten."</p>
        <a href="/tantangan" class="bg-white text-green-500 py-3 px-6 rounded-lg font-bold shadow-lg hover:bg-gray-100 transition">
            Temukan Tantanganmu
        </a>
    </div>
</section>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('progressChart');
    new Chart(ctx, {
        type: 'line', // Change to 'line' for line chart
        data: {
            labels: ['Nov 25', 'Nov 26', 'Nov 27'], // Example: ['Nov 25', 'Nov 26', 'Nov 27'] $dates
            datasets: [{
                    label: 'Poin Harian',
                    data: [10, 15, 8], // Example: [10, 15, 8] $points
                    backgroundColor: 'rgba(34, 197, 94, 0.7)',
                    borderColor: 'rgba(34, 197, 94, 1)',
                    borderWidth: 2
                }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>
@endsection
