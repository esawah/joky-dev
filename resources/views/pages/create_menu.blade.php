@extends('layouts.parent')

@section('content')
<div class="container mx-auto bg-gray p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-900">Insert Menu</h1>
    <form id="addMenuForm" method="POST" action="{{ route('menu.store') }}">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-bold mb-2 text-gray-700">Name</label>
            <input type="text" id="nama" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-sm font-bold mb-2 text-gray-700">Price</label>
            <input type="text" id="harga" name="harga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-bold mb-2 text-gray-700">Category</label>
            <select id="kategori" name="kategori" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="drink">Drink</option>
                <option value="food">Food</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="stok" class="block text-sm font-bold mb-2 text-gray-700">Qty</label>
            <input type="number" id="stok" name="stok" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300">Save</button>
            <a href="{{ route('menu.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300">Cancel</a>
        </div>
    </form>
</div>

<script>
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    var hargaInput = document.getElementById('harga');
    hargaInput.addEventListener('keyup', function(e) {
        hargaInput.value = formatRupiah(this.value, 'Rp. ');
    });

    document.getElementById('addMenuForm').addEventListener('submit', function(event) {
        var hargaValue = hargaInput.value.replace(/[^0-9]/g, '');
        hargaInput.value = hargaValue + ' IDR';
    });
</script>
@endsection
