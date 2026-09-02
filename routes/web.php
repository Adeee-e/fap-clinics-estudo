<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

//rotas para logar no sistema
Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // o nome da rota internamente fica login
Route::post('/login', [AuthController::class, 'login']);

//rotas para criar um usuario
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

//rota de logout
Route::post('/logout', [AuthController::class, 'logout']);

//rota do dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');
