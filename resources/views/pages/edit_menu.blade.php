@extends('layouts.parent')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5 text-center">Edit Menu</h1>
    <form method="POST" action="{{ route('menu.update', $menu->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama" class="block text-sm font-bold mb-2">Name</label>
            <input type="text" id="nama" name="nama" value="{{ $menu->nama }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-sm font-bold mb-2">Price</label>
            <input type="text" id="harga" name="harga" value="{{ $menu->harga }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-bold mb-2">Category</label>
            <input type="text" id="kategori" name="kategori" value="{{ $menu->kategori }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-bold mb-2">Status</label>
            <input type="text" id="status" name="status" value="{{ $menu->status }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="stok" class="block text-sm font-bold mb-2">Qty</label>
            <input type="number" id="stok" name="stok" value="{{ $menu->stok }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('menu.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </div>
    </form>
</div>
@endsection
