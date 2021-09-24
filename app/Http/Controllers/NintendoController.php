<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NintendoController extends Controller
{
    public function nintendohistoria(){
        $vistas = view('nintendo/historia');
        return $vistas;
    }

    public function nintendojuegos(){
        $vistas =
                view('nintendo/juegos');
    return $vistas;
    }
    public function nintendoconsolas(){
        $vistas =
                view('nintendo/consolas');
    return $vistas;
    }
    public function nintendonoticias(){
        $vistas =
                view('nintendo/noticias');
    return $vistas;
    }
    public function nintendomario(){
        $vistas =
                view('nintendo/mario');
    return $vistas;
    }
}
