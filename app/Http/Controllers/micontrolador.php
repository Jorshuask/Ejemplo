<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function index() {
        $datosUsuario = ['name' => 'jorshuarius', 'age' => 19];
        return view('index', compact('datosUsuario'));
    }

    public function pagina1() {
        $datosUsuario = ['name' => 'jorshuarius', 'age' => 19];
        return view('Pagina1', compact('datosUsuario'));
    }

    public function pagina2() {
        $datosUsuario = ['name' => 'jorshuarius', 'age' => 19];
        return view('Pagina2', compact('datosUsuario'));
    }

    public function post($post) {
        echo $post;
    }
}
