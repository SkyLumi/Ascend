@extends('layouts.app_admin')

@section('title', 'Challenge')

@section('content')

<section id="challenges" class="bg-white p-4 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Manajemen Challenge</h2>
    <a href="{{ route('challenge.create') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Challenge</a>
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
            @foreach ($challenges as $challenge)
                <tr>
                    <td class="border px-4 py-2">{{ $challenge->nama_challenge }}</td>
                    <td class="border px-4 py-2">{{ $challenge->deskripsi }}</td>
                    <td class="border px-4 py-2">{{ $challenge->durasi }}</td>
                    <td class="border px-4 py-2">{{ $challenge->reward_points }}</td>
                    <td class="border px-4 py-2">
                        <a class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                        <form action="{{ route('challenge.destroy', $challenge->id) }}" method="POST" class="inline-block">
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
