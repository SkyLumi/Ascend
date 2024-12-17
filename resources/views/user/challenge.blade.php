@extends('layouts.app_user')

@section('title', 'Challenge')

@section('content')
<main class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-green-600 mb-6">Challenge</h1>

    <!-- Search Bar -->
    <div class="mb-6 flex">
        <input
            type="text"
            id="searchInput"
            placeholder="Cari tugas..."
            class="flex-grow bg-white p-4 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-green-400 transition"
        />
    </div>

    <!-- Task Cards -->
    <div id="taskContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
</main>

<!-- JavaScript -->
<script>
    document.getElementById('searchInput').addEventListener('input', function () {
        const searchValue = this.value.toLowerCase(); // Ambil nilai input
        const taskCards = document.querySelectorAll('.tugas_card'); // Pilih semua kartu tugas

        // Filter kartu tugas berdasarkan pencarian
        taskCards.forEach(card => {
            const title = card.querySelector('.task-title').textContent.toLowerCase(); // Ambil judul tugas
            if (title.includes(searchValue)) {
                card.style.display = 'block'; // Tampilkan kartu jika cocok
            } else {
                card.style.display = 'none'; // Sembunyikan kartu jika tidak cocok
            }
        });
    });
</script>
@endsection
