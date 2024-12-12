@extends('layouts.app_admin')

@section('title', 'Daily Task')

@section('content')

<section id="users" class="bg-white p-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Manajemen Daily Task</h2>
    <a href="{{ route('daily-task.create') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Daily Task</a>
    <table class="mt-4 w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Deskripsi</th>
                <th class="border px-4 py-2">Durasi</th>
                <th class="border px-4 py-2">Reward Points</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daily_tasks as $daily_task)
                <tr>
                    <td class="border px-4 py-2">{{ $daily_task->nama_daily_task }}</td>
                    <td class="border px-4 py-2">{{ $daily_task->deskripsi }}</td>
                    <td class="border px-4 py-2">{{ $daily_task->durasi }}</td>
                    <td class="border px-4 py-2">{{ $daily_task->reward_points }}</td>
                    <td class="border px-4 py-2">
                        <a class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('daily-task.destroy', $daily_task->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
