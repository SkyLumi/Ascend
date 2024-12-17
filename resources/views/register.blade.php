<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-400 flex justify-center items-center min-h-screen">
    <div class="bg-white text-black p-10 rounded-lg shadow-lg w-full max-w-xl">
        <h1 class="text-3xl font-bold text-center mb-8 text-green-600">Register</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name Field -->
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-black mb-2">Nama</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="w-full p-3 border border-green-300 bg-green-100 text-black rounded focus:outline-none focus:ring focus:ring-green-500 placeholder-green-600"
                    placeholder="Masukkan Nama mu"
                    value="{{ old('nama') }}"
                    required
                >
                @error('nama')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-black mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full p-3 border border-green-300 bg-green-100 text-black rounded focus:outline-none focus:ring focus:ring-green-500 placeholder-green-600"
                    placeholder="Masukkan Email mu"
                    value="{{ old('email') }}"
                    required
                >
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password and Confirm Password -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                <div>
                    <label for="password" class="block text-sm font-medium text-black mb-2">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="w-full p-3 border border-green-300 bg-green-100 text-black rounded focus:outline-none focus:ring focus:ring-green-500 placeholder-green-600"
                        placeholder="Massukkan Password mu"
                        required
                    >
                    @error('password')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-black mb-2">Confirm Password</label>
                    <input
                        type="password"
                        name="confirm_password"
                        id="confirm_password"
                        class="w-full p-3 border border-green-300 bg-green-100 text-black rounded focus:outline-none focus:ring focus:ring-green-500 placeholder-green-600"
                        placeholder="Masukkan ulang Password mu"
                        required
                    >
                    @error('confirm_password')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-400 transition">
                Register
            </button>

            <!-- Already have an account -->
            <div class="text-center mt-4">
                <p class="text-sm text-black">
                    Already have an account?
                    <a href="{{ route('login')}}" class="text-green-700 hover:underline">Login here</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
