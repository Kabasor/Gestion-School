<?php


use App\Models\FraisScolarite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnneeController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NiveauxController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmploiesController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PaiementEleveController;
use App\Http\Controllers\ReinscriptionController;
use App\Http\Controllers\FraisScolariteController;
use App\Http\Controllers\PaiementProfesseurController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::view('/', 'auth.login');

Route::redirect('/', 'login');

// Route::group(['middleware'=>['auth']], function() {

//     Route::get('/logout', LogoutController::class, 'perform')->name('logout.perform');
// });

Route::middleware(['auth'])->group(function () {

            Route::get('/dashboard', function () {
                return view('home');
            })->middleware(['auth'])->name('dashboard');

            Route::resource('user', RegisteredUserController::class);

            // Route::middleware('auth')->group(function () {
            //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            // });

            // AJAX
            Route::get('get-frais-scolarite-classe/{classe?}', [FraisScolariteController::class, 'get_frais_scolarite_classe'])->name('frais.scolarite.classe');
            Route::get('get-info-eleve/{id_eleve?}', [EleveController::class, 'get_eleve'])->name('get.eleve');


            /*
                |--------------------------------------------------------------------------
                | IMPRESSION
                |--------------------------------------------------------------------------
            */
            Route::get('print-inscription', [InscriptionController::class, 'print'])->name('print.inscription');
            Route::get('print-reinscription', [ReinscriptionController::class, 'print'])->name('print.reinscription');
            Route::resource('paiementProfesseur',PaiementProfesseurController::class);
            Route::resource('paiementeleve', PaiementEleveController::class);
            Route::resource('inscription', InscriptionController::class);
            Route::resource('reinscription', ReinscriptionController::class);
            Route::resource('fraiscolarite', FraisScolariteController::class);
            Route::resource('note', NoteController::class);
            Route::resource('annee', AnneeController::class);
            Route::resource('classe', ClasseController::class);
            Route::resource('niveau', NiveauxController::class);
            Route::resource('eleve', EleveController::class);
            Route::resource('prof', ProfController::class);
            Route::resource('matiere', MatiereController::class);
            Route::resource('emploie', EmploiesController::class);


});
// Route::fallback(function () {
//     return view('errors.404');
// });
require __DIR__ . '/auth.php';
