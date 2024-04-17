<?php

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

//Route::get('/', [App\Http\Controllers\PrincipalController::class,'principal']);


Route::get('/redirect', [App\Http\Controllers\RedirectController::class,'redirect']);

Route::get('/registro', [App\Http\Controllers\RegistroController::class,'registro']);

Route::get('/recover', [App\Http\Controllers\RecoverController::class,'recover']);

Route::get('/login', [App\Http\Controllers\LoginController::class,'login']);

Route::get('/logout', [App\Http\Controllers\LogoutController::class,'logout']);

Route::prefix('/app')->group(function () {
    
});


//Route::get('/contato', [App\Http\Controllers\ContatoController::class,'contato']);

//Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class,'sobreNos']);

//Route::get('/clientes', [App\Http\Controllers\clientesController::class,'clientes']);

//Route::get('/forncedores', [App\Http\Controllers\fornecedoresController::class,'fornecedores']);

//Route::get('/produtos', [App\Http\Controllers\produtosController::class,'produtos']);

//Route::get('/login', [App\Http\Controllers\loginController::class,'login']);


