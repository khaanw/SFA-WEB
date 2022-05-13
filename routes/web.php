<?php

use App\Http\Controllers\groupbarangController;
use App\Http\Controllers\groupcustomerController;
use App\Http\Controllers\channelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\stokController;
use App\Http\Controllers\salesmanController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\pembeliandController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\penjualandController;
use App\Http\Controllers\testController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/barang/data', [barangController::class,'data'])->name('barang.data');
Route::resource('/barang',barangController::class);

Route::get('/supplier/data', [supplierController::class,'data'])->name('supplier.data');
Route::resource('/supplier',supplierController::class);

Route::get('/customer/data', [supplierController::class,'data'])->name('customer.data');
Route::resource('/customer',supplierController::class);

Route::get('/groupcustomer/data', [groupcustomerController::class,'data'])->name('groupcustomer.data');
Route::resource('/groupcustomer',groupcustomerController::class);

Route::get('/groupbarang/data', [groupbarangController::class,'data'])->name('groupbarang.data');
Route::resource('/groupbarang',groupbarangController::class);

Route::get('/channel/data', [channelController::class,'data'])->name('channel.data');
Route::resource('/channel',channelController::class);

Route::get('/customer/data', [customerController::class,'data'])->name('customer.data');
Route::resource('/customer',customerController::class);

Route::get('/stok/data', [stokController::class,'data'])->name('stok.data');
Route::resource('/stok',stokController::class);

Route::get('/opname/data', [opnameController::class,'data'])->name('opname.data');
Route::resource('/opname',opnameController::class);

Route::get('/salesman/data', [salesmanController::class,'data'])->name('salesman.data');
Route::resource('/salesman',salesmanController::class);


Route::get('/pembelian/{id}/create', [pembelianController::class,'create'])->name('pembelian.create');
Route::resource('/pembelian',pembelianController::class)
->except('create');

// Route::get('/pembelian/{id}/create', [pembelianController::class,'create'])->name('pembelian.create');
Route::resource('/penjualan',penjualanController::class);
// ->except('create');

Route::resource('/penjualan_detail',penjualandController::class);
// ->except('create');

Route::resource('/pembeliand',pembeliandController::class)
->except('create','show','edit');

Route::get('/test/{id}',function($anwar){
    return 'Hallo ' .$anwar;
});

Route::resource('/test' ,testController::class);
