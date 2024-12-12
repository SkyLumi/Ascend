<header class="bg-green-500 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Admin Dashboard</h1>
        <nav>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-white px-4 py-2 bg-green-600 rounded hover:bg-green-700">Logout</button>
            </form>
        </nav>
</header>
