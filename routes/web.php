<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitaController;

Route::get('/login', [LoginController::class, 'show']);
Route::post('/auth', [LoginController::class, 'auth'])->name('auth.user');

Route::post('/createmonitors', [CadastroController::class, 'createmonitors']);
Route::post('/createusers', [CadastroController::class, 'createusers']);//Metodo para criar usuarios monitores

Route::get('/', function () {return view('home');});

Route::get('/exposicao', function () {return view('exposicao');});

Route::get('/colecao', function () {return view('colecao');});

Route::get('/cadastro', function () {return view('cadastro');});

Route::get('/perfil', [UserController::class, 'perfil']);
Route::get('/sobrenos', [UserController::class, 'sobrenos']);

//Route::get('/visita', [VisitaController::class, 'createvisita']);
//Route::get('/consultaVisita/{id}', [VisitaController::class, 'show']);
//Route::get('/consultaVisita', [VisitaController::class, 'consultaVisita']);
//Route::post('/agendar', [VisitaController::class, 'store']);
//Route::get('/dashboard', [VisitaController::class, 'dashboard']);
//Route::delete('/consultaVisita/{id}', VisitaController::class, 'destroy');
//Route::get('/consultaVisita/edit/{id}', VisitaController::class, 'edit');
//Route::put('/consultaVisita/update/{id}', VisitaController::class, 'update');

//Route::get('/', function () {return view('welcome');});
