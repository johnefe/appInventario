<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dato;

class DatoController extends Controller
{
    public function index(){

        $datos = Dato::get();

        return ['datos' => $datos];
    }

    public function update(Request $request){
        if(!$request->ajax()) return redirect('/');
        $dato = Dato::findOrFail($request->id);
        $dato->nombre = $request->nombre;
        $dato->celular = $request->celular;
        $dato->ciudad = $request->ciudad;
        $dato->direccion = $request->direccion;
        $dato->telefono = $request->telefono;
        $dato->email = $request->email;
        $dato->pais = $request->pais;

        $dato->save();
    }
}
