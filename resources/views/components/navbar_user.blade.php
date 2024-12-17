<nav class="bg-green-400 shadow-lg" aria-label="Main Navigation">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-white" aria-label="Homepage">Ascend</a>
        <ul class="flex items-center space-x-6 text-sm">
            <li><a href="{{ route('user.homepage') }}" class="text-white hover:underline">Beranda</a></li>
            <li><a href="{{ route('tugas-harian.index') }}" class="text-white hover:underline">Tugas Harian</a></li>
            <li><a href="{{ route('tantangan.index') }}" class="text-white hover:underline">Challenge</a></li>
            <li><a href="{{ route('article.index') }}" class="text-white hover:underline">Artikel</a></li>
            <li><a href="{{ route('forum.index') }}" class="text-white hover:underline">Forum</a></li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-white px-4 py-2 bg-green-600 rounded hover:bg-green-700">Logout</button>
        </form>
    </div>
</nav>
