<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::put('/role/{id}',[RoleController::class,'update'])->name('role.update');
Route::post('/role',[RoleController::class,'store'])->name('role.store');
Route::put('/user/{id}',[RoleController::class,'update'])->name('user.update');
Route::post('/user',[RoleController::class,'store'])->name('user.store');