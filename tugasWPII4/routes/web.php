<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource("anggota", AnggotaController::class);

Route::get("helloworld", [HelloWorldController::class, "index"]);
Route::get("ambilfile", [HelloWorldController::class, "ambilFile"]);

Route::get("getlorem", [HtmlController::class, "getLorem"]);

Route::get('/form', [LatihanController::class, 'getForm'])->name('latihan.getform');
Route::post('/store', [LatihanController::class, 'store'])->name('latihan.store');
Route::get('/table', [LatihanController::class, 'getTable'])->name('latihan.gettable');