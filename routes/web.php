<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () { 
    return view('index'); 
});

Route::get('/caracteristicas', function () { 
    return view('caracteristicas'); 
});

Route::get('/historia', function () { 
    return view('historia'); 
});

Route::get('/ubicacion', function () { 
    return view('ubicacion'); 
});

Route::get('/formulario', function () { 
    return view('formulario'); 
});
