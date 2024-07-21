<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $menus = Menu::all();
        return view('pages.order', compact('menus'));
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'customer_name' => $request->customerName,
            'order_type' => $request->orderType,
            'order_details' => $request->orderDetails,
            'total_price' => $request->totalPrice,
        ]);

        return redirect()->route('orders.index');
    }

    public function index()
    {
        $orders = Order::all();
        return view('pages.orderList', compact('orders'));
    }
    public function orderList()
    {
        $orders = Order::with('items')->get();
        return view('pages.orderList', compact('orders'));
    }
}