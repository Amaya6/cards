<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('formularios.Biemvenida');
});

Route::get('/vehiculos', function () {
    return view('formularios.vehiculos');
});

Route::post('vehiculos', function (HttpRequest $request) {
    
    $dataa = [
    
        'propietario' => $request->propietario,
        'chasis' => $request->chasis,
        'placa' => $request->placa,
        'color' => $request->color,
        'marcas' => $request->marca,
       
        
    ];
    return view('resultados.vehiculos',['result'=>$dataa]);

    
});




Route::get('/marca', function () {
    return view('formularios.marcas');
});

Route::post('marcas', function (HttpRequest $request) {
    $marca= $request->nombre;
    $request->offsetSet('marcas',$marca);
    return view('resultados.marcas',['marca'=> $marca]);
});


