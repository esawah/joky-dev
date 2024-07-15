@extends('layouts.app')

@section('content')
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>

@endsection
