<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;

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
    return view('products.product_details');
});

Route::get('/details', function () {
    return view('products.product_card');
});

Route::get('/list', function () {
    return view('products.product_list');
});

Route::get('/members', function(){
    return view('members.create');
});

Route::get('/create', [MembershipController::class, 'create'])->name('create');
Route::post('/store', [MembershipController::class, 'store'])->name('store');

Route::get('/members', [MembershipController::class, 'index'])->name('members');

