<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', function () {return view('welcome');})->name('welcome');



Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos')->middleware('auth');

Route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');

Route::post('/produtos/add', [ProdutosController::class, 'addsave'])->name('produtos.addsave');

Route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produto.view');

Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editsave'])->name('produtos.editsave');

Route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteforreal'])->name('produtos.deleteforreal');

Route::post('/produtos', [ProdutosController::class, 'index']);



Route::get('/usuarios/add', [usuariosController::class, 'add'])->name('usuarios.add');
Route::post('/usuarios/add', [usuariosController::class, 'addSave'])->name('usuarios.addSave');

Route::get('/usuarios', [UsuariosController::class, 'listAll'])->name('Usuarios');

Route::get('/login', [UsuariosController::class, 'login'])->name('login');

Route::post('/login', [UsuariosController::class, 'login'])->name('login');


Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');
