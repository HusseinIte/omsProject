<?php

use App\Http\Controllers\Offer\OfferController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\User\AuthAdminController;
use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\EmployeeController;
use App\Services\Users\ManageEmployee;
use Illuminate\Support\Facades\Route;


/**
 *  Admin Route
 */
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/employee', [EmployeeController::class, 'index'])->name('admin.employee.index');
    Route::get('/customer', [CustomerController::class, 'index'])->name('admin.customer.index');
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/order', [OrderController::class, 'index'])->name('admin.order.index');
    Route::get('/offer', [OfferController::class, 'index'])->name('admin.offer.index');
    Route::get('logout', [AuthAdminController::class, 'logout'])->name('admin.logout');
});
Route::get('addEmployee', [ManageEmployee::class, 'addEmployee']);

Route::group(['middleware' => 'guest:admin'], function () {

    Route::get('login', [AuthAdminController::class, 'showAdminView'])->name('admin.showLogin');
    Route::post('login', [AuthAdminController::class, 'login'])->name('admin.login');

});

