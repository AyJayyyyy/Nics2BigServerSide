<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/Admin', function () {
    return view('admin.dashboard');
})->name('home');

// I connected it to the customer controller, 
// instead of just returning of the view
Route::get('/Customer', [CustomerController::class, 'index']);
Route::get('/AddCustomer', [CustomerController::class, 'addCustomer']);
Route::post('/AddCustomer', [CustomerController::class, 'saveCustomer']);
Route::get('/EditCustomer/{id}', [CustomerController::class, 'editCustomer']);
Route::post('/UpdateCustomer', [CustomerController::class, 'updateCustomer']);

Route::get('/Product', [ProductController::class, 'index']);
Route::get('/AddProduct', [ProductController::class, 'addProduct']);

Route::get('/Personnels', function () {
    return view('admin.personnel');
});

Route::get('/Orders', function () {
    return view('admin.order');
});

Route::get('/Delivery', function () {
    return view('admin.delivery');
});

Route::get('/Notification', function () {
    return view('admin.notification');
});

Route::get('/Report', function () {
    return view('admin.report');
});

Route::get('/Analytics', function () {
    return view('admin.analytics');
});

Route::get('/inuseadministrator', function () {
    return view('admin.editadmin');
});





Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
