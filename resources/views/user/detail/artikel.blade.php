@extends('layouts.app_user')

@section('title', $artikel->judul)

@section('content')
<div class="container mx-auto px-4 lg:px-20 py-10">
        <!-- Teks Kembali di Kiri Atas -->
        <div class="mb-4">
            <a href="{{ route("article.index") }}" class="text-gray-500 hover:underline text-sm md:text-base">
                ← Kembali
            </a>
        </div>

        <!-- Judul Artikel -->
        <h1 class="text-2xl md:text-4xl font-bold text-center text-gray-800 mb-4">
            {{ $artikel->judul }}
        </h1>

        <!-- Info Penulis dan Tanggal -->
        <p class="text-center text-sm md:text-base text-gray-500">
            Ditulis oleh:
            <span class="font-medium text-gray-700">
                {{ $artikel->user->nama ?? 'Penulis tidak diketahui' }}
            </span>
        </p>
        <p class="text-center text-sm md:text-base text-gray-400 mb-8">
            {{ $artikel->created_at->format('d M Y') }}
        </p>

        <!-- Isi Artikel -->
        <div class="prose prose-lg max-w-none text-justify text-gray-700 mt-6 leading-relaxed">
            {!! nl2br(e($artikel->isi)) !!}
        </div>
</div>
@endsection
