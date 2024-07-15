<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#EAD8C0] flex items-center justify-center min-h-screen">
    <div class="bg-[#FFF8DB] p-6 rounded-lg shadow-2xl w-11/12 max-w-8xl flex items-center justify-center">
        <img src="{{ asset('images/coffee-beans-66.png') }}" alt="coffee images" class="w-96 h-96 p-5">
        <div class="bg-[#EAD8C0] m-20 p-10 rounded-lg shadow-lg w-full max-w-lg">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white w-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>