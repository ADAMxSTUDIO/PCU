<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Welcome Page
Route::get('/index', function () {
    return view('index');
});

// Form of add user
Route::get('/register', function () {
    if(Auth::user()->hasAdmin == 1){
    return route('register');
    }
    return back();
})->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\DashController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/Case_Show', [App\Http\Controllers\CaseShowController::class, 'index'])->name('Case_Show')->middleware('auth');

Route::get('/Treatement_Show', [App\Http\Controllers\TreatementShow::class, 'show'])->name('Treatement_Show')->middleware('auth');

Route::resource('treatment', App\Http\Controllers\TreatmentController::class)->middleware('auth');

Route::get('treatment_filter/{isClosed}', [App\Http\Controllers\TreatmentFilterController::class, '__invoke'])->middleware('auth');

Route::resource('state', App\Http\Controllers\StateController::class)->middleware('auth');

Route::get('/logout', function ()
{
    auth()->logout();
    Session()->flush();
    setcookie("info", "", time() - 3600);

    return Redirect::to('/index')->withoutCookie('info');
})->name('logout');

Route::resource('user', App\Http\Controllers\UserController::class)->middleware('auth');

// CRUD to manage users(admin, agents or patients)
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');
