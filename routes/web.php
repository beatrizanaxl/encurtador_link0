<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class,'principal'] )->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class,'contato'] )->name('site.contato');

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class,'sobreNos'] )->name('site.sobreNos');

Route::get('/login', function() { echo 'login'; });

Route::prefix('/app')->group(function (){
    Route::get('/clientes', function() { echo 'clientes'; });
    Route::get('/fornecedores', function() { echo 'fornecedores'; });
    Route::get('/produtos', function() { echo 'produtos'; });
});

Route::fallback(function() {
    echo 'A rota acessada não existe, <a href="'.route('site.principal').'"> ir para a página inicial</a>';
});

Route::get('/rota1', function() {
    return redirect()->route('site.rota2');
})->name('site.rota1');

Route::get('/rota2', function() {
    echo 'estamos na Rota 2';
})->name('site.rota2');

//Route::redirect('/rota1'.'/rota2');

//Route::get('/redirect', [App\Http\Controllers\RedirectController::class,'redirect']);

//Route::get('/registro', [App\Http\Controllers\RegistroController::class,'registro']);

//Route::get('/recover', [App\Http\Controllers\RecoverController::class,'recover']);

//Route::get('/login', [App\Http\Controllers\LoginController::class,'login']);

//Route::get('/logout', [App\Http\Controllers\LogoutController::class,'logout']);


