@extends('layouts.parent')

@section('content')
<div class="container mx-auto max-w-full bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold mb-6 text-center text-gray-900">Edit Menu</h1>
    <form method="POST" action="{{ route('menu.update', $menu->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
            <input type="text" id="nama" name="nama" value="{{ $menu->nama }}" class="shadow-sm border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ring-2 focus:ring-indigo-500" required>
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
            <input type="text" id="harga" name="harga" value="{{ $menu->harga }}" class="shadow-sm border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ring-2 focus:ring-indigo-500" required>
        </div>
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
            <select id="kategori" name="kategori" class="shadow-sm border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ring-2 focus:ring-indigo-500" required>
                <option value="food" {{ $menu->kategori == 'food' ? 'selected' : '' }}>Food</option>
                <option value="drink" {{ $menu->kategori == 'drink' ? 'selected' : '' }}>Drink</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <select id="status" name="status" class="shadow-sm border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ring-2 focus:ring-indigo-500" required>
                <option value="available" {{ $menu->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $menu->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="stok" class="block text-sm font-medium text-gray-700 mb-2">Qty</label>
            <input type="number" id="stok" name="stok" value="{{ $menu->stok }}" class="shadow-sm border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:ring-2 focus:ring-indigo-500" required>
        </div>
        <div class="flex justify-end gap-2">
            <a href="{{ route('menu.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-medium py-2 px-4 rounded-md transition duration-300">Cancel</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">Save</button>
        </div>
    </form>
</div>
@endsection
