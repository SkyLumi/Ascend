<div class="tugas-card snap-start {{ $isCompleted ? 'bg-gray-200' : 'bg-white' }} p-6 rounded-lg shadow-xl hover:shadow-2xl transition" data-task="{{ $taskName }}">
    <h3 class="text-2xl font-bold text-green-500 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 mb-4">{{ $description }}</p>
    <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
        <span>🏆 {{ $points }} Poin</span>
        <span>⏳ {{ $duration }}</span>
    </div>

    @if ($isCompleted)
        <p class="text-gray-500 font-semibold">Selesai</p>
    @else
        <a href="{{ route('tugas-harian.timer', $taskId) }}" class="bg-green-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-400 transition">Selesaikan</a>
    @endif
</div>
