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

Route::view('/connexion', 'auth/login' )->name('loginpage');
Route::get('/signup_page', 'App\Http\Controllers\Auth\SignupController@signuppage' )->name('signuppage');
Route::post('/login', 'App\Http\Controllers\Auth\SigninController@login');
Route::post('/signup', 'App\Http\Controllers\Auth\SignupController@signup');


Route::get('/dashbord', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashbord');
Route::get('/user', [App\Http\Controllers\admin\UserController::class, 'index'])->name('user');
Route::get('/dashbord/{id}', [App\Http\Controllers\admin\UserController::class, 'detail'])->name('dashbord');

