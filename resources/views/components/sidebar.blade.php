<aside class="bg-white w-64 p-4 border-r border-gray-200">
    <ul>
        <li class="mb-4">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-green-100">Dashboard</a>
        </li>
        <li class="mb-4">
            <a href="{{ route('user.index') }}" class="block py-2 px-4 rounded hover:bg-green-100">Manage Users</a>
        </li>
        <li class="mb-4">
            <a href="{{ route('challenge.index') }}" class="block py-2 px-4 rounded hover:bg-green-100">Manage Challenges</a>
        </li>
        <li class="mb-4">
            <a href="{{ route('daily-task.index') }}" class="block py-2 px-4 rounded hover:bg-green-100">Manage Daily Tasks</a>
        </li>
        <li>
            <a href="#articles" class="block py-2 px-4 rounded hover:bg-green-100">Manage Articles</a>
        </li>
    </ul>
</aside>
