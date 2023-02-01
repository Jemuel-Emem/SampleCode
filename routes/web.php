<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\jemcontrol;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\inserController;

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

Route::any('/', function () {
    return view ('welcome');
});

Route::get('/sample', function () {
    return view ('sample');
});
Route :: get('/login', [AuthController::class,'login']);
Route :: get('/register', [AuthController::class,'register']);


Route :: get('/insert', [inserController::class,'insert']);
Route ::post('insert',[inserController::class, 'add']);


Route::post('/register-user', [AuthController::class, 'registerUser']) ->name('register-user');

