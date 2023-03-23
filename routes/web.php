<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'homeView']);
Route::get('/login', [UsuarioController::class, 'loginView']);
Route::post('/fazer-login', [UsuarioController::class, 'login']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::post('/fazer-cadastro', [UsuarioController::class, 'cadastro']);

Route::get('/conta', [UsuarioController::class, 'contaView']);


Route::get('/livros', [LivroController::class, 'livrosView']);


Route::get('/pesquisa', [LivroController::class, 'pesquisaView']);
Route::get('/pesquisa-livro', [LivroController::class, 'pesquisaView']);

Route::get('/info-livro', [LivroController::class, 'infolivroView']);



// As views ficam na pasta resource/views
// Todas as views vao ter a extensao .blade.php