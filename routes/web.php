<?php

use App\Http\Controllers\consultasController;
use App\Http\Controllers\ejercicio1Controller;
use App\Http\Controllers\ejercicio2Controller;
use App\Http\Controllers\ejercicio3Controller;
use App\Http\Controllers\ejercicio4Controller;
use App\Http\Controllers\ejercicio5Controller;
use App\Http\Controllers\ejercicio6Controller;
use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/cliente',[clierntecontroller::class, 'lista_clientes']);


Route::get('/blog/resources/views/ejercicio6',[ejercicio6Controller::class,'index'])->name('ejercicio6');
Route::post('/blog/resources/views/ejercicio6',[ejercicio6Controller::class, 'ejercicio6'])->name('opejercicio');

Route::get('/blog/resources/views/ejercicio5',[ejercicio5Controller::class,'index'])->name('ejercicio5');
Route::post('/blog/resources/views/ejercicio5',[ejercicio5Controller::class, 'ejercicio5'])->name('opejercicio5');

Route::get('/blog/resources/views/ejercicio4',[ejercicio4Controller::class,'index'])->name('ejercicio4');
Route::post('/blog/resources/views/ejercicio4',[ejercicio4Controller::class, 'ejercicio4'])->name('opejercicio4');

Route::get('/blog/resources/views/ejercicio3',[ejercicio3Controller::class,'index'])->name('ejercicio3');
Route::post('/blog/resources/views/ejercicio3',[ejercicio3Controller::class, 'ejercicio3'])->name('opejercicio3');

Route::get('/blog/resources/views/ejercicio2',[ejercicio2Controller::class,'index'])->name('ejercicio2');
Route::post('/blog/resources/views/ejercicio2',[ejercicio2Controller::class, 'ejercicio2'])->name('opejercicio2');

Route::get('/blog/resources/views/ejercicio1',[ejercicio1Controller::class,'index'])->name('ejercicio1');
Route::post('/blog/resources/views/ejercicio1',[ejercicio1Controller::class, 'ejercicio1'])->name('opejercicio1');

Route::get('/consultas',[consultasController::class,'consultas'])->name('consultas');

Route::resource('/student', 'App\Http\Controllers\StudentsController');
