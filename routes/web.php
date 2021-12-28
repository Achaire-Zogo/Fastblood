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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('frontend.homepage');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'App\Http\Controllers\admin', 'as' => 'admin.'], function() {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('user', 'UserController');
    Route::resource('bloodbank', 'BloodBankController');
    Route::resource('bloodpocket', 'BloodPocketController');
    Route::resource('bloodbankmanager', 'BloodBankManagerController');
    Route::resource('groupe', 'GroupeController');
    Route::resource('bloodbankaffiliation', 'BlooBankAffiliationController');
    Route::resource('slider', 'SliderController');
});

Route::group(['prefix' => 'directeur', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\directeur', 'as' => 'directeur.'], function() {
    Route::resource('dashboard', 'DashboardController');
});

Route::group(['prefix' => 'responsable', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\responsable', 'as' => 'responsable.'], function() {
    Route::resource('dashboard', 'DashboardController');
});

Route::group(['prefix' => 'gestionnaire', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\gestionnaire', 'as' => 'gestionnaire.'], function() {
    Route::resource('dashboard', 'DashboardController');
});

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\user', 'as' => 'user.'], function() {
    Route::resource('dashboard', 'DashboardController');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// //route pour le directeur
// Route::get('/dashboard/director', [App\Http\Controllers\director\HomeDirectorController::class, 'index'])->name('director');
// Route::get('/dashboard/valideResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'listeResponsableAttente'])->name('valideResponsable');
// Route::get('/dashboard/listeResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'index'])->name('listeResponsable');
// Route::get('/dashboard/detaileResponsable/director/{id}', [App\Http\Controllers\director\listeResponsableController::class, 'detail'])->name('detailResponsable');
// Route::post('/dashboard/detaileResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'valideResponsable'])->name('validerResponsable');

/*Route::view('/connexion', 'auth/login' )->name('loginpage');
Route::get('/signup_page', 'App\Http\Controllers\Auth\SignupController@signuppage' )->name('signuppage');
Route::post('/login', 'App\Http\Controllers\Auth\SigninController@login');
Route::post('/signup', 'App\Http\Controllers\Auth\SignupController@signup');


Route::get('/dashboard/director', [App\Http\Controllers\director\HomeDirectorController::class, 'index'])->name('director');
Route::get('/dashboard/valideResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'listeResponsableAttente'])->name('valideResponsable');
Route::get('/dashboard/listeResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'index'])->name('listeResponsable');
Route::get('/dashboard/detaileResponsable/director/{id}', [App\Http\Controllers\director\listeResponsableController::class, 'detail'])->name('detailResponsable');
Route::post('/dashboard/detaileResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'valideResponsable'])->name('validerResponsable');

//route pour le responsable
Route::get('/dashboard/Responsable', [App\Http\Controllers\responsable\ResponsableController::class, 'index'])->name('responsable');


//route pour le gestionnaire
Route::get('/dashboard/gestionnaire', [App\Http\Controllers\gestionnaire\GestionnaireController::class, 'index'])->name('gestionnaire');


//route pour le user
Route::get('/dashboard/user', [App\Http\Controllers\user\UserController::class, 'index'])->name('user');*/
