<?php

use App\Models\Immeuble;

use App\Models\Proprietaire;
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
    return view('proprietaire.index');
})->name('proprietaires.index');

    // Route::middleware(['auth'])->group(function () {

       // Les routes pour les propriétaires 
        // Route::get('/proprietaire', [ProprietaireController::class,'index'])->name('proprietaire.index');

        Route::get('/proprietaire', 'App\Http\Controllers\ProprietaireController@index')->name('proprietaire.index');
        Route::get('/proprietaire/create', 'App\Http\Controllers\ProprietaireController@create')->name('proprietaire.create');
        Route::post('/proprietaire/store', 'App\Http\Controllers\ProprietaireController@store')->name('proprietaire.store');
        Route::get('/biens', 'App\Http\Controllers\ProprietaireController@show')->name('proprietaire.show');

        // Les routes pour les proprités 
        Route::get('/immeuble', 'App\Http\Controllers\ImmeubleController@index')->name('proprietaire.immeuble');
        Route::get('/immeuble/create', 'App\Http\Controllers\ImmeubleController@create')->name('proprietaire.createImmeuble');
        Route::post('/immeuble/store', 'App\Http\Controllers\ImmeubleController@store')->name('proprietaire.storeImmeuble');

        Route::get('/villa', 'App\Http\Controllers\VillaController@index')->name('proprietaire.villa');
        Route::get('/villa/create', 'App\Http\Controllers\VillaController@create')->name('proprietaire.createVilla');
        Route::post('/villa/store', 'App\Http\Controllers\VillaController@store')->name('proprietaire.storeVilla');        
        
        Route::get('/appartement', 'App\Http\Controllers\AppartementController@index')->name('proprietaire.appartement');
        Route::get('/appartement/create', 'App\Http\Controllers\AppartementController@create')->name('proprietaire.createAppartement');
        Route::post('/appartement/store', 'App\Http\Controllers\AppartementController@store')->name('proprietaire.storeAppartement');

        Route::get('/bureau', 'App\Http\Controllers\BureauController@index')->name('proprietaire.bureau');
        Route::get('/bureau/create', 'App\Http\Controllers\BureauController@create')->name('proprietaire.createBureau');
        Route::post('/bureau/store', 'App\Http\Controllers\BureauController@store')->name('proprietaire.storeBureau');

        Route::get('/studio', 'App\Http\Controllers\StudioController@index')->name('proprietaire.studio');
        Route::get('/studio/create', 'App\Http\Controllers\StudioController@create')->name('proprietaire.createStudio');
        Route::post('/studio/store', 'App\Http\Controllers\StudioController@store')->name('proprietaire.storeStudio');

        Route::get('/ville', 'App\Http\Controllers\VilleController@index')->name('proprietaire.ville');
        Route::get('/ville/create', 'App\Http\Controllers\VilleController@create')->name('proprietaire.createVille');
        Route::post('/ville/store', 'App\Http\Controllers\VilleController@store')->name('proprietaire.storeVille');

        Route::get('/quartier', 'App\Http\Controllers\QuartierController@index')->name('proprietaire.quartier');
        Route::get('/quartier/create', 'App\Http\Controllers\QuartierController@create')->name('proprietaire.createQuartier');
        Route::post('/quartier/store', 'App\Http\Controllers\QuartierController@store')->name('proprietaire.storeQuartier');

        Route::get('/commune', 'App\Http\Controllers\CommuneController@index')->name('proprietaire.commune');
        Route::get('/commune/create', 'App\Http\Controllers\CommuneController@create')->name('proprietaire.createCommune');
        Route::post('/commune/store', 'App\Http\Controllers\CommuneController@store')->name('proprietaire.storeCommune');
        
    // });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
