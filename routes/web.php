<?php

use App\Http\Controllers\Administrador\NoticiasController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('index');

Route::get('/quienes_somos',[WebController::class,'quienes_somos'])->name('quienes_somos');

//rutas para noticias genera automáticamente las rutas necesarias para los métodos estándar (index, create, store, show, edit, update, destroy)
Route::resource('noticias',NoticiasController::class);
//Route::get('/noticias/{id}', [NoticiasController::class, 'show'])->name('noticias.show');

Route::get('/afiliados',[WebController::class,'afiliados'])->name('afiliados');

//registro de afiliamiento 
Route::get('/registro',[WebController::class,'registro'])->name('registro');
Route::post('/registro', [WebController::class, 'registro2'])->name('registro2');

//ruta de login 
Route::get('/administrador',[WebController::class,'administrador'])->name('administrador');

// Route::get('/prueba',[WebController::class,'prueba'])->name('prueba');

//rutas para el envio de emailsPHPMailer
Route::get('/contacto',[MailController::class, 'emailsPHPMiller'])->name('contacto');
Route::post('/contacto',[MailController::class, 'storeEmails'])->name('contacto');

Route::post('/web_footer',[WebController::class, 'subscribe'])->name('subscribe');

//ruta de registro, verificar en el archivo auth.php
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route::match(['get', 'post'], '/user/profile', function () {
    
// });