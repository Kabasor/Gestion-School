<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnneeController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FamilysController;
use App\Http\Controllers\NiveauxController;

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
// Route::get('/admin.niveaux.add-niveaux', function () {
//     return view('admin.niveaux.add-niveaux');
// });


Route::get('/tableau_bord1', function () {
    return view('tableau_bord1');
});
// Route::prefix('admin')->group(function(){


//  });


Route::resource('annee', AnneeController::class);
Route::resource('niveau', NiveauxController::class);
Route::resource('classe', ClasseController::class);
Route::resource('famille', FamilysController::class);
Route::resource('eleve', EleveController::class);



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

