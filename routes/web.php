<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


// Route::get('/', 'HomeController@index')->name('home');
// Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('search2/{id}', [HomeController::class, 'search2'])->name('search2');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('jobdetail/{id}', [HomeController::class, 'jobdetail'])->name('jobdetail');
Route::get('apply/{id}', [HomeController::class, 'apply'])->name('apply');
Route::post('store', [HomeController::class, 'store'])->name('store');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
