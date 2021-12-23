<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\informations\Faq;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\director\HomeDirectorController;
use App\Http\Controllers\responsable\ResponsableController;
use App\Http\Controllers\gestionnaire\GestionnaireController;
use App\Http\Controllers\informations\Connaitre_plus;
use App\Http\Controllers\informations\Qui_peut_donner;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\admin', 'as' => 'admin.'], function() {
    Route::resource('dashboard', 'DashboardController');
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

Route::view('/connexion', 'auth/login' )->name('loginpage');
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
Route::view('/dashboard', 'gestionnaire/index' )->name('gererbanque');
Route::view('/groupe', 'gestionnaire/group' )->name('group');
Route::view('/AjoutDon', 'gestionnaire/ajoutpoche' )->name('adddon');
Route::view('/Associations', 'gestionnaire/asociations' )->name('associations');
Route::view('/AssociationsEnAttente', 'gestionnaire/ajoutpoche' )->name('asso_att');
Route::view('/detailsAsso', 'gestionnaire/detailsAsso' )->name('detAsso');
//route pour le user
Route::get('/dashboard/user', [App\Http\Controllers\user\UserController::class, 'index'])->name('user');

//Foire aux Questions
Route::get('/faq/don_de_sang', [Faq::class, 'faq_don_de_sang'])->name('faq_don_de_sang');
Route::get('/faq/don_de_plasma', [Faq::class, 'faq_don_de_plasma'])->name('faq_don_de_plasma');
Route::get('/faq/don_de_plaquette', [Faq::class, 'faq_don_de_plaquette'])->name('faq_don_de_plaquette');
Route::get('/faq/don_de_cellules_souches', [Faq::class, 'faq_don_de_cellules_souches'])->name('faq_don_de_cellules_souches');

//connaitre plus
Route::get('/connaitre_plus/groupes_sanguins', [Connaitre_plus::class, 'cp_groupe_sanguins'])->name('cp_groupe_sanguins');
Route::get('/connaitre_plus/histoire_du_sang', [Connaitre_plus::class, 'cp_histoire_du_sang'])->name('cp_histoire_du_sang');
Route::get('/connaitre_plus/les_produits_sanguins', [Connaitre_plus::class, 'cp_les_produits_sanguins'])->name('cp_les_produits_sanguins');
Route::get('/connaitre_plus/parcours_d_une_poche_de_sang', [Connaitre_plus::class, 'cp_parcours_d_une_poche_de_sang'])->name('cp_parcours_d_une_poche_de_sang');
Route::get('/connaitre_plus/qu_est_ce_que_le_sang', [Connaitre_plus::class, 'cp_qu_est_ce_que_le_sang'])->name('cp_qu_est_ce_que_le_sang');

//qui peut donner
Route::get('/qui_peut_donner/condition', [Qui_peut_donner::class, 'qpd_condition'])->name('qpd_condition');
Route::get('/qui_peut_donner/contre_indication', [Qui_peut_donner::class, 'qpd_contre_indications'])->name('qpd_contre_indications');
Route::get('/qui_peut_donner/delai_entre_2_don', [Qui_peut_donner::class, 'qpd_delai_entre_2_don'])->name('qpd_delai_entre_2_don');
Route::get('/qui_peut_donner/puis_je_donner?', [Qui_peut_donner::class, 'qpd_puis_je_donner'])->name('qpd_puis_je_donner');
