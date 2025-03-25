<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
// Ruta principal que carga la vista 'index'
Route::get('/', function () {
    return view('index');
});

// Ruta para cargar la vista 'Master'
Route::get('/Master', function () {
    return view('Master');
});


Route::resource('post', PostController::class);



// Variantes de redirección:
// 1. Redirigir a otra página de forma directa
// return redirect('/Pagina2'); // Redirige automáticamente a '/Pagina2'.

// 2. Redirigir usando el nombre de la ruta
// return redirect()->route('Paginanombre2'); // Redirige utilizando el nombre de la ruta en lugar de la URL.

// 3. Redirigir de forma más corta usando 'to_route'
// return to_route('Paginanombre2'); // Es una forma más concisa de redirigir usando el nombre de la ruta.

/*
// Ruta para cargar la vista 'Pagina1'
Route::get('/Pagina1', function () {
    return view('Pagina1'); // Aquí puedes pasar datos a la vista de la siguiente manera:
    // return view('Pagina1', $data); // '$data' contiene los datos que puedes usar en la vista.
});

// Ruta para cargar la vista 'Pagina2' y asignar un nombre a la ruta
Route::get('/Pagina2', function () {
    return view('Pagina2');
})->name('Paginanombre2'); // Asigna un nombre a la ruta, útil para redirecciones y enlaces.

*/