<?php

use App\Http\Controllers\PengaduanController;
use App\Http\Livewire\Pages\DashboardComponents;
use App\Http\Livewire\Pages\Pengaduan\PengaduanComponents;
use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});

Route::post('/post-pengaduan', [PengaduanController::class, 'store'])->name('pengaduanData.store');
Route::post('/check-pengaduan', [PengaduanController::class, 'check_pengaduan'])->name('pengaduanData.check');

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', DashboardComponents::class)->name('dashboard');
    Route::get('/', DashboardComponents::class)->name('admin.dashboard');

    //? Pengaduan
    Route::prefix('pengaduan')->group(function () {
        Route::get('/', PengaduanComponents::class)->name('admin.pengaduan.index');
        Route::resource('/pengaduan-data', PengaduanController::class);
    });

});

require __DIR__.'/auth.php';
