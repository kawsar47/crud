<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StudentController;
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

Route::get('/user',[UserController::class,'index']);

Route::get('/user/form', [UserController::class, 'user_form']);
//Route::get('/user')

Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/destroy/{id}',[UserController::class,'destroy']);
Route::get('/user/edit/{id}',[UserController::class,'edit']);
//Route::post('/user/update/',[UserController::class,'update']);


//contact
Route::get('/contact',[ContactController::class,'index']);
Route::get('/contact/form', [ContactController::class, 'contact_form']);
Route::post('/contact/store',[ContactController::class,'store']);
Route::get('/contact/destroy/{id}',[ContactController::class,'destroy']);
Route::get('/contact/edit/{id}',[ContactController::class,'edit']);


//supplier
Route::get('/suppliers',[SupplierController::class,'index']);
Route::get('/supplier/form',[SupplierController::class,'supplier_form']);
Route::post('/supplier/store/',[SupplierController::class,'store']);
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit']);
Route::get('/supplier/destroy/{id}', [SupplierController::class,'destroy']);

//class
Route::get('/classs',[StudentController::class,'class_index']);
Route::get('/classs/form/',[StudentController::class,'class_form']);
Route::post('/classs/store/',[StudentController::class,'class_store']);
Route::get('/classs/edit/{id}',[StudentController::class,'class_edit']);
Route::get('/classs/destroy/{id}',[StudentController::class,'class_destroy']);

//students
Route::get('/students',[StudentController::class,'index']);
Route::get('/students/form/',[StudentController::class,'student_form']);
Route::post('/students/store/',[StudentController::class,'store']);
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::get('/student/destroy/{id}',[StudentController::class,'destroy']);



