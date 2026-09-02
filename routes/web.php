<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Página inicial temporária: redireciona para o login
Route::redirect('/', '/login');

// Rotas de autenticação
Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // o nome da rota internamente fica login
Route::post('/login', [AuthController::class, 'login']);

// Rotas de criação de usuário
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');

// Área administrativa
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'can:access-admin']);
