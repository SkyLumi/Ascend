@extends('layouts.app_admin')

@section('title', 'Tambah Artikel')

@section('content')
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-6">Tambah Artikel</h2>
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg">
        <div class="p-6">
            <a href="{{ url()->previous() }}"
                class="inline-block mb-4 bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                 &larr; Back
             </a>
            <form action="{{ route('artikel.store') }}" method="POST">
                @csrf
                <!-- Judul Artikel -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul Artikel</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('judul') border-red-500 @enderror"
                        required>
                    @error('judul')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Isi Artikel -->
                <div class="mb-4">
                    <label for="isi" class="block text-gray-700 font-semibold mb-2">Isi Artikel</label>
                    <textarea id="isi" name="isi"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('isi') border-red-500 @enderror"
                        rows="8" required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Tambah Artikel
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
