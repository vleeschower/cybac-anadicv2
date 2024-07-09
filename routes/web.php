<?php

use App\Http\Controllers\Administrador\NoticiasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;






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

// Route::get('/noticias',[WebController::class,'noticias'])->name('noticias');

Route::get('/afiliados',[WebController::class,'afiliados'])->name('afiliados');

//solo puede haber un metodo get para controlar la ruta de contacto
// Route::get('/contacto',[WebController::class,'contacto'])->name('contacto');

//rutas para el envio de emailsPHPMailer
Route::get('/contacto',[MailController::class, 'emailsPHPMiller'])->name('contacto');
Route::post('/contacto',[MailController::class, 'storeEmails'])->name('contacto');

//Route::get('/noticias',[WebController::class,'noticias'])->name('noticias');

Route::get('/afiliados',[WebController::class,'afiliados'])->name('afiliados');

Route::get('/registro',[WebController::class,'registro'])->name('registro');
Route::post('/registro', [WebController::class, 'registro2'])->name('registro2');

Route::get('/administrador',[WebController::class,'administrador'])->name('administrador');

Route::get('/prueba',[WebController::class,'prueba'])->name('prueba');

//visualizacion de texto-noticia
Route::resource('noticias',NoticiasController::class);

//ruta para el login 
Route::get('/register',[RegisterController::class,'create'])->name('login');

//ruta para el apartadp de registro
Route::get('/login',[LoginController::class,'create'])->name('login');

//rutas para el envio de emailsPHPMailer
Route::get('/contacto',[MailController::class, 'emailsPHPMiller'])->name('contacto');
Route::post('/contacto',[MailController::class, 'storeEmails'])->name('contacto');

Route::post('/web_footer',[WebController::class, 'subscribe'])->name('subscribe');
