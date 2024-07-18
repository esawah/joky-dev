@extends('layouts.parent')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5 text-center">Insert Menu</h1>
    <form id="addMenuForm" method="POST" action="{{ route('menu.store') }}">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-bold mb-2">Name</label>
            <input type="text" id="nama" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-sm font-bold mb-2">Price</label>
            <input type="text" id="harga" name="harga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-bold mb-2">Category</label>
            <input type="text" id="kategori" name="kategori" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-bold mb-2">Status</label>
            <input type="text" id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="stok" class="block text-sm font-bold mb-2">Qty</label>
            <input type="number" id="stok" name="stok" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Save</button>
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
