<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <header class="bg-green-500 text-white p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <nav>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white px-4 py-2 bg-green-600 rounded hover:bg-green-700">Logout</button>
                </form>
            </nav>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-white w-64 p-4 border-r border-gray-200">
            <ul>
                <li class="mb-4">
                    <a href="#users" class="block py-2 px-4 rounded hover:bg-green-100">Manage Users</a>
                </li>
                <li class="mb-4">
                    <a href="#challenges" class="block py-2 px-4 rounded hover:bg-green-100">Manage Challenges</a>
                </li>
                <li class="mb-4">
                    <a href="#daily-tasks" class="block py-2 px-4 rounded hover:bg-green-100">Manage Daily Tasks</a>
                </li>
                <li>
                    <a href="#articles" class="block py-2 px-4 rounded hover:bg-green-100">Manage Articles</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-8">
            <!-- Manage Users Section -->
            <section id="users" class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold mb-4">Manage Users</h2>
                <button class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add User</button>
                <table class="w-full table-auto border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Name</th>
                            <th class="border px-4 py-2">Email</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">John Doe</td>
                            <td class="border px-4 py-2">johndoe@example.com</td>
                            <td class="border px-4 py-2">
                                <button class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</button>
                                <button class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Manage Challenges Section -->
            <section id="challenges" class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold mb-4">Manage Challenges</h2>
                <button class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Challenge</button>
                <!-- Similar Table as above -->
            </section>

            <!-- Manage Daily Tasks Section -->
            <section id="daily-tasks" class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold mb-4">Manage Daily Tasks</h2>
                <button class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Task</button>
                <!-- Similar Table as above -->
            </section>

            <!-- Manage Articles Section -->
            <section id="articles" class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold mb-4">Manage Articles</h2>
                <button class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Article</button>
                <!-- Similar Table as above -->
            </section>
        </main>
    </div>
</body>
</html>
