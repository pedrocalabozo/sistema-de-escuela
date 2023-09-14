<?php

use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\AlumnomasrController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Comun;
use App\Http\Controllers\EstadoalumnoController;
use App\Models\Alumnomasr;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[Comun::class,'index']);



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware(['auth'])->group(function () {

    Route::get('/home',[ActividadesController::class,'index'])->name('home');

Route::resource('/actividades',ActividadesController::class);

Route::get('/aplicar/{id}',[EstadoalumnoController::class,'index']);
Route::resource('/alumnos',AlumnomasrController::class);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

}
);