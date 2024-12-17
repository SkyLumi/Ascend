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
                    <td class="border px-4 py-2 flex space-x-2">
                        <a href="{{ route('daily-task.edit', $daily_task->id) }}" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('daily-task.destroy', $daily_task->id) }}" method="POST" onsubmit="return confirmDelete(event);">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<div id="confirmModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
        <h2 class="text-lg font-bold mb-4">Confirm Deletion</h2>
        <p class="mb-4">Apakah kamu yakin ingin menghapus daily task ini?</p>
        <div class="flex justify-end space-x-4">
            <button id="cancelButton" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
            <button id="confirmButton" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
        </div>
    </div>
</div>

<script>
    let formToSubmit;

    function confirmDelete(event) {
        event.preventDefault();
        formToSubmit = event.target;
        const modal = document.getElementById('confirmModal');
        modal.classList.remove('opacity-0', 'pointer-events-none');
    }

    document.getElementById('cancelButton').addEventListener('click', () => {
        const modal = document.getElementById('confirmModal');
        modal.classList.add('opacity-0', 'pointer-events-none');
    });

    document.getElementById('confirmButton').addEventListener('click', () => {
        const modal = document.getElementById('confirmModal');
        modal.classList.add('opacity-0', 'pointer-events-none');
        formToSubmit.submit();
    });
</script>
@endsection
