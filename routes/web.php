<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::resource('/', 'DashboardController');
Route::resource('/project', 'DashboardController');
// Route::get('/{project:slug}', 'DashboardController@show');

Auth::routes([
    'register' => false, //Register Form routes
    'reset' => false, // Reset Passwords routes
    'verify' => false // Email Verification routes
]);

Route::get('/categories/checkSlug', [CategoryController::class, 'checkSlug']);
Route::get('/projects/checkSlug', [ProjectController::class, 'checkSlug']);

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/admin/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::get('/admin', 'HomeController@index');
    Route::resource('/admin/projects', 'ProjectController');
    Route::resource('/admin/categories', 'CategoryController');
    Route::resource('/admin/profile', 'ProfileController');
    Route::resource('/admin/password', 'ChangePasswordController');
});
