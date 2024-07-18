@extends('layouts.parent')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5 text-center">List Menu</h1>
    <div class="flex justify-end items-center mb-5">
        <a href="{{ route('menu.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Insert Menu
        </a>
    </div>
    @if(isset($menus))
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/7 px-4 py-2 text-center">ID</th>
                    <th class="w-1/7 px-4 py-2 text-center">Name</th>
                    <th class="w-1/7 px-4 py-2 text-center">Price</th>
                    <th class="w-1/7 px-4 py-2 text-center">Category</th>
                    <th class="w-1/7 px-4 py-2 text-center">Status</th>
                    <th class="w-1/7 px-4 py-2 text-center">Qty</th>
                    <th class="w-1/7 px-4 py-2 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                <tr class="bg-gray-100">
                    <td class="border px-4 py-2 text-center">{{ $menu->id }}</td>
                    <td class="border px-4 py-2 text-center">{{ $menu->nama }}</td>
                    <td class="border px-4 py-2 text-center">{{ $menu->harga }}</td>
                    <td class="border px-4 py-2 text-center">{{ $menu->kategori }}</td>
                    <td class="border px-4 py-2 text-center">{{ $menu->status }}</td>
                    <td class="border px-4 py-2 text-center">{{ $menu->stok }}</td>
                    <td class="border px-4 py-2 text-center">
                        <a href="{{ route('menu.edit', $menu->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded mr-2 hover:bg-blue-700">Edit</a>
                        <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No menu shows.</p>
    @endif
</div>
@endsection
