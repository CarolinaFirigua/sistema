<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Support\Facades\Route;

Route::get('/empleados', function () {
    return view('empleados.index'); 

});
// direccionamos a las clase Empleadocontroller y a la funcion create//
route::get('empleado/create',[EmpleadoController::class,'create']);
