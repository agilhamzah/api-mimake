<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\BarangC;
use App\Http\Controllers\TransaksiC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;



Route::apiresource('/barang', BarangC::class)->middleware(['auth:sanctum']);
Route::apiresource('/transaksi',TransaksiC::class);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('agil');
});

route::get('/kasir',function(){
    return Hash::make('kasih');
});

