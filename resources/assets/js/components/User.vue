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
                        <i class="fa fa-align-justify"></i> Usuario
                        <button type="button" @click="abrirModal('persona', 'registrar')" class="btn btn-secondary" >
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio" >
                                      <option value="nombre">Nombre</option>
                                      <option value="num_documento">Número documento</option>
                                      <option value="email">Email</option>
                                      <option value="telefono">Teléfono</option>
                                    </select>
                                    <input type="text" v-model="buscar"  @keyup.enter="listarPersona(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" @click="listarPersona(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Nombre</th>
                                    <th>Tipo Documento</th>
                                    <th>Número Documento</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Usuario</th>
                                    <th>Rol</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="persona in arrayPersona" :key="persona.id">
                                    <td>
                                        <button type="button" @click="abrirModal('persona', 'actualizar',persona)" class="btn btn-warning btn-sm" >
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <template v-if="persona.condicion">
                                            <button type="button" @click="desactivarUsuario(persona.id)" class="btn btn-danger btn-sm">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </template>
                                        <template v-else>
                                            <button type="button" @click="activarUsuario(persona.id)" class="btn btn-success btn-sm">
                                                <i class="icon-check"></i>
                                            </button>
                                        </template>
                                    </td>
                                    <td v-text="persona.nombre"></td>
                                    <td v-text="persona.tipo_documento"></td>
                                    <td v-text="persona.num_documento"></td>
                                    <td v-text="persona.direccion"></td>
                                    <td v-text="persona.telefono"></td>
                                    <td v-text="persona.email"></td>
                                    <td v-text="persona.usuario"></td>
                                    <td v-text="persona.rol"></td>

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
                                    <label class="col-md-3 form-control-label" for="text-input">Rol(*)</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="idrole">
                                            <option value="0">Seleccione un rol</option>
                                            <option v-for="rol in arrayRole" :key="rol.id" :value="rol.id" v-text="rol.nombre">

                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Usuario(*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="usuario" class="form-control" placeholder="Nombre de usuario">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Password(*)</label>
                                    <div class="col-md-9">
                                        <input type="password" v-model="password" class="form-control" placeholder="Password de acceso">
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
                usuario: '',
                password: '',
                idrole:0,
                arrayPersona : [],
                arrayRole : [],
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
            listarPersona(page, buscar, criterio){
                let me= this;
                var url='/user?page=' + page + '&buscar='+ buscar + '&criterio='+criterio;
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    me.arrayPersona = respuesta.personas.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error){
                     me.arrayPersona = error.data;
                })

            },
            selectRole(){
                let me= this;
                var url='/role/selectRole';
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    me.arrayRole = respuesta.roles;
                })
                .catch(function (error){
                     me.arrayRole = error.data;
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
                axios.post('/user/registrar', {
                    'nombre':this.nombre,
                    'tipo_documento': this.tipo_documento,
                    'num_documento':this.num_documento,
                    'direccion':this.direccion,
                    'telefono': this.telefono,
                    'email':this.email,
                    'usuario':this.usuario,
                    'password':this.password,
                    'idrole' : this.idrole
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
                    me.listarPersona(1,'', 'nombre');
                }).catch(function(error){
                    console.log(error);
                })
            },
            desactivarUsuario(id){

               swal({
                    title: 'Esta seguro de desactivar este usuario?',
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

                        axios.put('/user/desactivar',{
                            'id': id
                        }).then(function (response) {
                            me.listarPersona(1,'','nombre');
                            swal(
                            'Desactivado!',
                            'El registro ha sido desactivado con éxito.',
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
            activarUsuario(id){

               swal({
                    title: 'Esta seguro de activar este usuario?',
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

                        axios.put('/user/activar',{
                            'id': id
                        }).then(function (response) {
                            me.listarPersona(1,'','nombre');
                            swal(
                            'activado!',
                            'El registro ha sido activado con éxito.',
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
            validarPersona(){
                this.errorPersona=0;
                this.errorMostrarMsjPersona=[];

                if(!this.nombre) this.errorMostrarMsjPersona.push('El nombre no puede ir vacio');
                if(!this.usuario) this.errorMostrarMsjPersona.push('El nombre de usuario no puede ir vacio');
                if(!this.password) this.errorMostrarMsjPersona.push('El password no puede ir vacio');
                if(this.idrole ==0) this.errorMostrarMsjPersona.push('EDebes seleccionar un rol');
                if(this.errorMostrarMsjPersona.length) this.errorCliente = 1;

                return this.errorPersona;

            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.nombre='';
                this.tipo_documento='CC';
                this.num_documento = '';
                this.direccion = '';
                this.telefono = '';
                this.email = '';
                this.usuario='',
                this.password='',
                this.idrole = 0,
                this.errorPersona = 0;

            },
            abrirModal(modelo, accion, data = []){
                this.selectRole();
                switch(modelo){
                    case "persona":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Usuario';
                                this.nombre='';
                                this.tipo_documento='CC';
                                this.num_documento = '';
                                this.direccion = '';
                                this.telefono = '';
                                this.email = '';
                                this.usuario= '';
                                this.password='';
                                this.idrol=0;
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'actualizar':
                            {
                                this.modal=1;
                                this.tituloModal ='Actualizar Usuario';
                                this.tipoAccion = 2;
                                this.persona_id = data['id'];
                                this.nombre = data['nombre'];
                                this.tipo_documento = data['tipo_documento'];
                                this.num_documento = data['num_documento'];
                                this.direccion = data['direccion'];
                                this.telefono = data['telefono'];
                                this.email = data['email'];
                                this.usuario = data['usuario'];
                                this.password = data['password'];
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

