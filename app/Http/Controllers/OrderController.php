<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrderPage()
    {
        return view('pages.order');
    }
}
