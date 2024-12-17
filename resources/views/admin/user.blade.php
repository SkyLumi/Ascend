@extends('layouts.app_admin')

@section('title', 'Users')

@section('content')
<!-- Manage Users Section -->
<section id="users" class="bg-white p-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Manage Users</h2>
    <a href="{{ route('user.create') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add User</a>
    <table class="mt-4 w-full table-auto border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->nama }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2 flex space-x-2">
                        <a href="{{ route('user.edit', $user->id) }}" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirmDelete(event);">
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
        <p class="mb-4">Apakah kamu yakin ingin menghapus user ini?</p>
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
