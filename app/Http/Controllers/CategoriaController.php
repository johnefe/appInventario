<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
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
            $categorias = Categoria::orderBy('id', 'desc')->paginate(10);
        }else{
            $categorias = Categoria::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(10);
        }
        //$categorias = Categoria::paginate(5);
        return [
            'pagination' => [
                'total' => $categorias->total(),
                'current_page' => $categorias->currentPage(),
                'per_page' => $categorias->perPage(),
                'last_page' => $categorias->lastPage(),
                'from' => $categorias->firstItem(),
                'to' => $categorias->lastItem(),
            ],
            'categorias' => $categorias
        ];
        // $categorias = DB::table('categorias')->paginate(2);
        // return $categorias;

    }

    public function selectCategoria(Request $request){

        if(!$request->ajax()) return redirect('/');
        $categorias = Categoria::where('condicion','=','1')
        ->select('id','nombre')->orderBy('nombre','asc')->get();

        return ['categorias' => $categorias];

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
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = '1';
        $categoria->save();

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
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = '1';
        $categoria->save();
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
        $categoria = Categoria::findOrFail($request->id);
        $categoria->condicion = '0';
        $categoria->save();
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
        $categoria = Categoria::findOrFail($request->id);
        $categoria->condicion = '1';
        $categoria->save();
    }

    public function listarPdf(){

        $categorias = Categoria::orderBy('id', 'desc')->get();


        $cont=Categoria::count();

        $pdf = \PDF::loadview('pdf.categoriaspdf', ['categorias' => $categorias, 'cont'=>$cont]);
        return $pdf->download('categorias.pdf');
    }

}
