<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Persona;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
            $personas = User::join('personas','users.id', '=', 'personas.id')
            ->join('roles', 'users.idrole', '=', 'roles.id')
            ->select('personas.id','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.telefono',
            'personas.email', 'users.usuario', 'users.password', 'users.condicion', 'users.idrole', 'roles.nombre as rol')

            ->orderBy('personas.id', 'desc')->paginate(5);
        }else{
            $personas =User::join('personas','users.id', '=', 'personas.id')
            ->join('roles', 'users.idrole', '=', 'roles.id')
            ->select('personas.id','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.telefono',
            'personas.email', 'users.usuario', 'users.password', 'users.condicion', 'users.idrole', 'roles.nombre as rol')
            ->where('personas.'.$criterio, 'like', '%'.$buscar.'%')
            ->orderBy('personas.id', 'desc')->paginate(5);
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
            $user = new User();
            $user->usuario= $request->usuario;
            $user->password = bcrypt($request->password);
            $user->condicion = '1';
            $user->idrole = $request->idrole;

            $user->id = $persona->id;
            $user->save();

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
            $user = User::findOrFail($request->id);
            $persona = Persona::findOrFail($user->id);



            $persona->nombre = $request->nombre;
            $persona->tipo_documento = $request->tipo_documento;
            $persona->num_documento = $request->num_documento;
            $persona->direccion = $request->direccion;
            $persona->telefono = $request->telefono;
            $persona->email = $request->email;
            $persona->save();

            $user->usuario= $request->usuario;
            $user->password = bcrypt($request->password);
            $user->condicion = '1';
            $user->idrole = $request->idrole;
            $user->save();

            DB::commit();

        } catch(Exception $e){
            DB::rollBack();
        }
    }

    /**
     * Desactivar the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function desactivar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $user = User::findOrFail($request->id);
        $user->condicion = '0';
        $user->save();
    }

    /**
     * activar the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $user = User::findOrFail($request->id);
        $user->condicion = '1';
        $user->save();
    }
}
