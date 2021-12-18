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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers\admin', 'as' => 'admin.'], function() {
    Route::resource('dashboard', 'DashboardController');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//route pour le directeur
Route::get('/dashboard/director', [App\Http\Controllers\director\HomeDirectorController::class, 'index'])->name('director');
Route::get('/dashboard/valideResponsable/director', [App\Http\Controllers\director\ValiderResponsableController::class, 'index'])->name('valideResponsable');
Route::get('/dashboard/listeResponsable/director', [App\Http\Controllers\director\listeResponsableController::class, 'index'])->name('listeResponsable');

//route pour le responsable
Route::get('/dashboard/Responsable', [App\Http\Controllers\responsable\ResponsableController::class, 'index'])->name('responsable');


//route pour le gestionnaire
Route::get('/dashboard/gestionnaire', [App\Http\Controllers\gestionnaire\GestionnaireController::class, 'index'])->name('gestionnaire');


//route pour le user
Route::get('/dashboard/user', [App\Http\Controllers\user\UserController::class, 'index'])->name('user');
