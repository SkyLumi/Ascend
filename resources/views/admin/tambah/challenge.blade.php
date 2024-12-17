@extends('layouts.app_admin')

@section('title', 'Tambah Challenge')

@section('content')
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-6">Tambah Challenge</h2>
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg">
        <div class="p-6">
            <a href="{{ url()->previous() }}"
                class="inline-block mb-4 bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                 &larr; Back
             </a>
            <form action="{{ route('challenge.store') }}" method="POST">
                @csrf
                <!-- Nama Challenge -->
                <div class="mb-4">
                    <label for="nama_challenge" class="block text-gray-700 font-semibold mb-2">Nama Challenge</label>
                    <input type="text" id="nama_challenge" name="nama_challenge" value="{{ old('nama_challenge') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nama_challenge') border-red-500 @enderror"
                        required>
                    @error('nama_challenge')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('deskripsi') border-red-500 @enderror"
                        rows="4" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Durasi -->
                <div class="mb-4">
                    <label for="durasi" class="block text-gray-700 font-semibold mb-2">Durasi (menit)</label>
                    <input type="number" id="durasi" name="durasi" value="{{ old('durasi') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('durasi') border-red-500 @enderror"
                        min="1" required>
                    @error('durasi')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Reward Points -->
                <div class="mb-4">
                    <label for="reward_points" class="block text-gray-700 font-semibold mb-2">Reward Points</label>
                    <input type="number" id="reward_points" name="reward_points" value="{{ old('reward_points') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('reward_points') border-red-500 @enderror"
                        min="0" required>
                    @error('reward_points')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Tambah Challenge
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
