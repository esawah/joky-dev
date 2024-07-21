<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('admin', function () {
        return view('pages.admin');
    })->name('login.admin');
});

// Rute Order
Route::get('/order', [OrderController::class, 'order'])->name('order');
Route::post('/order', [OrderController::class, 'storeOrder'])->name('storeOrder');
Route::get('/order-list', [OrderController::class, 'orderList'])->name('order.list');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/generate-report', [ReportController::class, 'generateReport'])->name('report');