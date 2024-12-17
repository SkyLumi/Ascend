@extends('layouts.app_admin')

@section('title', 'Admin Dashboard')

@section('content')

<section id="users" class="bg-white p-4 mb-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Lihat Selengkapnya</h2>
    <a href="{{ route('user.index') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Lihat Selengkapnya</a>
    <table class="mt-4 w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->nama }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<!-- Manage Challenges Section -->
<section id="challenges" class="bg-white p-4 mb-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Challenge</h2>
    <a href="{{ route('challenge.index') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Lihat Selengkapnya</a>
    <table class="mt-4 w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Durasi</th>
                <th class="border px-4 py-2">Reward Points</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($challenges as $challenge)
                <tr>
                    <td class="border px-4 py-2">{{ $challenge->nama_challenge }}</td>
                    <td class="border px-4 py-2">{{ $challenge->durasi }} Menit</td>
                    <td class="border px-4 py-2">{{ $challenge->reward_points }} Point</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<!-- Manage Daily Tasks Section -->
<section id="daily-tasks" class="bg-white p-4 mb-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Daily Tasks</h2>
    <a href="{{ route('daily-task.index') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Lihat Selengkapnya</a>
    <!-- Similar Table as above -->
    <table class="mt-4 w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Durasi</th>
                <th class="border px-4 py-2">Reward_points</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daily_tasks as $daily_task)
                <tr>
                    <td class="border px-4 py-2">{{ $daily_task->nama_daily_task }}</td>
                    <td class="border px-4 py-2">{{ $daily_task->durasi }} Menit</td>
                    <td class="border px-4 py-2">{{ $daily_task->reward_points }} Point</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<!-- Manage Artikel Section -->
<section id="artikels" class="bg-white p-4 mb-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Artikel</h2>
    <a href="{{ route('artikel.index') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Lihat Selengkapnya</a>
    <table class="mt-4 w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Judul</th>
                <th class="border px-4 py-2">Isi</th>
                <th class="border px-4 py-2">Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikels as $artikel)
                <tr>
                    <td class="border px-4 py-2">{{ $artikel->judul }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($artikel->isi, 50) }}</td>
                    <td class="border px-4 py-2">{{ $artikel->user->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
