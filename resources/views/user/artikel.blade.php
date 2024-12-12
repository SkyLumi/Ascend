@extends('layouts.app_user')

@section('title', 'Artikel Inspirasi')

@section('content')
<div class="container mx-auto px-6 py-10">
    <!-- Judul Halaman -->
    <h1 class="text-3xl font-bold text-green-600 mb-8 text-center">Artikel Inspirasi</h1>

    <!-- Filter Kategori -->
    <div class="flex justify-center mb-6 space-x-4">
        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Parenting</button>
        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Self-Improvement</button>
        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Edukasi</button>
    </div>

    <!-- Grid Artikel -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ $article->image_path }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2 truncate">{{ $article->title }}</h2>
                    <p class="text-gray-600 text-sm mb-4">{{ $article->description }}</p>
                    <a href="/articles/{{ $article->id }}" class="text-green-500 hover:underline font-medium">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
