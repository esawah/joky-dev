<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    @yield('styles')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-gray-900 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-semibold">
                <a href="{{ route('menu.index') }}" class="hover:text-indigo-200 transition duration-300">Admin Dashboard</a>
            </div>
            <div>
                <a href="{{ route('logout') }}" class="bg-[#b29a7c] hover:bg-red-700 text-white px-4 py-2 rounded-md transition duration-300">Logout</a>
            </div>
        </div>
    </nav>

    <div class="flex flex-1">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex-none p-6">
            <h2 class="text-2xl font-semibold mb-6">Admin Panel</h2>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('menu.index') }}" class="flex items-center py-2 px-4 rounded-md hover:bg-gray-700 transition duration-300">
                        <svg class="w-5 h-5 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M3 6h18M3 18h18"></path></svg>
                        Menu List
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('order.list') }}" class="flex items-center py-2 px-4 rounded-md hover:bg-gray-700 transition duration-300">
                        <svg class="w-5 h-5 mr-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Order List
                    </a>
                </li>
                <!-- Add more links here -->
            </ul>
        </div>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white rounded-lg shadow-lg">
            @yield('content')
        </main>
    </div>
</body>
</html>
