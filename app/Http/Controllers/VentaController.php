<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Venta;
use App\DetalleVenta;
use App\User;
use App\Dato;
use Carbon\Carbon;
use App\Notifications\NotifyAdmin;

class VentaController extends Controller
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
            // $ventas = Venta::join('personas','ventas.idcliente', '=', 'personas.id')
            // ->join('users', 'ventas.idusuario', '=', 'users.id')
            // ->select('ventas.id','ventas.tipo_comprobante',
            // 'ventas.serie_comprobante', 'ventas.num_comprobante','ventas.fecha_hora', 'ventas.impuesto','ventas.total',
            // 'ventas.estado','personas.nombre','users.usuario')
            // ->orderBy('ventas.id', 'desc')->paginate(10);
            $ventas = Venta::join('personas','ventas.idcliente', '=', 'personas.id')
            ->join('users', 'ventas.idusuario', '=', 'users.id')
            ->select('ventas.id','ventas.tipo_comprobante',
             'ventas.num_comprobante','ventas.fecha_hora', 'ventas.impuesto','ventas.total',
            'ventas.estado','personas.nombre','users.usuario')
            ->orderBy('ventas.id', 'desc')->paginate(10);
        }else{
            // $ventas = Venta::join('personas','ventas.idcliente', '=', 'personas.id')
            // ->join('users', 'ventas.idusuario', '=', 'users.id')
            // ->select('ventas.id','ventas.tipo_comprobante',
            // 'ventas.serie_comprobante', 'ventas.num_comprobante','ventas.fecha_hora', 'ventas.impuesto','ventas.total',
            // 'ventas.estado','personas.nombre','users.usuario')
            // ->where('ventas.'.$criterio, 'like', '%'.$buscar.'%')
            // ->orderBy('ventas.id', 'desc')->paginate(10);
            $ventas = Venta::join('personas','ventas.idcliente', '=', 'personas.id')
            ->join('users', 'ventas.idusuario', '=', 'users.id')
            ->select('ventas.id','ventas.tipo_comprobante',
            'ventas.num_comprobante','ventas.fecha_hora', 'ventas.impuesto','ventas.total',
            'ventas.estado','personas.nombre','users.usuario')
            ->where('ventas.'.$criterio, 'like', '%'.$buscar.'%')
            ->orderBy('ventas.id', 'desc')->paginate(10);
        }
        //$proveedores = Categoria::paginate(5);
        return [
            'pagination' => [
                'total' => $ventas->total(),
                'current_page' => $ventas->currentPage(),
                'per_page' => $ventas->perPage(),
                'last_page' => $ventas->lastPage(),
                'from' => $ventas->firstItem(),
                'to' => $ventas->lastItem(),
            ],
            'ventas' => $ventas
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

            $myTime = Carbon::now('America/Bogota');

            $venta = new Venta();
            $venta->idcliente = $request->idcliente;
            $venta->idusuario = \Auth::user()->id;
            $venta->tipo_comprobante = $request->tipo_comprobante;
            // $venta->serie_comprobante = $request->serie_comprobante;
            $venta->num_comprobante = $request->num_comprobante;
            $venta->fecha_hora = $myTime->toDateString();
            $venta->impuesto = $request->impuesto;
            $venta->total = $request->total;
            $venta->estado = 'Registrado';

            $venta->save();

            $detalles = $request->data;//Array de detaller
            //recorro todos los elemnetos

            foreach($detalles as $ep=>$det){

                $detalle = new DetalleVenta();
                $detalle->idventa = $venta->id;
                $detalle->idarticulo = $det['idarticulo'];
                $detalle->cantidad = $det['cantidad'];
                $detalle->precio = $det['precio'];
                $detalle->descuento = $det['descuento'];
                $detalle->save();

            }
            $fechaActual= date('Y-m-d');
            $numVentas = DB::table('ventas')->whereDate('created_at', $fechaActual)->count();
            $numIngresos = DB::table('ingresos')->whereDate('created_at',$fechaActual)->count();

            $arregloDatos = [
                'ventas' => [
                            'numero' => $numVentas,
                            'msj' => 'Ventas'
                        ],
                'ingresos' => [
                            'numero' => $numIngresos,
                            'msj' => 'Ingresos'
                        ]
            ];

            $allUsers = User::all();

            foreach ( $allUsers as $notificar) {

                User::findOrFail($notificar->id)->notify(new NotifyAdmin($arregloDatos));
            }

            DB::commit();

            return [
                'id' =>$venta->id
            ];

        } catch(Exception $e){
            DB::rollBack();
        }



    }

    /**
     * Obtener el ultimo registro en la tabla factura
     */
    public function obtenerUltimoRegistroVenta(Request $request){
        if(!$request->ajax()) return redirect('/');
        $valor = $request->valor;
        $venta = Venta::where('tipo_comprobante', '=' , $valor)
        ->orderBy('ventas.num_comprobante', 'desc')->take(1)->get();
        return ['venta' => $venta];

    }

    //si queremos anular un venta no se actuliza sino se desactiva nunca se va a poder editar
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
        $venta = Venta::findOrFail($request->id);
        $venta->estado = 'Anulado';
        $venta->save();
    }

    public function obtenerCabecera(Request $request){

        //verifica si la peticion se la esta haciendo por ajax y si no es asi se lo redirige a /
        if(!$request->ajax()) return redirect('/');
        //listar todos los registros de la tabla categoria
        $id = $request->id;

        // $venta = Venta::join('personas','ventas.idcliente', '=', 'personas.id')
        // ->join('users', 'ventas.idusuario', '=', 'users.id')
        // ->select('ventas.id','ventas.tipo_comprobante',
        // 'ventas.serie_comprobante', 'ventas.num_comprobante','ventas.fecha_hora', 'ventas.impuesto','ventas.total',
        // 'ventas.estado','personas.nombre','users.usuario')
        // ->where('ventas.id', '=', $id)
        // ->orderBy('ventas.id', 'desc')->take(1)->get();

        $venta = Venta::join('personas','ventas.idcliente', '=', 'personas.id')
        ->join('users', 'ventas.idusuario', '=', 'users.id')
        ->select('ventas.id','ventas.tipo_comprobante',
        'ventas.num_comprobante','ventas.fecha_hora', 'ventas.impuesto','ventas.total',
        'ventas.estado','personas.nombre','users.usuario')
        ->where('ventas.id', '=', $id)
        ->orderBy('ventas.id', 'desc')->take(1)->get();

        //$proveedores = Categoria::paginate(5);
        return  ['venta' => $venta ];
    }

    public function obtenerDetalles(Request $request){

         //verifica si la peticion se la esta haciendo por ajax y si no es asi se lo redirige a /
         if(!$request->ajax()) return redirect('/');
         //listar todos los registros de la tabla categoria
         $id = $request->id;

         $detalles = DetalleVenta::join('articulos','detalle_ventas.idarticulo', '=', 'articulos.id')

         ->select('detalle_ventas.cantidad','detalle_ventas.precio', 'detalle_ventas.descuento', 'articulos.nombre as articulo')
         ->where('detalle_ventas.idventa', '=', $id)
         ->orderBy('detalle_ventas.id', 'desc')->get();

         //$proveedores = Categoria::paginate(5);
         return  ['detalles' => $detalles ];

    }

    public function pdf(Request $request , $id){

        // $venta = Venta::join('personas', 'ventas.idcliente', '=', 'personas.id')
        // ->join('users','ventas.idusuario', '=', 'users.id')
        // ->select('ventas.id','ventas.tipo_comprobante', 'ventas.serie_comprobante', 'ventas.num_comprobante','ventas.created_at', 'ventas.impuesto','ventas.total',
        // 'ventas.estado','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.email','personas.telefono','users.usuario')
        // ->where('ventas.id','=',$id)
        // ->orderBy('ventas.id','desc')->take(1)->get();

        $dato = Dato::get();

        $venta = Venta::join('personas', 'ventas.idcliente', '=', 'personas.id')
        ->join('users','ventas.idusuario', '=', 'users.id')
        ->select('ventas.id','ventas.tipo_comprobante', 'ventas.num_comprobante','ventas.created_at', 'ventas.impuesto','ventas.total',
        'ventas.estado','personas.nombre','personas.tipo_documento','personas.num_documento','personas.direccion','personas.email','personas.telefono','users.usuario')
        ->where('ventas.id','=',$id)
        ->orderBy('ventas.id','desc')->take(1)->get();

        $detalles = DetalleVenta::join('articulos','detalle_ventas.idarticulo','=','articulos.id')
        ->select('detalle_ventas.cantidad','detalle_ventas.precio','detalle_ventas.descuento','articulos.nombre as articulo')
        ->where('detalle_ventas.idventa','=',$id)
        ->orderBy('detalle_ventas.id','desc')->get();

        $numventa = Venta::select('num_comprobante')->where('id',$id)->get();

        $pdf = \PDF::loadView('pdf.venta',['venta'=>$venta, 'detalles'=>$detalles, 'dato' => $dato]);

        return $pdf->download('venta-'.$numventa[0]->num_comprobante.'.pdf');

    }
}
