<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-400 flex justify-center items-center min-h-screen">
    <div class="bg-white text-black p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-black text-sm font-medium mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full p-3 border border-green-300 bg-green-100 text-black rounded focus:outline-none focus:ring focus:ring-green-500 placeholder-green-600"
                    placeholder="Enter your email"
                    required
                    value="{{ old('email') }}"
                >
            </div>
            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-black text-sm font-medium mb-2">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full p-3 border border-green-300 bg-green-100 text-black rounded focus:outline-none focus:ring focus:ring-green-500 placeholder-green-600"
                    placeholder="Enter your password"
                    required
                >
            </div>
            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-400 transition">
                Login
            </button>
            <!-- Forgot Password -->
            <div class="text-center mt-4">
                <a href="/register" class="text-sm text-green-700 hover:underline">Belum punya akun?</a>
            </div>
        </form>
    </div>
</body>
</html>
