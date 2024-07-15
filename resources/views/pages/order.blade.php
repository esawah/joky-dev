@extends('layouts.app')

@section('content')
<div class="container-lg bg-[#EAD8C0] min-h-screen">
    <div class="max-w-full px-6 py-10">
        <h1 class="text-3xl font-bold mb-6">Order Your Favorite Drink</h1>

        <!-- Dropdown untuk kategori makanan dan minuman -->
        <div class="mb-6">
            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Select Category</label>
            <select id="category" name="category" class="mt-1 block w-md pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-md">
                <option value="">Choose a category</option>
                <option value="drink">Drink</option>
                <option value="food">Food</option>
            </select>
        </div>

        <!-- Tabel untuk kategori makanan dan minuman -->
        <table id="menuTable" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden mb-10">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Menu</th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data, bisa diganti dengan data dari database -->
                <tr class="menu-item drink hidden">
                    <td class="px-6 py-4 whitespace-nowrap">Espresso</td>
                    <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2">+</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded-lg">-</button>
                    </td>
                </tr>
                <tr class="menu-item drink hidden">
                    <td class="px-6 py-4 whitespace-nowrap">Latte</td>
                    <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2">+</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded-lg">-</button>
                    </td>
                </tr>
                <tr class="menu-item food hidden">
                    <td class="px-6 py-4 whitespace-nowrap">Croissant</td>
                    <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2">+</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded-lg">-</button>
                    </td>
                </tr>
                <tr class="menu-item food hidden">
                    <td class="px-6 py-4 whitespace-nowrap">Muffin</td>
                    <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2">+</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded-lg">-</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const categorySelect = document.getElementById('category');
    const menuItems = document.querySelectorAll('.menu-item');

    categorySelect.addEventListener('change', function () {
        const category = this.value;

        menuItems.forEach(item => {
            if (category === "" || item.classList.contains(category)) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    });
});
</script>
@endsection
