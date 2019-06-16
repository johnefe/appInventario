<template>
    <main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item titulo-1"><a href="/">Escritorio</a></li>
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Ventas
                        <button type="button" @click="mostrarDetalle()" class="btn btn-success" >
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <!--listado -->
                    <template v-if="listado==1">
                        <div class="card-body" >
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="form-control col-md-3" v-model="criterio" >
                                        <option value="tipo_comprobante">Tipo Comprobante</option>
                                        <option value="num_comprobante">Número Comprobante</option>
                                        <option value="fecha_hora">Fecha-Hora</option>
                                        </select>
                                        <input type="text" v-model="buscar"  @keyup.enter="listarVenta(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                        <button type="submit" @click="listarVenta(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Opciones</th>
                                            <th class="text-center">Nombre usuario</th>
                                            <th class="text-center">Cliente</th>
                                            <th class="text-center">Tipo Comprobante</th>
                                            <!-- <th class="text-center">Serie Comprobante</th> -->
                                            <th class="text-center">Número Comprobante</th>
                                            <th class="text-center">Fecha Hora</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Estado</th>

                                        </tr>
                                    </thead>
                                <tbody>
                                    <tr v-for="venta in arrayVenta" :key="venta.id">
                                        <td class="text-center">
                                            <button type="button" @click="verVenta(venta.id)" class="btn btn-success btn-sm" >
                                            <i class="icon-eye"></i>
                                            </button> &nbsp;
                                            <button type="button" @click="pdfVenta(venta.id)" class="btn btn-info btn-sm" >
                                            <i class="icon-doc"></i>
                                            </button> &nbsp;
                                            <template v-if="venta.estado == 'Registrado'">
                                                <button type="button" @click="desactivarVenta(venta.id)" class="btn btn-danger btn-sm">
                                                    <i class="icon-trash"></i>
                                                </button>
                                            </template>


                                        </td>
                                        <td class="text-center" v-text="venta.usuario"></td>
                                        <td class="text-center" v-text="venta.nombre"></td>
                                        <td class="text-center" v-text="venta.tipo_comprobante"></td>
                                        <td class="text-center" v-text="venta.num_comprobante"></td>
                                        <!-- <td class="text-center" v-text="venta.serie_comprobante"></td> -->
                                        <td class="text-center" v-text="venta.fecha_hora"></td>
                                        <td class="text-center" v-text="venta.total"></td>

                                        <td class="text-center" v-text="venta.estado"></td>

                                    </tr>

                                </tbody>
                            </table>
                            </div>

                            <nav>
                                <ul class="pagination">
                                    <li class="page-item" v-if="pagination.current_page > 1">
                                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1, buscar, criterio)">Ant</a>
                                    </li>
                                    <li class="page-item " v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active':'']" >
                                        <a class="page-link" href="#" @click.prevent="cambiarPagina(page, buscar, criterio)" v-text="page" ></a>
                                    </li>
                                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1, buscar, criterio)">Sig</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </template>
                    <!--Detalle -->
                    <template v-else-if="listado==0">
                        <div class="card-body">
                            <div class="form-group row border">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><strong>Cliente </strong><span style="color:red">*</span></label>
                                        <v-select class="form-control"
                                            :on-search="selectCliente"
                                            label="nombre"
                                            :options="arrayCliente"
                                            placeholder="Buscar cliente..."
                                            :onChange="getDatosCliente"
                                        >
                                        </v-select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><strong>Impuesto</strong><span style="color:red">*</span></label>
                                    <input type="text" class="form-control" v-model="impuesto" >
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><strong>Tipo Comprobante</strong><span style="color:red">*</span></label>
                                        <select class="form-control" @change="onChange($event)"  v-model="tipo_comprobante">
                                            <option value="0">Seleccione</option>
                                            <option value="FACTURA">Factura</option>
                                            <option value="BOLETA">Boleta</option>
                                            <option value="TICKET">Ticket</option>

                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Serie Comprobante</label>
                                        <input type="text" class="form-control" v-model="serie_comprobante" placeholder="000x">
                                    </div>

                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><strong>Numero Comprobante</strong><span style="color:red">*</span></label>
                                        <input type="text" readonly  class="form-control" v-model="num_comprobante" placeholder="000xx">
                                    </div>

                                </div>
                                <!-- <div class="col-md-12">
                                    <div v-show="errorVenta" class="form-group row div-error">
                                        <div class="text-center text-error">
                                            <div v-for="error in errorMostrarMsjVenta" :key="error" v-text="error">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <div class="form-group row border">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><strong>Artículo</strong><span style="color:red" v-show="idarticulo == 0">*</span></label>
                                        <div class="form-inline">
                                            <input type="text" class="form-control" v-model="codigo" @keyup.enter="buscarArticulo()" placeholder="Código artículo y enter">
                                            <button class="btn btn-primary" @click="abrirModal()">...</button>
                                            <input type="text" readonly class="form-control" v-model="articulo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label><strong>Precio </strong><span style="color:red" v-show="precio== 0">*</span></label>
                                        <input type="number" value="0" step="any" class="form-control" v-model="precio" readonly >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label><strong>Cantidad</strong><span style="color:red" v-show="cantidad == 0">*</span></label>
                                        <input type="number" value="0" class="form-control" v-model="cantidad" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label><strong>Descuento</strong></label>
                                        <input type="number" value="0" class="form-control" v-model="descuento" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button class="btn btn-success form-control btnagregar" @click="agregarDetalle()" >
                                            <i class="icon-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row border p-2">

                                <div class="table-responsive col-md-12">
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Opciones</th>
                                                <th>Artículo</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Desuento</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if="arrayDetalle.length">
                                            <tr v-for="(detalle,index) in arrayDetalle" :key="detalle.id">
                                            <td>
                                                <button class="btn btn-danger btn-sm" @click="eliminarDetalle(index)" type="button"><i class="icon-close"></i></button>
                                            </td>
                                            <td v-text="detalle.articulo"></td>
                                            <td><input v-model="detalle.precio" type="number"  class="form-control" readonly></td>

                                            <td>
                                                <span style="color:red;" v-show="detalle.cantidad>detalle.stock" > Stock disponible: {{detalle.stock}}</span>
                                                <input v-model="detalle.cantidad" type="number"  class="form-control"></td>

                                            <td>
                                                <span style="color:red;" v-show="detalle.descuento>(detalle.precio*detalle.cantidad)" > Descuento superior</span>
                                                <input v-model="detalle.descuento" type="number"  class="form-control"></td>
                                            <td>{{detalle.precio * detalle.cantidad-detalle.descuento}}</td>
                                            </tr>
                                            <tr style="background-color: #ceecf5;">
                                                <td colspan="5" align="rigth">
                                                    <strong>Total parcial:</strong>

                                                </td>
                                                <td>$ {{totalParcial=(total-totalImpuesto).toFixed(2)}}</td>
                                            </tr>
                                            <tr style="background-color: #ceecf5;">
                                                <td colspan="5" align="rigth">
                                                    <strong>Impuesto:</strong>

                                                </td>
                                                <td>$ {{totalImpuesto=((total*impuesto)/(1+impuesto)).toFixed(2)}}</td>
                                            </tr>
                                            <tr style="background-color: #ceecf5;">
                                                <td colspan="5" align="rigth">
                                                    <strong>Total Neto:</strong>

                                                </td>
                                                <td>$ {{total= calcularTotal}}</td>
                                            </tr>
                                        </tbody>
                                        <tbody v-else>
                                            <tr>
                                                <td colspan="6">
                                                    No hay Artíclos agregados
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-danger" @click="ocultarDetalle()">Cerrar</button>
                                    <button type="button" class="btn btn-primary" @click="registrarVenta()">Registrar Venta</button>
                                </div>
                            </div>
                        </div>
                    </template>
                    <!--ver detalleventa -->
                    <template v-else-if="listado==2">
                        <div class="card-body">
                            <div class="form-group row border">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="">Cliente</label>
                                        <p v-text="cliente"></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Impuesto</label>
                                    <p v-text="impuesto"></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipo Comprobante</label>
                                       <p v-text="tipo_comprobante"></p>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Serie Comprobante</label>
                                        <p v-text="serie_comprobante"></p>
                                    </div>

                                </div> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero Comprobante</label>
                                        <p v-text="num_comprobante"></p>
                                    </div>

                                </div>


                            </div>

                            <div class="form-group row border p-2">

                                <div class="table-responsive col-md-12">
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>

                                                <th>Artículo</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Descuento</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody v-if="arrayDetalle.length">
                                            <tr v-for="detalle in arrayDetalle" :key="detalle.id">

                                            <td v-text="detalle.articulo"></td>
                                            <td v-text="detalle.precio"></td>
                                            <td v-text="detalle.cantidad"></td>
                                            <td v-text="detalle.descuento"></td>
                                            <td>{{detalle.precio * detalle.cantidad - detalle.descuento}}</td>
                                            </tr>
                                            <tr style="background-color: #ceecf5;">
                                                <td colspan="4" align="rigth">
                                                    <strong>Total parcial:</strong>

                                                </td>
                                                <td>$ {{totalParcial=(total-totalImpuesto).toFixed(2)}}</td>
                                            </tr>
                                            <tr style="background-color: #ceecf5;">
                                                <td colspan="4" align="rigth">
                                                    <strong>Impuesto:</strong>

                                                </td>
                                                <td>$ {{totalImpuesto=((total*impuesto)).toFixed(2)}}</td>
                                            </tr>
                                            <tr style="background-color: #ceecf5;">
                                                <td colspan="4" align="rigth">
                                                    <strong>Total Neto:</strong>

                                                </td>
                                                <td>$ {{total}}</td>
                                            </tr>
                                        </tbody>
                                        <tbody v-else>
                                            <tr>
                                                <td colspan="5">
                                                    No hay Artíclos agregados
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-danger" @click="ocultarDetalle()">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </template>

                    <!-- -->
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade"  tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal" ></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="form-control col-md-3" v-model="criterioA" >
                                        <option value="nombre">Nombre</option>
                                        <option value="descripcion">Descripción</option>
                                        <option value="codigo">Código</option>
                                        </select>
                                        <input type="text" v-model="buscarA"  @keyup.enter="listarArticulo(buscarA,criterioA)" class="form-control" placeholder="Artículo a buscar">
                                        <button type="submit" @click="listarArticulo(buscarA,criterioA)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Opciones</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Precio venta</th>
                                            <th>Stock</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="articulo in arrayArticulo" :key="articulo.id">
                                            <td>
                                                <button type="button" @click="agregarDetalleModal(articulo)" class="btn btn-warning btn-sm" >
                                                <i class="icon-plus"></i>
                                                </button>
                                            </td>
                                            <td v-text="articulo.codigo"></td>
                                            <td v-text="articulo.nombre"></td>
                                            <td v-text="articulo.nombre_categoria"></td>
                                            <td v-text="articulo.precio_venta"></td>
                                            <td v-text="articulo.stock"></td>
                                            <td>
                                                <div v-if="articulo.condicion">
                                                    <span class="badge badge-success">Activo</span>
                                                </div>
                                                <div v-else>
                                                    <span class="badge badge-danger">Desactivado</span>
                                                </div>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" @click="cerrarModal()" class="btn btn-danger" >Cerrar</button>
                        </div>
                    </div>

                </div>

            </div>
            <!--Fin del modal-->

        </main>
