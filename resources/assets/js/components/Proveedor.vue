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
                        <i class="fa fa-align-justify"></i> Proveedores
                        <button type="button" @click="abrirModal('persona', 'registrar')" class="btn btn-secondary" >
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                        <button type="button" @click="cargarPdf()" class="btn btn-info" >
                            <i class="fa fa-download"></i>&nbsp;Descargar reporte
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio" >
                                      <option value="nombre">Nombre</option>
                                      <option value="num_documento">Número documento</option>
                                      <option value="email">Email</option>
                                      <option value="telefono">Teléfono</option>
                                    </select>
                                    <input type="text" v-model="buscar"  @keyup.enter="listarPersona(1,buscar,criterio)" class="form-control" placeholder="Proveedor a buscar">
                                    <button type="submit" @click="listarPersona(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th class="text-center" >Opciones</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Tipo Documento</th>
                                    <th class="text-center">Número Documento</th>
                                    <th class="text-center">Dirección</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Contacto</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center" v-for="persona in arrayPersona" :key="persona.id">
                                    <td>
                                        <button type="button" @click="abrirModal('persona', 'actualizar',persona)" class="btn btn-warning btn-sm" >
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                    </td>
                                    <td class="text-center" v-text="persona.nombre"></td>
                                    <td class="text-center" v-text="persona.tipo_documento"></td>
                                    <td class="text-center" v-text="persona.num_documento"></td>
                                    <td class="text-center" v-text="persona.direccion"></td>
                                    <td class="text-center" v-text="persona.telefono"></td>
                                    <td class="text-center" v-text="persona.email"></td>
                                    <td class="text-center" v-text="persona.contacto"></td>

                                </tr>

                            </tbody>
                        </table>
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
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="nombre" class="form-control" placeholder="Nombre de la persona">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Tipo Documento</label>
                                    <div class="col-md-9">
                                        <select v-model="tipo_documento" class="form-control">
                                            <option value="CC">CC</option>
                                            <option value="RUT">RUT</option>
                                            <option value="PASS">PASS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Número de documento</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="num_documento" class="form-control" placeholder="Número de documento">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Dirección</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="direccion" class="form-control" placeholder="Dirección">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Teléfono</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="telefono" class="form-control" placeholder="Telefono">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" v-model="email" class="form-control" placeholder="Email">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Contacto</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="contacto" class="form-control" placeholder="Contácto">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Teléfono Contácto</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="telefono_contacto" class="form-control" placeholder="Teléfono de Contácto">

                                    </div>
                                </div>

                                <div v-show="errorPersona" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjPersona" :key="error" v-text="error">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" @click="cerrarModal()" class="btn btn-secondary" >Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarPersona()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarPersona()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
            <!-- Inicio del modal Eliminar -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Persona</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Estas seguro de eliminar esta persona?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- Fin del modal Eliminar -->

        </main>
</template>

<script>
    export default {
        data (){
            return {
                persona_id : 0,
                nombre : '',
                tipo_documento : 'CC',
                num_documento: '',
                direccion: '',
                telefono: '',
                email: '',
                contacto:'',
                telefono_contacto:'',

                arrayPersona : [],
                modal : 0,
                tituloModal : '',
                tipoAccion: 1,
                errorPersona : 0,
                errorMostrarMsjPersona: [],
                pagination: {
                    'total' :0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio: 'nombre',
                buscar:''

                }
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

            }
        },
        methods : {
            cargarPdf(){
                window.open('http://localhost:8000/proveedor/listarPdf','_blank');
            },
            listarPersona(page, buscar, criterio){
                let me= this;
                var url='/proveedor?page=' + page + '&buscar='+ buscar + '&criterio='+criterio;
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    me.arrayPersona = respuesta.personas.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error){
                     me.arrayPersona = error.data;
                })

            },
            cambiarPagina(page, buscar, criterio){
                let me = this;
                //actualiza la pagina actual
                me.pagination.current_page = page;
                me.listarPersona(page, buscar, criterio);
            },
            registrarPersona(){

                if(this.validarPersona()){
                    return;
                }
                let me = this;
                axios.post('/proveedor/registrar', {
                    'nombre':this.nombre,
                    'tipo_documento': this.tipo_documento,
                    'num_documento':this.num_documento,
                    'direccion':this.direccion,
                    'telefono': this.telefono,
                    'email':this.email,
                    'contacto':this.contacto,
                    'telefono_contacto':this.telefono_contacto
                }).then(function (response){

                }).then(function(){
                    me.cerrarModal();
                    me.listarPersona(1,'', 'nombre');
                }).catch(function(error){
                    console.log(error);
                })
            },
            actualizarPersona(){
                if(this.validarPersona()){
                    return;
                }
                let me = this;
                axios.put('/proveedor/actualizar', {
                    'nombre':this.nombre,
                    'id':this.persona_id,
                    'tipo_documento': this.tipo_documento,
                    'num_documento':this.num_documento,
                    'direccion':this.direccion,
                    'telefono': this.telefono,
                    'email':this.email,
                    'contacto':this.contacto,
                    'telefono_contacto':this.telefono_contacto

                }).then(function (response){

                }).then(function(){
                    me.cerrarModal();
                    me.listarPersona(1,'', 'nombre');
                }).catch(function(error){
                    console.log(error);
                })
            },

            validarPersona(){
                this.errorPersona=0;
                this.errorMostrarMsjPersona=[];

                if(!this.nombre) this.errorMostrarMsjPersona.push('El nombre no puede ir vacio');
                if(this.errorMostrarMsjPersona.length) this.errorPersona = 1;

                return this.errorPersona;

            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.nombre='';
                this.tipo_documento='RUCt';
                this.num_documento = '';
                this.direccion = '';
                this.telefono = '';
                this.email = '';
                this.contacto='',
                this.telefono_contacto='',
                this.errorPersona = 0;

            },
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "persona":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Proveedor';
                                this.nombre='';
                                this.tipo_documento='RUT';
                                this.num_documento = '';
                                this.direccion = '';
                                this.telefono = '';
                                this.email = '';
                                this.contacto = '';
                                this.telefono_contacto='';
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'actualizar':
                            {
                                this.modal=1;
                                this.tituloModal ='Actualizar Proveedor';
                                this.tipoAccion = 2;
                                this.persona_id = data['id'];
                                this.nombre = data['nombre'];
                                this.tipo_documento = data['tipo_documento'];
                                this.num_documento = data['num_documento'];
                                this.direccion = data['direccion'];
                                this.telefono = data['telefono'];
                                this.email = data['email'];
                                this.contacto = data['contacto'];
                                this.telefono_contacto = data['telefono_contacto'];
                                break;
                            }
                        }
                    }
                }
            }
        },
        mounted() {
            this.listarPersona(1,this.buscar, this.criterio);
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
</style>

