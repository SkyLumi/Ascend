@extends('layouts.app_admin')

@section('title', 'Tambah User')

@section('content')
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Add New User</h2>
    <div class="max-w-lg mx-auto bg-white shadow-2xl rounded-lg overflow-hidden">
        <div class="p-6">
            <!-- Back Button -->
            <a href="{{ url()->previous() }}"
               class="inline-block mb-4 bg-gray-200 text-gray-800 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                &larr; Back
            </a>

            <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Name Input -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nama') @enderror"
                        required>
                    @error('nama')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') @enderror"
                        required>
                    @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('password') @enderror"
                        required>
                    @error('password')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Role Dropdown -->
                <div>
                    <label for="is_admin" class="block text-sm font-medium text-gray-700">Role</label>
                    <select id="is_admin" name="is_admin"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('is_admin') @enderror"
                        required>
                        <option value="0" {{ old('is_admin') == 0 ? 'selected' : '' }}>User</option>
                        <option value="1" {{ old('is_admin') == 1 ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('is_admin')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Add User
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
