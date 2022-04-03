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
        Route::get('/proprietaire/store', 'App\Http\Controllers\ProprietaireController@store')->name('proprietaire.store');
        Route::get('/biens', 'App\Http\Controllers\ProprietaireController@show')->name('proprietaire.show');

        // Les routes pour les proprités 
        Route::get('/immeuble', 'App\Http\Controllers\ImmeubleController@index')->name('proprietaire.immeuble');
        Route::get('/immeuble/create', 'App\Http\Controllers\ImmeubleController@create')->name('proprietaire.createimmeuble');
        Route::get('/immeuble/store', 'App\Http\Controllers\ImmeubleController@store')->name('proprietaire.storeimmeuble');

        Route::get('/villa', 'App\Http\Controllers\VillaController@index')->name('proprietaire.villa');
        Route::get('/villa/create', 'App\Http\Controllers\VillaController@create')->name('proprietaire.createvilla');
        Route::get('/villa/store', 'App\Http\Controllers\VillaController@store')->name('proprietaire.storevilla');        
        
        Route::get('/appartement', 'App\Http\Controllers\AppartementController@index')->name('proprietaire.appartement');
        Route::get('/appartement/create', 'App\Http\Controllers\AppartementController@create')->name('proprietaire.createappartement');
        Route::get('/appartement/store', 'App\Http\Controllers\AppartementController@store')->name('proprietaire.storeappartement');

        Route::get('/bureau', 'App\Http\Controllers\BureauController@index')->name('proprietaire.bureau');
        Route::get('/bureau/create', 'App\Http\Controllers\BureauController@create')->name('proprietaire.createbureau');
        Route::get('/bureau/store', 'App\Http\Controllers\BureauController@store')->name('proprietaire.storebureau');

        Route::get('/studio', 'App\Http\Controllers\StudioController@index')->name('proprietaire.studio');
        Route::get('/studio/create', 'App\Http\Controllers\StudioController@create')->name('proprietaire.createstudio');
        Route::get('/studio/store', 'App\Http\Controllers\StudioController@store')->name('proprietaire.storestudio');
        
    // });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
