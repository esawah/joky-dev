@extends('layouts.app')

@section('content')
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-red-500 rounded-lg">Logout</button>
    </form>
</body>
</html>

@endsection
