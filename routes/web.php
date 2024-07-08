<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/noticias',[WebController::class,'noticias'])->name('noticias');

Route::get('/afiliados',[WebController::class,'afiliados'])->name('afiliados');

//Route::get('/contacto',[WebController::class,'contacto'])->name('contacto');

Route::get('/registro',[WebController::class,'registro'])->name('registro');
Route::post('/registro', [WebController::class, 'registro2'])->name('registro2');

Route::get('/administrador',[WebController::class,'administrador'])->name('administrador');

//rutas para el envio de emailsPHPMailer
Route::get('/contacto',[MailController::class, 'emailsPHPMiller'])->name('contacto');
Route::post('/contacto',[MailController::class, 'storeEmails'])->name('contacto');