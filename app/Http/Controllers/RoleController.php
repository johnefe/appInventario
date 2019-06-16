<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
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
            $roles = Role::orderBy('id', 'desc')->paginate(5);
        }else{
            $roles = Role::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(5);
        }
        //$categorias = Categoria::paginate(5);
        return [
            'pagination' => [
                'total' => $roles->total(),
                'current_page' => $roles->currentPage(),
                'per_page' => $roles->perPage(),
                'last_page' => $roles->lastPage(),
                'from' => $roles->firstItem(),
                'to' => $roles->lastItem(),
            ],
            'roles' => $roles
        ];
        // $categorias = DB::table('categorias')->paginate(2);
        // return $categorias;

    }

    public function selectRole(Request $request){

        $roles = Role::where('condicion', '=', '1')
        ->select('id','nombre')
        ->orderBy('nombre','asc')->get();

        return ['roles' => $roles];
    }

}
