<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticuloController extends Controller
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
            $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
            ->select(
                'articulos.id',
                'articulos.categoria_id',
                'articulos.codigo',
                'articulos.nombre',
                'categorias.nombre as nombre_categoria',
                'articulos.precio_venta',
                'articulos.stock',
                'articulos.descripcion',
                'articulos.condicion' )
            ->orderBy('articulos.id', 'desc')->paginate(10);
        }else{
            $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
            ->select(
                'articulos.id',
                'articulos.categoria_id',
                'articulos.codigo',
                'articulos.nombre',
                'categorias.nombre as nombre_categoria',
                'articulos.precio_venta',
                'articulos.stock',
                'articulos.descripcion',
                'articulos.condicion' )
            ->where('articulos.'.$criterio, 'like', '%'. $buscar . '%')
            ->orderBy('articulos.id', 'desc')->paginate(10);


        }
        //$categorias = Categoria::paginate(5);
        return [
            'pagination' => [
                'total' => $articulos->total(),
                'current_page' => $articulos->currentPage(),
                'per_page' => $articulos->perPage(),
                'last_page' => $articulos->lastPage(),
                'from' => $articulos->firstItem(),
                'to' => $articulos->lastItem(),
            ],
            'articulos' => $articulos
        ];
        // $categorias = DB::table('categorias')->paginate(2);
        // return $categorias;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarArticulo(Request $request)
    {
        //verifica si la peticion se la esta haciendo por ajax y si no es asi se lo redirige a /
        if(!$request->ajax()) return redirect('/');
        //listar todos los registros de la tabla categoria
        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if($buscar==''){
            $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
            ->select(
                'articulos.id',
                'articulos.categoria_id',
                'articulos.codigo',
                'articulos.nombre',
                'categorias.nombre as nombre_categoria',
                'articulos.precio_venta',
                'articulos.stock',
                'articulos.descripcion',
                'articulos.condicion' )
            ->orderBy('articulos.id', 'desc')->paginate(10);
        }else{
            $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
            ->select(
                'articulos.id',
                'articulos.categoria_id',
                'articulos.codigo',
                'articulos.nombre',
                'categorias.nombre as nombre_categoria',
                'articulos.precio_venta',
                'articulos.stock',
                'articulos.descripcion',
                'articulos.condicion' )
            ->where('articulos.'.$criterio, 'like', '%'. $buscar . '%')
            ->orderBy('articulos.id', 'desc')->paginate(10);


        }
        //$categorias = Categoria::paginate(5);
        return [
                'articulos' => $articulos
        ];
        // $categorias = DB::table('categorias')->paginate(2);
        // return $categorias;

    }
    public function listarArticuloVenta(Request $request)
    {
        //verifica si la peticion se la esta haciendo por ajax y si no es asi se lo redirige a /
        if(!$request->ajax()) return redirect('/');
        //listar todos los registros de la tabla categoria
        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if($buscar==''){
            $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
            ->select(
                'articulos.id',
                'articulos.categoria_id',
                'articulos.codigo',
                'articulos.nombre',
                'categorias.nombre as nombre_categoria',
                'articulos.precio_venta',
                'articulos.stock',
                'articulos.descripcion',
                'articulos.condicion' )
            ->where('articulos.stock','>','0')
            ->where('articulos.condicion','=','1')
            ->orderBy('articulos.id', 'desc')->paginate(10);
        }else{
            $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
            ->select(
                'articulos.id',
                'articulos.categoria_id',
                'articulos.codigo',
                'articulos.nombre',
                'categorias.nombre as nombre_categoria',
                'articulos.precio_venta',
                'articulos.stock',
                'articulos.descripcion',
                'articulos.condicion' )
            ->where('articulos.'.$criterio, 'like', '%'. $buscar . '%')
            ->where('articulos.stock','>','0')
            ->where('articulos.condicion','=','1')
            ->orderBy('articulos.id', 'desc')->paginate(10);


        }
        //$categorias = Categoria::paginate(5);
        return [
                'articulos' => $articulos
        ];
        // $categorias = DB::table('categorias')->paginate(2);
        // return $categorias;

    }

    public function buscarArticulo(Request $request){

        if(!$request->ajax()) return redirect('/');

        $filtro = $request->filtro;
        $articulos = Articulo::where('codigo', '=', $filtro)
        ->select('id', 'nombre')->orderBy('nombre', 'asc')->take(1)->get();

        return ['articulos' => $articulos];

    }

    public function buscarArticuloVenta(Request $request){

        if(!$request->ajax()) return redirect('/');

        $filtro = $request->filtro;
        $articulos = Articulo::where('codigo', '=', $filtro)
        ->select('id', 'nombre','stock','precio_venta')
        ->where('stock', '>', '0')
        ->orderBy('nombre', 'asc')->take(1)->get();

        return ['articulos' => $articulos];

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
        $articulo = new Articulo();
        $articulo->categoria_id = $request->categoria_id;
        $articulo->nombre = $request->nombre;
        $articulo->codigo = $request->codigo;
        $articulo->precio_venta = $request->precio_venta;
        $articulo->stock = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->condicion = '1';
        $articulo->save();

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
        $articulo = Articulo::findOrFail($request->id);
        $articulo->categoria_id = $request->categoria_id;
        $articulo->nombre = $request->nombre;
        $articulo->codigo = $request->codigo;
        $articulo->precio_venta = $request->precio_venta;
        $articulo->stock = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->condicion = '1';
        $articulo->save();
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
        $articulo = Articulo::findOrFail($request->id);
        $articulo->condicion = '0';
        $articulo->save();
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
        $articulo = Articulo::findOrFail($request->id);
        $articulo->condicion = '1';
        $articulo->save();
    }

    public function listarPdf(){

        $articulos = Articulo::join('categorias','articulos.categoria_id', '=', 'categorias.id')
        ->select(
            'articulos.id',
            'articulos.categoria_id',
            'articulos.codigo',
            'articulos.nombre',
            'categorias.nombre as nombre_categoria',
            'articulos.precio_venta',
            'articulos.stock',
            'articulos.descripcion',
            'articulos.condicion' )
        ->orderBy('articulos.nombre', 'desc')->get();


        $cont=Articulo::count();

        $pdf = \PDF::loadview('pdf.articulospdf', ['articulos' => $articulos, 'cont'=>$cont]);
        return $pdf->download('articulos.pdf');
    }
}
