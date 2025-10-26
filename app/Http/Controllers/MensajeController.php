<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class MensajeController extends Controller
{
    public function guardarOpinion(Request $request){
    $datos = $request->input();
    //
    //dd($datos);
    $opinion = new Opinion();
    $opinion->nombre= $datos["nombre"];
    $opinion->email= $datos["email"];
    $opinion->mensaje= $datos["mensaje"];
    $opinion->save();

    return redirect('/formulario');
    }
}
