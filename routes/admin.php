<?php

use Illuminate\Support\Facades\Route;

Route::name('adm.')->namespace('Administrador')->prefix('panel_anadic')->middleware(['auth'])->group(function(){
    Route::get('/', function(){
        return view('dashboard');
    })->name('index');

    Route::get('/pagina_inicio', function(){
        return view('admin.inicio');
    })->name('inicio');
});

?>