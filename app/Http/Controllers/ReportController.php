<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function generateReport()
    {
        $orders = \App\Models\Order::all();
        $pdf = PDF::loadView('reports.reportsOrder', compact('orders'));
        return $pdf->download('daftar_pesanan.pdf');
    }
}