</template>

<script>
import vSelect from 'vue-select';
    export default {
        data (){
            return {
                venta_id : 0,
                idcliente : 0,
                cliente:'',
                //nombre: '',
                tipo_comprobante : 'FACTURA',
                // serie_comprobante: '',
                num_comprobante: '',
                impuesto: 0.18,
                total: 0.0,
                totalImpuesto: 0.0,
                totalParcial: 0.0,
                descuento:0,
                arrayVenta: [],
                arrayDetalle: [],
                arrayCliente: [],
                listado:1,
                modal : 0,
                tituloModal : '',
                tipoAccion: 1,
                errorVenta : 0,
                errorMostrarMsjVenta: [],
                pagination: {
                    'total' :0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio: 'num_comprobante',
                buscar:'',
                criterioA: 'nombre',
                buscarA:'',
                arrayArticulo: [],
                idarticulo: 0,
                codigo: '',
                articulo: '',
                precio: 0,
                cantidad: 0,
                stock: 0

                }
        },
        components: {
            vSelect
        },
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //calcula los elementos de la paginación
            pagesNumber: function(){
                if( !this.pagination.to){
                    return [];
                }

                var from = this.pagination.current_page - this.offset;
                if(from < 1){
                    from = 1;
                }

                var to = from + (this.offset * 2);
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }

                var pagesArray = [];
                while( from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;

            },
            calcularTotal: function(){
                var resultado=0.0;
                for( var i=0;i<this.arrayDetalle.length; i++){
                    resultado= resultado+(this.arrayDetalle[i].precio * this.arrayDetalle[i].cantidad - this.arrayDetalle[i].descuento);

                }
                return resultado;
            }
        },
        methods : {
            onChange(event) {
                let me = this;
                console.log(event.target.value)

                let valor = event.target.value;

                    var url = '/venta/BuscarUltimaVenta?valor='+valor;

                    axios.get(url).then(function (response){
                        var numero = 0;
                        let respuesta = response.data;
                        me.arrayVenta= respuesta.venta;
                        if (me.arrayVenta.length>0) {
                            numero = parseInt(me.arrayVenta[0]['num_comprobante']) + 1;

                        } else {
                            numero = 1;
                        }

                        let numberOutput = Math.abs(numero);//valor absoluto del numero
                        let length = numero.toString().length;//largo del numero
                        let zero = '0'; //string de cero
                        let width = 9;

                        /** **** */
                        if (width <= length) {
                            if (numero < 0) {
                            console.log("-" + numberOutput.toString());
                            me.num_comprobante = "-" + numberOutput.toString()
                            } else {
                            console.log(numberOutput.toString());
                            me.num_comprobante = numberOutput.toString();
                            }
                        } else {
                            if (numero < 0) {
                            console.log("-" + (zero.repeat(width - length)) + numberOutput.toString());
                            me.num_comprobante = "-" + (zero.repeat(width - length)) + numberOutput.toString();
                            } else {
                            console.log((zero.repeat(width - length)) + numberOutput.toString());
                            me.num_comprobante = (zero.repeat(width - length)) + numberOutput.toString();
                            }
                        }

                    })

                    .catch(function (error){
                        console.log(error);
                    })

                    /********************* */
                    this.listado = 0;

                    me.idproveedor=0;
                    me.tipo_comprobante= valor;
                    // me.serie_comprobante='';
                    //me.num_comprobante='000000000';
                    me.impuesto=0.18;
                    me.total=0.0;
                    me.idarticulo=0;
                    me.articulo='';
                    me.cantidad=0;
                    me.precio=0;
                    me.arrayDetalle=[];
            },
            listarVenta(page, buscar, criterio){
                let me= this;
                var url='/venta?page=' + page + '&buscar='+ buscar + '&criterio='+criterio;
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    me.arrayVenta = respuesta.ventas.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error){
                     me.arrayVenta = error.data;
                })

            },
            selectCliente(search, loading){
                let me= this;
                loading(true)
                var url='/cliente/selectCliente?filtro='+search;
                axios.get(url).then(function (response){
                    let respuesta = response.data;
                    q: search
                    me.arrayCliente= respuesta.clientes;
                    loading(false)
                })
                .catch(function (error){
                     console.log(error);
                })
            },
            getDatosCliente(val1){
                let me = this;
                me.loading = true;
                me.idcliente = val1.id;

            },
            buscarArticulo(){
                let me= this;
                var url='/articulo/buscarArticuloVenta?filtro='+me.codigo;
                axios.get(url).then(function (response){
                    let respuesta = response.data;

                    me.arrayArticulo= respuesta.articulos;
                    console.log(me.arrayArticulo);
                    if(me.arrayArticulo.length>0){
                    me.articulo= me.arrayArticulo[0]['nombre'];
                    me.idarticulo=me.arrayArticulo[0]['id'];
                    me.precio=me.arrayArticulo[0]['precio'];
                    me.stock=me.arrayArticulo[0]['stock'];

                    }else{
                        me.articulo='No existe articulo';
                        me.idarticulo=0;
                    }
                })

                .catch(function (error){
                     console.log(error);
                })

            },
            cambiarPagina(page, buscar, criterio){
                let me = this;
                //actualiza la pagina actual
                me.pagination.current_page = page;
                me.listarVenta(page, buscar, criterio);
            },
            encuentra(id){
                var sw=0;
                for( var i=0; i<this.arrayDetalle.length;i++){
                    if(this.arrayDetalle[i].idarticulo==id){
                        sw = true;
                    }
                }
                return sw;
            },
            eliminarDetalle(index){
                let me = this;
                me.arrayDetalle.splice(index, 1);
            },
            agregarDetalle(){
                let me= this;
                if(me.idarticulo==0 || me.cantidad == 0 || me.precio==0){

                }else{

                    if(me.encuentra(me.idarticulo)){

                        swal({
                            type:'error',
                            title: 'Error...',
                            text: 'Este articulo ya se encuentra agregado',
                        })
                    }else{

                        if(me.cantidad>me.stock) {
                             swal({
                            type:'error',
                            title: 'Error...',
                            text: 'No hay stock disponible',
                        })
                        }else{
                            me.arrayDetalle.push({
                            idarticulo: me.idarticulo,
                            articulo: me.articulo,
                            cantidad: me.cantidad,
                            precio: me.precio,
                            descuento: me.descuento,
                            stock: me.stock
                            });
                            me.codigo="";
                            me.idarticulo=0;
                            me.articulo="";
                            me.cantidad=0;
                            me.precio=0;
                            me.descuento=0;
                            me.stock=0;
                        }

                    }


                }

            },
            agregarDetalleModal(data = []){
                let me=this;
                if(me.encuentra(data['id'])){

                        swal({
                            type:'error',
                            title: 'Error...',
                            text: 'Este articulo ya se encuentra agregado',
                        })
                    }else{
                        me.arrayDetalle.push({
                        idarticulo: data['id'],
                        articulo: data['nombre'],
                        cantidad: 1,
                        precio: data['precio_venta'],
                        descuento:0,
                        stock:data['stock']
                        });

                    }
            },
            listarArticulo( buscar, criterio){
                let me= this;
                var url='/articulo/listarArticuloVenta?buscar=' + buscar + '&criterio='+criterio;
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    me.arrayArticulo = respuesta.articulos.data;
                    console.log("articulos");
                })
                .catch(function (error){
                     me.arrayArticulo = error.data;
                })

            },
            registrarVenta(){

                if(this.validarVenta()){
                    return;
                }
                let me = this;
                axios.post('/venta/registrar', {
                    'idcliente':this.idcliente,
                    'tipo_comprobante': this.tipo_comprobante,
                    // 'serie_comprobante':this.serie_comprobante,
                    'num_comprobante':this.num_comprobante,
                    'impuesto': this.impuesto,
                    'total':this.total,
                    'data':this.arrayDetalle,

                }).then(function(response){
                    me.listado=1;
                    me.idcliente=0;
                    me.tipo_comprobante='FACTURA';
                    // me.serie_comprobante='';
                    me.num_comprobante='';
                    me.impuesto=0.18;
                    me.total=0.0;
                    me.idarticulo=0;
                    me.articulo='';
                    me.cantidad=0;
                    me.precio=0;
                    me.stock = 0;
                    me.codigo = '';
                    me.descuento = 0;
                    me.arrayDetalle=[];
                    me.listarVenta(1,'', 'num_comprobante');

                    window.open('http://localhost:8000/venta/pdf/'+response.data.id+','+'_blank');

                }).catch(function(error){
                    console.log(error);
                })
            },
            actualizarVenta(){
                if(this.validarIngreso()){
                    return;
                }
                let me = this;
                axios.put('/user/actualizar', {
                    'nombre':this.nombre,
                    'id':this.persona_id,
                    'tipo_documento': this.tipo_documento,
                    'num_documento':this.num_documento,
                    'direccion':this.direccion,
                    'telefono': this.telefono,
                    'email':this.email,
                    'usuario':this.usuario,
                    'password':this.password,
                    'idrole' : this.idrole,
                    'id':this.persona_id
                }).then(function (response){

                }).then(function(){
                    me.cerrarModal();
                    me.listarIngreso(1,'', 'nombre');
                }).catch(function(error){
                    console.log(error);
                })
            },
            pdfVenta(id){
                window.open('http://localhost:8000/venta/pdf/'+id+','+'_blank');
            },
            desactivarVenta(id){

               swal({
                    title: 'Esta seguro de anular esta venta?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar!',
                    cancelButtonText: 'Cancelar',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    reverseButtons: true
                    }).then((result) => {
                    if (result.value) {
                        let me = this;

                        axios.put('/venta/desactivar',{
                            'id': id
                        }).then(function (response) {
                            me.listarVenta(1,'','num_comprobante');
                            swal(
                            'Anulado!',
                            'La venta ha sido anulada con éxito.',
                            'success'
                            )
                        }).catch(function (error) {
                            console.log(error);
                        });


                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {

                }
                })

            },
            validarVenta(){
                let me = this;
                me.errorVenta=0;
                me.errorMostrarMsjVenta=[];
                var art;

                me.arrayDetalle.map(function(x){
                    if(x.cantidad>x.stock){
                        art=x.articulo + " con stock insuficiente";
                        me.errorMostrarMsjVenta.push(art);
                    }
                });

                if(me.idcliente==0) me.errorMostrarMsjVenta.push('Seleccione un cliente');
                if(me.tipo_comprobante==0) me.errorMostrarMsjVenta.push('Seleccione el comprobante');
                if(!me.num_comprobante) me.errorMostrarMsjVenta.push('Ingrese el número de comprobante');
                if(!me.impuesto) me.errorMostrarMsjVenta.push('Ingrese el impuesto de compra');
                if(me.arrayDetalle.length<=0) me.errorMostrarMsjVenta.push('Ingrese algún producto');


                 if(this.errorMostrarMsjVenta.length >0){
                    var msj = '';
                swal({
                            type:'error',
                            title: 'Hay campos que son obligatorios..',

                            text: this.errorMostrarMsjVenta,
                        })
                this.errorVenta = 1;
                }


            },
            mostrarDetalle(){
                let me = this;
                let valor = 'FACTURA';

                var url = '/venta/BuscarUltimaVenta?valor='+valor;

                axios.get(url).then(function (response){
                    var numero = 0;
                    let respuesta = response.data;
                    me.arrayVenta= respuesta.venta;

                    if (me.arrayVenta.length>0) {
                        numero = parseInt(me.arrayVenta[0]['num_comprobante']) + 1;

                    } else {
                        numero = 1;
                    }
                    //let numero = parseInt(me.arrayVenta[0]['num_comprobante']) + 1;
                    let numberOutput = Math.abs(numero);//valor absoluto del numero
                    let length = numero.toString().length;//largo del numero
                    let zero = '0'; //string de cero
                    let width = 9;

                    /** **** */
                    if (width <= length) {
                        if (numero < 0) {
                           console.log("-" + numberOutput.toString());
                           me.num_comprobante = "-" + numberOutput.toString()
                        } else {
                           console.log(numberOutput.toString());
                           me.num_comprobante = numberOutput.toString();
                        }
                    } else {
                        if (numero < 0) {
                           console.log("-" + (zero.repeat(width - length)) + numberOutput.toString());
                           me.num_comprobante = "-" + (zero.repeat(width - length)) + numberOutput.toString();
                        } else {
                           console.log((zero.repeat(width - length)) + numberOutput.toString());
                           me.num_comprobante = (zero.repeat(width - length)) + numberOutput.toString();
                        }
                    }

                })

                .catch(function (error){
                     console.log(error);
                })

                /********************* */
                this.listado = 0;

                me.idproveedor=0;
                me.tipo_comprobante='FACTURA';
                // me.serie_comprobante='';
                //me.num_comprobante='000000000';
                me.impuesto=0.18;
                me.total=0.0;
                me.idarticulo=0;
                me.articulo='';
                me.cantidad=0;
                me.precio=0;
                me.arrayDetalle=[];
            },
            verVenta(id){
                let me=this;

                me.listado=2;

                //obtener los datos del ingreso
                var arrayVentaT=[];
                var url='/venta/obtenerCabecera?id='+id;
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    arrayVentaT = respuesta.venta;

                    me.cliente = arrayVentaT[0]['nombre'];
                    me.tipo_comprobante = arrayVentaT[0]['tipo_comprobante'];
                    // me.serie_comprobante= arrayVentaT[0]['serie_comprobante'];
                    me.num_comprobante=arrayVentaT[0]['num_comprobante'];
                    me.impuesto= arrayVentaT[0]['impuesto'];
                    me.total= arrayVentaT[0]['total'];

                })
                .catch(function (error){
                     console.log(error);
                })

                //obtener los datos de los detalles
               //var arrayIngresoD=[];
                var urld='/venta/obtenerDetalles?id='+id;
                axios.get(urld).then(function (response){
                    var respuesta = response.data;
                    me.arrayDetalle = respuesta.detalles;

                })
                .catch(function (error){
                     console.log(error);
                })

            },
            ocultarDetalle(){
                this.listado = 1;
            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';

            },
            abrirModal(){
                this.arrayArticulo=[];
                this.modal = 1;
                this.tituloModal = 'Seleccione uno o varios artículos';

            }
        },
        mounted() {
            this.listarVenta(1,this.buscar, this.criterio);
        }
    }
</script>

<style>



    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
    @media(min-width: 600px){
        .btnagregar{
            margin-top: 2rem;
        }
    }
</style>

