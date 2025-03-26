<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/Master', function () {
    return view('Master');
});

Route::resource('post', PostController::class);

/*

Route::get('/Pagina1', function () {
    //$data = ['name' => 'Jorshua'];
    return view('Pagina1'); //me da los datos que puedo usar en la pagina view('Pagina1', $data);
    //return redirect('/Pagina2'); me redirecciona automaticamente a pagina 2 
    //return redirect()->route('Paginanombre2'); me redirecciona pero usando el nombre de la pagina 
    //return to_route('Paginanombre2'); lo mismo de arriba pero mas corto
});


Route::get('/Pagina2', function () {
    //$data = ['name' => 'Jorshua'];
    return view('Pagina2');
})->name('Paginanombre2');
*/

//Route::get('/',[micontrolador::class, 'index']);
//Route::get('code/{post}',[micontrolador::class, 'post']);

//Route::get('/Pagina1',[micontrolador::class, 'Pagina1']);
//Route::get('/Pagina2',[micontrolador::class, 'Pagina2']);

//Route::resource('post',micontrolador::class);