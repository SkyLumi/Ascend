@extends('layouts.app_user')

@section('title', 'Artikel')

@section('content')
<div class="container mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Artikel Terbaru</h1>

    @if($artikels->isEmpty())
        <div class="flex justify-center items-center">
            <p class="text-gray-500">Belum ada artikel yang tersedia.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($artikels as $artikel)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-green-400 text-white py-4 px-6 text-center">
                        <h5 class="text-lg font-semibold">{{ $artikel->judul }}</h5>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 text-sm">
                            {{ Str::limit(strip_tags($artikel->isi), 120) }}
                        </p>
                    </div>
                    <div class="bg-gray-100 px-6 py-4 flex justify-between items-center">
                        <div class="text-sm">
                            <p class="text-gray-600">
                                Ditulis oleh: <span class="font-medium">{{ $artikel->user->nama ?? 'Penulis tidak diketahui' }}</span>
                            </p>
                            <p class="text-gray-500">{{ $artikel->created_at->format('d M Y') }}</p>
                        </div>
                        <a href="{{ route('article.show', $artikel->id) }}"
                           class="text-blue-500 font-medium hover:underline">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
