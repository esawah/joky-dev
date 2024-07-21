@extends('layouts.app')

@section('content')
<div class="container-lg bg-[#EAD8C0] min-h-screen">
    <div class="max-w-full px-6 py-10 flex justify-between">
        <div class="w-4/6 m-5">
            <h1 class="text-3xl font-bold mb-6">Uncover the Magic of Our Café Menu and Treat Yourself to Unforgettable Flavors"</h1>

            <div class="mb-6 flex space-x-4">
                <div class="flex-1">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Select Category</label>
                    <select id="category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-md">
                        <option value="">Select category</option>
                        <option value="drink">Drinks</option>
                        <option value="food">Food</option>
                    </select>
                </div>

                <div class="flex-1">
                    <label for="searchMenu" class="block text-sm font-medium text-gray-700 mb-2">Search Menu</label>
                    <input type="text" id="searchMenu" name="searchMenu" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-md" placeholder="Search menu...">
                </div>
            </div>

            <table id="menuTable" class="min-w-full bg-white shadow-md rounded-lg overflow-hidden mb-10">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Menu</th>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 bg-gray-200 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr class="menu-item {{ $menu->kategori }}">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $menu->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $menu->harga }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-green-500 text-white px-2 py-1 rounded-lg mr-2 add-btn">+</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-lg remove-btn">-</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="w-2/6 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Order Summary</h2>
            <ul id="orderList" class="mb-4"></ul>
            <div class="font-bold">
                Total: <span id="totalPrice">0</span> IDR
            </div>
            <div class="btn">
                <button id="confirmOrderButton" class="bg-red-500 w-full px-4 py-2 rounded-lg text-white font-bold">Confirm</button>
            </div>
        </div>
    </div>

    <div id="confirmOrderModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-2xl font-bold mb-4">Confirm Your Order</h2>
            <form id="confirmOrderForm">
                @csrf
                <div class="mb-4">
                    <label for="customerName" class="block text-sm font-medium text-gray-700 mb-2">Customer Name</label>
                    <input type="text" id="customerName" name="customerName" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="orderType" class="block text-sm font-medium text-gray-700 mb-2">Order Type</label>
                    <select id="orderType" name="orderType" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 rounded-md" required>
                        <option value="here">Eat In</option>
                        <option value="takeaway">Takeaway</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="orderSummary" class="block text-sm font-medium text-gray-700 mb-2">Order Summary</label>
                    <ul id="orderSummary" class="list-disc pl-5"></ul>
                </div>
                <div class="mb-4 font-bold">
                    Total Price: <span id="confirmTotalPrice">0</span> IDR
                </div>
                <div class="flex justify-between">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg font-bold">Confirm</button>
                    <button type="button" id="cancelConfirmButton" class="bg-red-500 text-white px-4 py-2 rounded-lg font-bold">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addButton = document.querySelectorAll('.add-btn');
        const removeButton = document.querySelectorAll('.remove-btn');
        const orderList = document.getElementById('orderList');
        const totalPriceElement = document.getElementById('totalPrice');
        const confirmOrderButton = document.getElementById('confirmOrderButton');
        const confirmOrderModal = document.getElementById('confirmOrderModal');
        const confirmOrderForm = document.getElementById('confirmOrderForm');
        const cancelConfirmButton = document.getElementById('cancelConfirmButton');
        const orderSummary = document.getElementById('orderSummary');
        const confirmTotalPrice = document.getElementById('confirmTotalPrice');
        const categorySelect = document.getElementById('category');
        const searchInput = document.getElementById('searchMenu');
        const menuTableRows = document.querySelectorAll('#menuTable tbody tr');

        let orderItems = [];
        let totalPrice = 0;

        addButton.forEach(button => {
            button.addEventListener('click', function () {
                const row = this.closest('tr');
                const menuName = row.querySelector('td:nth-child(2)').innerText;
                const menuPrice = parseInt(row.querySelector('td:nth-child(3)').innerText);

                orderItems.push({ name: menuName, price: menuPrice });
                totalPrice += menuPrice;

                updateOrderList();
            });
        });

        removeButton.forEach(button => {
            button.addEventListener('click', function () {
                const row = this.closest('tr');
                const menuName = row.querySelector('td:nth-child(2)').innerText;
                const menuPrice = parseInt(row.querySelector('td:nth-child(3)').innerText);

                const itemIndex = orderItems.findIndex(item => item.name === menuName);
                if (itemIndex > -1) {
                    orderItems.splice(itemIndex, 1);
                    totalPrice -= menuPrice;
                }

                updateOrderList();
            });
        });

        function updateOrderList() {
            orderList.innerHTML = '';
            orderSummary.innerHTML = '';
            orderItems.forEach((item, index) => {
                const listItem = document.createElement('li');
                listItem.innerText = `${index + 1}. ${item.name} - ${item.price} IDR`;
                orderList.appendChild(listItem);

                const summaryItem = document.createElement('li');
                summaryItem.innerText = `${index + 1}. ${item.name} - ${item.price} IDR`;
                orderSummary.appendChild(summaryItem);
            });
            totalPriceElement.innerText = totalPrice;
            confirmTotalPrice.innerText = totalPrice;
        }

        confirmOrderButton.addEventListener('click', function () {
            confirmOrderModal.classList.remove('hidden');
        });

        cancelConfirmButton.addEventListener('click', function () {
            confirmOrderModal.classList.add('hidden');
        });

        confirmOrderForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(confirmOrderForm);
            const customerName = formData.get('customerName');
            const orderType = formData.get('orderType');
            const orderDetails = orderItems.map(item => `${item.name} - ${item.price} IDR`).join(', ');

            const orderData = {
                customerName: customerName,
                orderType: orderType,
                orderDetails: orderDetails,
                totalPrice: totalPrice
            };

            fetch('{{ route('orders.store') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                orderItems = [];
                totalPrice = 0;
                updateOrderList();

                confirmOrderModal.classList.add('hidden');
            })
            .catch(error => console.error('Error:', error));
        });

        // Filter by category
        categorySelect.addEventListener('change', function () {
            const selectedCategory = this.value;
            menuTableRows.forEach(row => {
                if (selectedCategory === '' || row.classList.contains(selectedCategory)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Search menu
        searchInput.addEventListener('input', function () {
            const searchText = this.value.toLowerCase();
            menuTableRows.forEach(row => {
                const menuName = row.querySelector('td:nth-child(2)').innerText.toLowerCase();
                if (menuName.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection
