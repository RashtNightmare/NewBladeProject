<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

Route::get('/sign-in', function () {return view('sign_in');});
// Route::get('/role-add',[RoleController::class,'add']);
 Route::get('/user/create',[UserController::class,'create']);
 Route::post('/user',[UserController::class,'store']);

 Route::get('/welcome',[UserController::class,'index']);
Route::get('/welcome_new',function(){
    return view('welcome_new');
});
Route::resource('/role',RoleController::class);
Route::resource('/user',UserController::class);

/*
Route::get('/role',[RoleController::class,'index'])->name('role.index');
Route::post('/role',[RoleController::class,'store'])->name('role.store');

// Route::post('/role',[RoleController::class,'store'])->name('role.store');

Route::get('/role/create',[RoleController::class,'create'])->name('role.create');
Route::get('/role/{id}',[RoleController::class,'show'])->name('role.show');
Route::put('/role/{id}',[RoleController::class,'update'])->name('role.update');
Route::delete('/role/{id}',[RoleController::class,'destroy'])->name('role.destroy');
Route::get('/role/{id}/edit',[RoleController::class,'edit'])->name('role.edit');

// Route::get('/role/role/{role}',[RoleController::class,'welcome_new']);
*/