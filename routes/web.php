<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\ReporteController;
use App\Http\Controllers\OperacionController;
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
})->name('welcome');



Route::get('/dashboard', function () {
    return view('principal');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('productos',ProductoController::class);
Route::get('cancelar/productos',function(){
    return redirect()->route('productos.index')->with('datos','Accion Cancelada...!');
})->name('cancelar.productos');
Route::get('productos/{id}/confirmar',[ProductoController::class,'confirmar'])->name('productos.confirmar');


Route::resource('clientes',ClienteController::class);
Route::get('cancelar',function(){
    return redirect()->route('clientes.index')->with('datos','Accion Cancelada...!');
})->name('cancelar');
Route::get('clientes/{id}/confirmar',[ClienteController::class,'confirmar'])->name('clientes.confirmar');

Route::resource('operaciones',OperacionController::class);
Route::get('cancelar/operaciones',function(){
    return redirect()->route('operaciones.index')->with('datos','Accion Cancelada...!');
})->name('cancelar.operaciones');

Route::resource('reportes',ReporteController::class);
Route::get('reporte',[OperacionController::class,'reporte'])->name('operaciones.reporte');

Route::get('graficar',[ReporteController::class,'graficar'])->name('operaciones.graficos');
Route::get('reporte-cliente',[ReporteController::class,'clie'])->name('reportes.clientes');
Route::get('reporte-productos',[ReporteController::class,'prod'])->name('reportes.productos');
Route::get('reporte-operaciones',[ReporteController::class,'oper'])->name('reportes.operaciones');