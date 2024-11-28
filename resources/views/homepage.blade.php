@extends('layouts.app')

@section('title', 'Selamat Datang di Ascend!')

@section('content')
    <!-- Hero Section -->
    <header class="bg-green-500 text-white py-20" role="banner">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di Ascend!</h1>
            <p class="text-lg mb-6">Tempat terbaik untuk mencatat perjalananmu, bergabung dengan komunitas, dan menghadapi tantangan yang seru.</p>
            <a href="/register" class="bg-white text-green-500 py-3 px-6 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                Mulai Sekarang
            </a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container mx-auto px-4 py-12" aria-labelledby="fitur-unggulan">
        <h2 id="fitur-unggulan" class="text-3xl font-bold text-center text-green-600 mb-8">Fitur Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <article class="bg-white p-6 rounded-lg shadow-lg text-center" aria-labelledby="fitur-komunitas">
                <div class="text-green-500 text-4xl mb-4" aria-hidden="true">💬</div>
                <h3 id="fitur-komunitas" class="text-xl font-bold mb-2">Komunitas</h3>
                <p>Bergabunglah dengan komunitas yang aktif dan berbagi pengalamanmu.</p>
            </article>
            <!-- Feature 2 -->
            <article class="bg-white p-6 rounded-lg shadow-lg text-center" aria-labelledby="fitur-pencatatan">
                <div class="text-green-500 text-4xl mb-4" aria-hidden="true">📋</div>
                <h3 id="fitur-pencatatan" class="text-xl font-bold mb-2">Pencatatan</h3>
                <p>Catat perkembangan harianmu dengan fitur pencatatan yang mudah digunakan.</p>
            </article>
            <!-- Feature 3 -->
            <article class="bg-white p-6 rounded-lg shadow-lg text-center" aria-labelledby="fitur-challenge">
                <div class="text-green-500 text-4xl mb-4" aria-hidden="true">🏆</div>
                <h3 id="fitur-challenge" class="text-xl font-bold mb-2">Challenge</h3>
                <p>Ikuti tantangan seru untuk meningkatkan motivasi dan keterlibatanmu.</p>
            </article>
        </div>
    </section>
@endsection
