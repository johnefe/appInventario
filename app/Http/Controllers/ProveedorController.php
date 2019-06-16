<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proveedor;
use App\Persona;

class ProveedorController extends Controller
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
            $personas = Proveedor::join('personas','proveedores.id', '=', 'personas.id')
            ->select('personas.id','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.telefono',
            'personas.email', 'proveedores.contacto', 'proveedores.telefono_contacto')
            ->orderBy('personas.id', 'desc')->paginate(10);
        }else{
            $personas = Proveedor::join('personas','proveedores.id', '=', 'personas.id')
            ->select('personas.id','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.telefono',
            'personas.email', 'proveedores.contacto', 'proveedores.telefono_contacto')
            ->where('personas.'.$criterio, 'like', '%'. $buscar . '%')
            ->orderBy('personas.id', 'desc')->paginate(10);
        }
        //$proveedores = Categoria::paginate(5);
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
     * seleccionar proveedores
     */
    public function selectProveedor(Request $request){
        if(!$request->ajax()) return redirect('/');

        $filtro = $request->filtro;
        $proveedores = Proveedor::join('personas','proveedores.id', '=', 'personas.id')
        ->where('personas.nombre', 'like', '%'.$filtro.'%')
        ->orWhere('personas.num_documento', 'like', '%' .$filtro . '%')
        ->select('personas.id', 'personas.nombre','personas.num_documento')
        ->orderBy('personas.nombre', 'asc')->get();

        return ['proveedores' => $proveedores];
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

        try{
            DB::beginTransaction();
            $persona = new Persona();
            $persona->nombre = $request->nombre;
            $persona->tipo_documento = $request->tipo_documento;
            $persona->num_documento = $request->num_documento;
            $persona->direccion = $request->direccion;
            $persona->telefono = $request->telefono;
            $persona->email = $request->email;


            $persona->save();
            $proveedor = new Proveedor();
            $proveedor->contacto = $request->contacto;
            $proveedor->telefono_contacto = $request->telefono_contacto;
            $proveedor->id = $persona->id;
            $proveedor->save();

            DB::commit();

        } catch(Exception $e){
            DB::rollBack();
        }



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

        try{
            DB::beginTransaction();
            $proveedor = Proveedor::findOrFail($request->id);
            $persona = Persona::findOrFail($proveedor->id);



            $persona->nombre = $request->nombre;
            $persona->tipo_documento = $request->tipo_documento;
            $persona->num_documento = $request->num_documento;
            $persona->direccion = $request->direccion;
            $persona->telefono = $request->telefono;
            $persona->email = $request->email;
            $persona->save();

            $proveedor->contacto = $request->contacto;
            $proveedor->telefono_contacto = $request->telefono_contacto;
            $proveedor->save();

            DB::commit();

        } catch(Exception $e){
            DB::rollBack();
        }
    }

    public function listarPdf(){

        $proveedores = Proveedor::join('personas','proveedores.id', '=', 'personas.id')
        ->select('personas.id','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.telefono',
        'personas.email', 'proveedores.contacto', 'proveedores.telefono_contacto')
        ->orderBy('personas.id', 'desc')->get();


        $cont=Proveedor::count();

        $pdf = \PDF::loadview('pdf.proveedorpdf', ['proveedores' => $proveedores, 'cont'=>$cont]);
        return $pdf->download('proveedores.pdf');
    }
}
