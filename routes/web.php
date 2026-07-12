<?php

use Illuminate\Support\Facades\Route;
use App\Models\TentangKami;
use App\Models\Fasilitas;
use App\Models\Pengajar;
use App\Models\Program;
use App\Models\Berita;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    $tentang = TentangKami::first();
    $fasilitas = Fasilitas::latest()->take(6)->get();
    $pengajar = Pengajar::latest()->get();
    $programs = Program::latest()->take(4)->get();
    $beritas = Berita::latest()->take(6)->get();

    return view('beranda', compact(
        'tentang',
        'fasilitas',
        'pengajar',
        'programs',
        'beritas'
    ));
});
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/program', [ProgramController::class, 'index']);
Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])
            ->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | Berita
        |--------------------------------------------------------------------------
        */
        Route::resource('berita', BeritaController::class);

        /*
        |--------------------------------------------------------------------------
        | Program Pembelajaran
        |--------------------------------------------------------------------------
        */
        Route::resource('program', ProgramController::class);

        Route::put('/program/{id}/toggle-status', [ProgramController::class, 'toggleStatus'])
            ->name('program.toggle-status');


        /*
        |--------------------------------------------------------------------------
        | Tentang Kami
        |--------------------------------------------------------------------------
        */
        Route::controller(TentangKamiController::class)
            ->prefix('tentang-kami')
            ->group(function () {

                Route::get('/', 'index')
                    ->name('tentang-kami.index');

                Route::post('/', 'storeTentang')
                    ->name('tentang-kami.store');

                Route::post('/fasilitas', 'storeFasilitas')
                    ->name('fasilitas.store');

                Route::post('/pengajar', 'storePengajar')
                    ->name('pengajar.store');

                Route::delete('/fasilitas/{id}', 'destroyFasilitas')
                    ->name('fasilitas.destroy');

                Route::delete('/pengajar/{id}', 'destroyPengajar')
                    ->name('pengajar.destroy');

                Route::put('/fasilitas/{id}', 'updateFasilitas')
                    ->name('fasilitas.update');

                Route::put('/pengajar/{id}', 'updatePengajar')
                    ->name('pengajar.update');
            });
    });

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__ . '/auth.php';
