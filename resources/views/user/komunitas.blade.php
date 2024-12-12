@extends('layouts.app_user')

@section('title', 'Komunitas - Ascend')

@section('content')
<div class="bg-green-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-green-600 mb-6">Komunitas</h1>

        <!-- Post Composer -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <form method="POST" action="/komunitas/post">
                @csrf
                <textarea 
                    name="post" 
                    class="w-full p-3 border border-green-300 rounded-lg focus:outline-none focus:ring focus:ring-green-300" 
                    rows="3" 
                    placeholder="Apa yang sedang kamu pikirkan?"></textarea>
                <div class="flex justify-end mt-3">
                    <button 
                        type="submit" 
                        class="bg-green-500 text-white py-2 px-4 rounded-lg font-medium hover:bg-green-600 transition">
                        Kirim
                    </button>
                </div>
            </form>
        </div>

        <!-- Posts Feed -->
        <div class="space-y-6">
            <!-- Single Post -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-green-400 rounded-full flex items-center justify-center text-white font-bold">
                        U
                    </div>
                    <div class="ml-4">
                        <p class="font-bold text-green-600">User123</p>
                        <p class="text-sm text-gray-500">5 menit yang lalu</p>
                    </div>
                </div>
                <p class="text-gray-700">Hari ini saya berhasil menyelesaikan tantangan harian! 🎉</p>
                <div class="mt-4 flex items-center space-x-4 text-gray-500">
                    <button class="flex items-center hover:text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3.172 10l4.95-4.95a.75.75 0 011.061 0l4.95 4.95a.75.75 0 11-1.061 1.061L9 7.311V17a.75.75 0 01-1.5 0V7.31l-3.889 3.888a.75.75 0 11-1.061-1.061z" />
                        </svg>
                        Like
                    </button>
                    <button class="flex items-center hover:text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5.05 4.05a7 7 0 019.9 0 7 7 0 010 9.9 7 7 0 01-9.9 0 7 7 0 010-9.9zM7.88 9.293a1 1 0 111.414-1.415 3 3 0 114.243 4.243 1 1 0 01-1.414-1.414 1 1 0 10-1.414-1.414 3 3 0 01-2.829 0z" />
                        </svg>
                        Comment
                    </button>
                </div>
            </div>

            <!-- Another Post -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-green-400 rounded-full flex items-center justify-center text-white font-bold">
                        M
                    </div>
                    <div class="ml-4">
                        <p class="font-bold text-green-600">Motivator99</p>
                        <p class="text-sm text-gray-500">10 menit yang lalu</p>
                    </div>
                </div>
                <p class="text-gray-700">Ingat, perjalanan ribuan langkah dimulai dengan langkah pertama. 🌟</p>
                <div class="mt-4 flex items-center space-x-4 text-gray-500">
                    <button class="flex items-center hover:text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3.172 10l4.95-4.95a.75.75 0 011.061 0l4.95 4.95a.75.75 0 11-1.061 1.061L9 7.311V17a.75.75 0 01-1.5 0V7.31l-3.889 3.888a.75.75 0 11-1.061-1.061z" />
                        </svg>
                        Like
                    </button>
                    <button class="flex items-center hover:text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5.05 4.05a7 7 0 019.9 0 7 7 0 010 9.9 7 7 0 01-9.9 0 7 7 0 010-9.9zM7.88 9.293a1 1 0 111.414-1.415 3 3 0 114.243 4.243 1 1 0 01-1.414-1.414 1 1 0 10-1.414-1.414 3 3 0 01-2.829 0z" />
                        </svg>
                        Comment
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
