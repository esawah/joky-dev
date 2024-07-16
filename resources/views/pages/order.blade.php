@extends('layouts.app')

@section('content')
<div class="container-lg bg-[#EAD8C0] min-h-screen">
<<<<<<< Updated upstream
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
=======
    <div class="max-w-full px-6 py-10 flex justify-between">
        <div class="w-4/6 m-5">
            <h1 class="text-3xl font-bold mb-6">Order Your Favorite Drink</h1>

            <!-- Dropdown untuk kategori makanan dan minuman serta input pencarian sejajar -->
            <div class="mb-6 flex space-x-4">
                <div class="flex-1">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Select Category</label>
                    <select id="category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-md">
                        <option value="">Choose a category</option>
                        <option value="drink">Drink</option>
                        <option value="food">Food</option>
                    </select>
                </div>

                <div class="flex-1">
                    <label for="searchMenu" class="block text-sm font-medium text-gray-700 mb-2">Search Menu</label>
                    <input type="text" id="searchMenu" name="searchMenu" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-md" placeholder="Search menu...">
                </div>
            </div>

            <!-- Tabel untuk kategori makanan dan minuman -->
            <table id="menuTable" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden mb-10">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Menu</th>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data, bisa diganti dengan data dari database -->
                    <tr class="menu-item drink hidden">
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap">Espresso</td>
                        <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2 add-btn">+</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg remove-btn">-</button>
                        </td>
                    </tr>
                    <tr class="menu-item drink hidden">
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap">Latte</td>
                        <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2 add-btn">+</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg remove-btn">-</button>
                        </td>
                    </tr>
                    <tr class="menu-item food hidden">
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap">Croissant</td>
                        <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2 add-btn">+</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg remove-btn">-</button>
                        </td>
                    </tr>
                    <tr class="menu-item food hidden">
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap">Muffin</td>
                        <td class="px-6 py-4 whitespace-nowrap">10.000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2 add-btn">+</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg remove-btn">-</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- List Pesanan -->
        <div class="w-2/6 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Order List</h2>
            <ul id="orderList" class="mb-4">
                <!-- Pesanan akan muncul di sini -->
            </ul>
            <div class="font-bold">
                Total: <span id="totalPrice">0</span> IDR
            </div>
            <div class="btn">
                <button class="bg-red-500 w-full px-4 py-2 rounded-lg text-white font-bold">OK</button>
            </div>
        </div>
>>>>>>> Stashed changes
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const categorySelect = document.getElementById('category');
<<<<<<< Updated upstream
    const menuItems = document.querySelectorAll('.menu-item');

    categorySelect.addEventListener('change', function () {
        const category = this.value;

        menuItems.forEach(item => {
            if (category === "" || item.classList.contains(category)) {
=======
    const searchMenu = document.getElementById('searchMenu');
    const menuItems = document.querySelectorAll('.menu-item');
    const orderList = document.getElementById('orderList');
    const totalPriceElem = document.getElementById('totalPrice');
    let totalPrice = 0;

    function updateMenuItems() {
        const category = categorySelect.value;
        const searchValue = searchMenu.value.toLowerCase();
        let counter = 1;

        menuItems.forEach(item => {
            const itemName = item.children[1].textContent.toLowerCase();
            if ((category === "" || item.classList.contains(category)) && itemName.includes(searchValue)) {
                item.querySelector('td').textContent = counter++;
>>>>>>> Stashed changes
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
<<<<<<< Updated upstream
    });
});
</script>
@endsection
=======
    }

    function updateTotalPrice() {
        let total = 0;
        document.querySelectorAll('#orderList li').forEach(item => {
            const price = parseInt(item.getAttribute('data-price'), 10);
            total += price;
        });
        totalPriceElem.textContent = total.toLocaleString();
    }

    categorySelect.addEventListener('change', updateMenuItems);
    searchMenu.addEventListener('input', updateMenuItems);

    // Initial update
    updateMenuItems();

    document.querySelectorAll('.add-btn').forEach(button => {
        button.addEventListener('click', function () {
            const row = this.closest('tr');
            const menuName = row.children[1].textContent;
            const price = parseInt(row.children[2].textContent.replace('.', ''), 10);

            const orderItem = document.createElement('li');
            orderItem.textContent = menuName + " - " + price.toLocaleString() + " IDR";
            orderItem.setAttribute('data-price', price);
            orderItem.setAttribute('data-name', menuName);
            orderList.appendChild(orderItem);

            updateTotalPrice();
        });
    });

    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', function () {
            const row = this.closest('tr');
            const menuName = row.children[1].textContent;

            const orderItems = document.querySelectorAll(`#orderList li[data-name="${menuName}"]`);
            if (orderItems.length > 0) {
                orderItems[orderItems.length - 1].remove();
                updateTotalPrice();
            }
        });
    });
});
</script>
@endsection
>>>>>>> Stashed changes
