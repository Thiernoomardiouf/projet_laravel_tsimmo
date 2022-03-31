<?php

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
    return view('welcome');
});

    // Route::middleware(['auth'])->group(function () {

        // Les routes pour les propriétaires 
        Route::get('/proprietaire', [ProprietaireController::class,'index'])->name('proprietaire.index');
        Route::get('/proprietaire/create', [ProprietaireController::class,'create'])->name('proprietaire.create');
        Route::post('/proprietaire/store',[ProprietaireController::class,'store'])->name('proprietaire.store');
        Route::get('/proprietaire/{proprietaire}',[ProprietaireController::class,'show'])->name('proprietaire.show');

        // Les routes pour les proprités 
        Route::get('/immeuble', [ImmeubleController::class,'index'])->name('immeuble.index');
        Route::get('/immeuble/create', [ImmeubleController::class,'create'])->name('immeuble.create');
        
        Route::get('/villa', [VillaController::class,'index'])->name('villa.index');
        Route::get('/villa/create', [VillaController::class,'create'])->name('villa.create');

        Route::get('/appartement', [AppartementController::class,'index'])->name('appartement.index');
        Route::get('/appartement/create', [VillaController::class,'create'])->name('appartement.create');

        Route::get('/bureau', [BureauController::class,'index'])->name('bureau.index');
        Route::get('/bureau/create', [BureauController::class,'create'])->name('bureau.create');

        Route::get('/studio', [StudioController::class,'index'])->name('studio.index');
        Route::get('/studio/create', [StudioController::class,'create'])->name('studio.create');
    // });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
