<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('home');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/recruit', function () {
    return view('recruit');
});
Route::get('/pengurus', function () {
    return view('pengurus');
});

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/stat/update/{id}', [AdminController::class, 'updateStat'])->name('admin.stat.update');
