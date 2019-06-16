<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //verifica si la peticion se la esta haciendo por ajax y si no es asi se lo redirige a /
        if(!$request->ajax()) return redirect('/');
        //listar todos los registros de la tabla categoria
        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if($buscar==''){
            $personas = Persona::orderBy('id', 'desc')->paginate(5);
        }else{
            $personas = Persona::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(5);
        }
        //$personas = Categoria::paginate(5);
        return [
            'pagination' => [
                'total' => $personas->total(),
                'current_page' => $personas->currentPage(),
                'per_page' => $personas->perPage(),
                'last_page' => $personas->lastPage(),
                'from' => $personas->firstItem(),
                'to' => $personas->lastItem(),
            ],
            'personas' => $personas
        ];

    }

    /**
     * seleccionar clientes
     */
    public function selectCliente(Request $request){
        if(!$request->ajax()) return redirect('/');

        $filtro = $request->filtro;
        $clientes = Persona::where('personas.nombre', 'like', '%'.$filtro.'%')
        ->orWhere('personas.num_documento', 'like', '%' .$filtro . '%')
        ->select('personas.id', 'personas.nombre','personas.num_documento')
        ->orderBy('personas.nombre', 'asc')->get();

        return ['clientes' => $clientes];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->tipo_documento = $request->tipo_documento;
        $persona->num_documento = $request->num_documento;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;


        $persona->save();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $persona = Persona::findOrFail($request->id);
        $persona->nombre = $request->nombre;
        $persona->tipo_documento = $request->tipo_documento;
        $persona->num_documento = $request->num_documento;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;

        $persona->save();
    }

    public function listarPdf(){

        $clientes = Persona::orderBy('id', 'desc')->get();


        $cont=Persona::count();

        $pdf = \PDF::loadview('pdf.clientespdf', ['clientes' => $clientes, 'cont'=>$cont]);
        return $pdf->download('clientes.pdf');
    }
}
