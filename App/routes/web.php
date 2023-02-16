<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TreatmentController;

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
Route::get('/', function () {
    return view('index');
});

// Form of add user
Route::get('/Create_Case', function () {
    return view('create');
});

// Access to the login page
Route::view('login', 'auth.login');

// CRUD : users(admin, agents or patients)
Route::resource('user', UserController::class);

// CRUD : treatments
Route::resource('treatment', TreatmentController::class);