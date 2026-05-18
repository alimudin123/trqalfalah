<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::resource('berita', BeritaController::class);

    Route::put('/program/{id}/toggle-status', [ProgramController::class, 'toggleStatus'])
    ->name('program.toggle-status');

    

});
/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::resource('program', ProgramController::class);
   

});
require __DIR__.'/auth.php';