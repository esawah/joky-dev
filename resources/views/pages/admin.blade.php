@extends('layouts.parent')

@section('content')
<div class="container mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
    <h1 class="text-4xl font-bold mb-6 text-center text-gray-900">Menu List</h1>
    <div class="flex justify-end mb-6">
        <a href="{{ route('menu.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
            Add New Menu
        </a>
    </div>
    @if(isset($menus))
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium">ID</th>
                        <th class="px-4 py-3 text-left text-sm font-medium">Name</th>
                        <th class="px-4 py-3 text-left text-sm font-medium">Price</th>
                        <th class="px-4 py-3 text-left text-sm font-medium">Category</th>
                        <th class="px-4 py-3 text-left text-sm font-medium">Status</th>
                        <th class="px-4 py-3 text-left text-sm font-medium">Qty</th>
                        <th class="px-4 py-3 text-center text-sm font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($menus as $menu)
                    <tr class="bg-gray-50 hover:bg-gray-200 transition duration-300">
                        <td class="px-4 py-3 text-gray-700">{{ $menu->id }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $menu->nama }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $menu->harga }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $menu->kategori }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $menu->status }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $menu->stok }}</td>
                        <td class="px-4 py-3 text-center">
                            <a href="{{ route('menu.edit', $menu->id) }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-sm font-medium">Edit</a>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300 text-sm font-medium" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center text-gray-600">No menus available.</p>
    @endif
</div>
@endsection
