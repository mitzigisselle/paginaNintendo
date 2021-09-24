<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NintendoController;
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

Route::get('/', InicioController::class);
Route::get('/index',[IndexController::class, 'index'] );
Route::get('/nintendo/historia', [NintendoController::class, 'nintendohistoria']);
Route::get('/nintendo/juegos',  [NintendoController::class, 'nintendojuegos']);
Route::get('/nintendo/consolas',  [NintendoController::class, 'nintendoconsolas']);
Route::get('/nintendo/noticias',  [NintendoController::class, 'nintendonoticias']);
Route::get('/nintendo/mario', [NintendoController::class, 'nintendomario']);