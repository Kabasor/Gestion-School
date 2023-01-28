<?php

use App\Http\Controllers\AnneeController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FamilysController;
use App\Http\Controllers\NiveauxController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('index', [CustomAuthController::class, 'dashboard']);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::get('liste_user', [CustomAuthController::class, 'liste'])->name('liste_user');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


/*
    |--------------------------------------------------------------------------
    | Authentification et user
    |--------------------------------------------------------------------------
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
Route::resource('classe', ClasseController::class);
Route::resource('niveau', NiveauxController::class);
Route::resource('classe', ClasseController::class);
Route::resource('famille', FamilysController::class);
Route::resource('eleve', EleveController::class);
Route::resource('prof', ProfController::class);



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

