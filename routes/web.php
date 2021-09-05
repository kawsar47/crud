<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'index']);

Route::get('/user/form', [UserController::class, 'user_form']);
//Route::get('/user')

Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/destroy/{id}',[UserController::class,'destroy']);
Route::get('/user/edit/{id}',[UserController::class,'edit']);
Route::post('user/update/store',[UserController::class,'update_store']);
