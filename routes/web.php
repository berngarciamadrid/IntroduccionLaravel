<?php

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

Route::get('/hola-mundo', function () {
    return view('hola-mundo');
});

// Route::get('/contacto', function () {
//     return view('contacto');
// });

// Route::post('')
// Con métodos get, post, etcétera
// Route::any o Route (['get', 'post'}], contacto, function(){

// })

Route::get('contacto/{nombre?}/{edad?}', function ($nombre = 'Bernabé García', $edad = null) {
    // return view('contacto', array(
    //     'nombre' => $nombre,
    //     'edad' => $edad,
    // ));
    return view('contacto.contacto')->with('nombre', $nombre)
                           ->with('edad', $edad)
                           ->with('frutas', array('naranja', 'pera', 'sandia', 'fresa', 'piña'));
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+',
]);
