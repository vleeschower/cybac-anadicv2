<?php

use Illuminate\Support\Facades\Route;

Route::name('adm.')->namespace('Administrador')->prefix('panel_anadic')->group(function(){
    Route::get('/', function(){
        return view('dashboard');
    })->name('index');
});

?>