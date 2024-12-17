@extends('layouts.app_user')

@section('title', 'Selamat Datang di Ascend!')

@section('content')
<!-- Hero Section -->
<header class="bg-green-500 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-2">Halo, {{ Auth::user()->nama }}!</h1>
        <h2 class="text-5xl font-extrabold mb-4">Selamat Datang di Ascend</h2>
        <p class="text-lg font-medium mb-6">Temukan tantangan baru setiap hari untuk meningkatkan dirimu bersama komunitas terbaik!</p>
    </div>
</header>

<!-- Daily Task Section -->
<section class="container mx-auto px-4 py-12 relative">
    <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Tantangan Harian</h2>

    <!-- Tombol Panah Kiri -->
    <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600">
        &#9664;
    </button>

    <!-- Container Tantangan -->
    <div id="scrollContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pl-12 pr-12">
        <!-- Challenge Card 1 -->
        @foreach ($tasks as $task)
            @component('components.tugas_card', [
                'taskId' => $task->id,
                'taskName' => $task->dailyTask->nama_daily_task,
                'title' => $task->dailyTask->nama_daily_task,
                'description' => $task->dailyTask->deskripsi,
                'points' => $task->dailyTask->reward_points,
                'duration' => $task->dailyTask->durasi . ' Menit',
                'isCompleted' => $task->is_done
            ])
            @endcomponent
        @endforeach
    </div>

    <!-- Tombol Panah Kanan -->
    <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600">
        &#9654;
    </button>
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
<script>
    const scrollContainer = document.getElementById('scrollContainer');
    const scrollLeftBtn = document.getElementById('scrollLeft');
    const scrollRightBtn = document.getElementById('scrollRight');

    // Scroll ke kiri
    scrollLeftBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -400, behavior: 'smooth' });
    });

    // Scroll ke kanan
    scrollRightBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: 400, behavior: 'smooth' });
    });
</script>

@endsection
