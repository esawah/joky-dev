<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<nav class="bg-[#FFF2E1] shadow">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <a class="text-xl font-bold" href="{{ url('/') }}">CoffePass</a>
        <div class="flex space-x-4">
            <a href="{{route('logout')}}" class="bg-[#EAD8C0] px-4 py-2 rounded-lg cursor-pointer">Logout</a>
        </div>
    </div>
</nav>

<body class="bg-[#EAD8C0]">
    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
