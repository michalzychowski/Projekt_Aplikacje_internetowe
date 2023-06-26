<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, "index"]);
Route::get('/login', [AuthController::class, "login"]);
Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/make-appointment', [AppointmentController::class, "create"]);
Route::patch('/appointment/{appointment}', [AppointmentController::class, "update"]);
Route::delete('/appointment/{appointment}', [AppointmentController::class, "destroy"]);
Route::post('/appointment', [AppointmentController::class, "store"]);
Route::put('/users/{user}', [UserController::class, "update"]);
Route::get('/users/{user}/edit', [UserController::class, "edit"]);
Route::get('/users/create', [UserController::class, "create"]);
Route::post('/users', [UserController::class, "store"]);
Route::delete('/users/{user}', [UserController::class, "destroy"]);
Route::get('/pricelist', [UserController::class, "pricelist"]);
Route::get('/description', [UserController::class, "description"]);

