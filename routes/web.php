<?php

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
Route::get('/index', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('index').
                view('layout/footer');
    return $vistas;
});
Route::get('/nintendo/historia', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('nintendo/historia').
                view('layout/footer');
    return $vistas;
});

Route::get('/nintendo/juegos', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('nintendo/juegos').
                view('layout/footer');
    return $vistas;
});
Route::get('/nintendo/consolas', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('nintendo/consolas').
                view('layout/footer');
    return $vistas;
});
Route::get('/nintendo/noticias', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('nintendo/noticias').
                view('layout/footer');
    return $vistas;
});
Route::get('/nintendo/mario', function () {
    $vistas = view('layout/header').
                view('layout/menu').
                view('nintendo/mario').
                view('layout/footer');
    return $vistas;
});
