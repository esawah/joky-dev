@extends('layouts.parent')

@section('content')
<div class="container mx-auto mt-10 max-w-7xl bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold mb-6 text-gray-900">Order List</h1>
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('report') }}" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-md transition duration-300">Download Report</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg border border-gray-200">
            <thead class="bg-gray-100 text-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Customer Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Order Type</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Order Details</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Total Price</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($orders as $order)
                <tr class="bg-gray-50 hover:bg-gray-100 transition duration-300">
                    <td class="px-6 py-4 text-gray-700">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->customer_name }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->order_type }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->order_details }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->total_price }}</td>
                    <td class="px-6 py-4 text-gray-700">{{ $order->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
