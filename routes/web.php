<?php

use Illuminate\Support\Facades\Route;


use App\Models\TentangKami;
use App\Models\Fasilitas;
use App\Models\Pengajar;
use App\Models\Program;
use App\Models\Berita;
use App\Models\Prestasi;



use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranController;



/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/


Route::get('/', function () {


    return view('beranda',[


        'tentang'
            => TentangKami::first(),


        'fasilitas'
            => Fasilitas::latest()
                ->take(6)
                ->get(),



        'pengajar'
            => Pengajar::latest()
                ->get(),



        'programs'
            => Program::latest()
                ->take(4)
                ->get(),



        'beritas'
            => Berita::latest()
                ->take(6)
                ->get(),



        'prestasi'
            => Prestasi::with('media')
                ->latest()
                ->take(6)
                ->get(),


    ]);


});








/*
|--------------------------------------------------------------------------
| ADMIN
/*
|--------------------------------------------------------------------------
| Pendaftaran
|--------------------------------------------------------------------------
*/
Route::prefix('pendaftaran')->group(function () {

    Route::get('/', [PendaftaranController::class, 'index'])
        ->name('pendaftaran.index');

    Route::get('/create', [PendaftaranController::class, 'create'])
        ->name('pendaftaran.create');

    Route::post('/', [PendaftaranController::class, 'store'])
        ->name('pendaftaran.store');

    Route::get('/{pendaftaran}', [PendaftaranController::class, 'show'])
        ->name('pendaftaran.show');


Route::middleware(['auth','verified'])
->prefix('admin')
->group(function(){
});

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');



Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->group(function () {



    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */


    Route::get(
        '/dashboard',
        [DashboardController::class,'dashboard']
    )
    ->name('dashboard');







    /*
    |--------------------------------------------------------------------------
    | Berita
    |--------------------------------------------------------------------------
    */


    Route::resource(
        'berita',
        BeritaController::class
    );







    /*
    |--------------------------------------------------------------------------
    | Program
    |--------------------------------------------------------------------------
    */


    Route::resource(
        'program',
        ProgramController::class
    );



    Route::put(
        'program/{id}/toggle-status',
        [ProgramController::class,'toggleStatus']
    )
    ->name('program.toggle-status');









    /*
    |--------------------------------------------------------------------------
    | Tentang Kami
    |--------------------------------------------------------------------------
    */


    Route::prefix('tentang-kami')
    ->controller(TentangKamiController::class)
    ->group(function(){



        Route::get(
            '/',
            'index'
        )
        ->name('tentang-kami.index');





        Route::post(
            '/',
            'storeTentang'
        )
        ->name('tentang-kami.store');


            '/dashboard',
            [DashboardController::class, 'dashboard']
        )->name('dashboard');





        /*
        | Fasilitas
        */
        Route::resource('berita', BeritaController::class);


        Route::post(
            '/fasilitas',
            'storeFasilitas'
        )
        ->name('fasilitas.store');



        Route::put(
            '/fasilitas/{id}',
            'updateFasilitas'
        )
        ->name('fasilitas.update');



        Route::delete(
            '/fasilitas/{id}',
            'destroyFasilitas'
        )
        ->name('fasilitas.destroy');






        /*
        |--------------------------------------------------------------------------
        | Program
        |--------------------------------------------------------------------------
        */
        Route::resource('program', ProgramController::class);

        Route::put(
            '/program/{id}/toggle-status',
            [ProgramController::class, 'toggleStatus']
        )->name('program.toggle-status');


        /*
        | Pengajar
        */


        Route::post(
            '/pengajar',
            'storePengajar'
        )
        ->name('pengajar.store');

        |--------------------------------------------------------------------------
        | Pendaftaran
        |--------------------------------------------------------------------------
        */

        Route::get('/pendaftaran', [PendaftaranController::class, 'index'])
            ->name('admin.pendaftaran.index');

        Route::get('/pendaftaran/{pendaftaran}/edit', [PendaftaranController::class, 'edit'])
            ->name('admin.pendaftaran.edit');

        Route::put(
            '/pengajar/{id}',
            'updatePengajar'
        )
        ->name('pengajar.update');



        Route::delete(
            '/pengajar/{id}',
            'destroyPengajar'
        )
        ->name('pengajar.destroy');


        Route::put('/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'update'])
            ->name('admin.pendaftaran.update');

        Route::get('/pendaftaran/pdf', [PendaftaranController::class, 'pdf'])
            ->name('admin.pendaftaran.pdf');

        Route::get('/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'show'])
            ->name('admin.pendaftaran.show');

        Route::delete('/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'destroy'])
            ->name('admin.pendaftaran.destroy');





        /*
        | Prestasi dari Tab Tentang Kami
        */

        Route::prefix('tentang-kami')
            ->controller(TentangKamiController::class)
            ->group(function () {

        Route::post(
            '/prestasi',
            'storePrestasi'
        )
        ->name('tentang-kami.prestasi.store');



        Route::delete(
            '/prestasi/{id}',
            'destroyPrestasi'
        )
        ->name('tentang-kami.prestasi.destroy');



    });









    /*
    |--------------------------------------------------------------------------
    | Menu Prestasi Mandiri
    |--------------------------------------------------------------------------
    */


    Route::resource(
        'prestasi',
        PrestasiController::class
    );



    Route::delete(
        'prestasi/media/{media}',
        [PrestasiController::class,'destroyMedia']
    )
    ->name('prestasi.media.destroy');







});









/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/


Route::middleware('auth')
->group(function(){


    ->group(function () {


        Route::get(
            '/profile',
            [ProfileController::class, 'edit']
        )->name('profile.edit');

    Route::get(
        '/profile',
        [ProfileController::class,'edit']
    )
    ->name('profile.edit');



    Route::patch(
        '/profile',
        [ProfileController::class,'update']
    )
    ->name('profile.update');



    Route::delete(
        '/profile',
        [ProfileController::class,'destroy']
    )
    ->name('profile.destroy');



});


        Route::patch(
            '/profile',
            [ProfileController::class, 'update']
        )->name('profile.update');


        Route::delete(
            '/profile',
            [ProfileController::class, 'destroy']
        )->name('profile.destroy');





require __DIR__ . '/auth.php';