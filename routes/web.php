<?php

use Illuminate\Http\Request;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function (){
    return view('inicio');
});

Route::get('/suma', function (){
    return view('suma');
});

//Ruta diferente post

Route::post('/suma', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result = $num1 + $num2;

    // Regresamos a la pantalla anterior inyectando datos en la sesión flash
    return back()->withInput()->with('resultadosuma', $result);
});

Route::get('productos', [ProductoController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
