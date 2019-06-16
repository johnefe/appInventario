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
                        <i class="fa fa-align-justify"></i> Roles
                        <!-- <button type="button" @click="abrirModal('categoria', 'registrar')" class="btn btn-secondary" >
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button> -->
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio" >
                                      <option value="nombre">Nombre</option>
                                      <option value="descripcion">Descripción</option>
                                    </select>
                                    <input type="text" v-model="buscar"  @keyup.enter="listarRole(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" @click="listarRole(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <!-- <th>Opciones</th> -->
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="role in arrayRole" :key="role.id">
                                    <!-- <td>
                                        <button type="button" @click="abrirModal('categoria', 'actualizar',categoria)" class="btn btn-warning btn-sm" >
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <template v-if="categoria.condicion">
                                            <button type="button" @click="desactivarCategoria(categoria.id)" class="btn btn-danger btn-sm">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </template>
                                        <template v-else>
                                            <button type="button" @click="activarCategoria(categoria.id)" class="btn btn-success btn-sm">
                                                <i class="icon-check"></i>
                                            </button>
                                        </template>

                                    </td> -->
                                    <td v-text="role.nombre"></td>
                                    <td v-text="role.descripcion"></td>
                                    <td>
                                        <div v-if="role.condicion">
                                            <span class="badge badge-success">Activo</span>
                                        </div>
                                        <div v-else>
                                            <span class="badge badge-danger">Desactivado</span>
                                        </div>

                                    </td>
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
            <!-- <div class="modal fade"  tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
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
                                        <input type="text" v-model="nombre" class="form-control" placeholder="Nombre de categoría">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                                    <div class="col-md-9">
                                        <input type="email" v-model="descripcion" class="form-control" placeholder="Ingrese descripción">
                                    </div>
                                </div>
                                <div v-show="errorCategoria" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjCategoria" :key="error" v-text="error">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" @click="cerrarModal()" class="btn btn-secondary" >Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarCategoria()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarCategoria()">Actualizar</button>
                        </div>
                    </div>

                </div>

            </div> -->
            <!--Fin del modal-->
            <!-- Inicio del modal Eliminar -->
            <!-- <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Categoría</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Estas seguro de eliminar la categoría?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>

                </div>

            </div> -->
            <!-- Fin del modal Eliminar -->

        </main>
</template>

<script>
    export default {
        data (){
            return {
                role_id : 0,
                nombre : '',
                descripcion : '',
                arrayRole : [],
                modal : 0,
                tituloModal : '',
                tipoAccion: 1,
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
            listarRole(page, buscar, criterio){
                let me= this;
                var url='/role?page=' + page + '&buscar='+ buscar + '&criterio='+criterio;
                axios.get(url).then(function (response){
                    var respuesta = response.data;
                    me.arrayRole = respuesta.roles.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error){
                     me.arrayCategoria = error.data;
                })

            },
            cambiarPagina(page, buscar, criterio){
                let me = this;
                //actualiza la pagina actual
                me.pagination.current_page = page;
                me.listarRole(page, buscar, criterio);
            },
            // registrarCategoria(){

            //     if(this.validarCategoria()){
            //         return;
            //     }
            //     let me = this;
            //     axios.post('/categoria/registrar', {'nombre':this.nombre,'descripcion': this.descripcion}).then(function (response){

            //     }).then(function(){
            //         me.cerrarModal();
            //         me.listarCategoria(1,'', 'nombre');
            //     }).catch(function(error){
            //         console.log(error);
            //     })
            // },
            // actualizarCategoria(){
            //     if(this.validarCategoria()){
            //         return;
            //     }
            //     let me = this;
            //     axios.put('/categoria/actualizar', {'nombre':this.nombre,'descripcion': this.descripcion, 'id':this.categoria_id}).then(function (response){

            //     }).then(function(){
            //         me.cerrarModal();
            //         me.listarCategoria(1,'', 'nombre');
            //     }).catch(function(error){
            //         console.log(error);
            //     })
            // },
            // desactivarCategoria(id){

            //    swal({
            //         title: 'Esta seguro de desactivar esta categorí­a?',
            //         type: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Aceptar!',
            //         cancelButtonText: 'Cancelar',
            //         confirmButtonClass: 'btn btn-success',
            //         cancelButtonClass: 'btn btn-danger',
            //         buttonsStyling: false,
            //         reverseButtons: true
            //         }).then((result) => {
            //         if (result.value) {
            //             let me = this;

            //             axios.put('/categoria/desactivar',{
            //                 'id': id
            //             }).then(function (response) {
            //                 me.listarCategoria(1,'','nombre');
            //                 swal(
            //                 'Desactivado!',
            //                 'El registro ha sido desactivado con éxito.',
            //                 'success'
            //                 )
            //             }).catch(function (error) {
            //                 console.log(error);
            //             });


            //     } else if (
            //         // Read more about handling dismissals
            //         result.dismiss === swal.DismissReason.cancel
            //     ) {

            //     }
            //     })

            // },
            // activarCategoria(id){

            //    swal({
            //         title: 'Esta seguro de activar esta categorí­a?',
            //         type: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Aceptar!',
            //         cancelButtonText: 'Cancelar',
            //         confirmButtonClass: 'btn btn-success',
            //         cancelButtonClass: 'btn btn-danger',
            //         buttonsStyling: false,
            //         reverseButtons: true
            //         }).then((result) => {
            //         if (result.value) {
            //             let me = this;

            //             axios.put('/categoria/activar',{
            //                 'id': id
            //             }).then(function (response) {
            //                 me.listarCategoria(1,'','nombre');
            //                 swal(
            //                 'activado!',
            //                 'El registro ha sido activado con éxito.',
            //                 'success'
            //                 )
            //             }).catch(function (error) {
            //                 console.log(error);
            //             });


            //     } else if (
            //         // Read more about handling dismissals
            //         result.dismiss === swal.DismissReason.cancel
            //     ) {

            //     }
            //     })

            // },

            // validarCategoria(){
            //     this.errorCategoria=0;
            //     this.errorMostrarMsjCategoria=[];

            //     if(!this.nombre) this.errorMostrarMsjCategoria.push('El nombre no puede ir vacio');
            //     if(this.errorMostrarMsjCategoria.length) this.errorCategoria = 1;

            //     return this.errorCategoria;

            // },
            // cerrarModal(){
            //     this.modal=0;
            //     this.tituloModal='';
            //     this.nombre='';
            //     this.descripcion='';
            // },
            // abrirModal(modelo, accion, data = []){
            //     switch(modelo){
            //         case "categoria":
            //         {
            //             switch(accion){
            //                 case 'registrar':
            //                 {
            //                     this.modal = 1;
            //                     this.tituloModal = 'Registrar Categoria';
            //                     this.nombre = '';
            //                     this.descripcion = '';
            //                     this.tipoAccion = 1;
            //                     break;
            //                 }
            //                 case 'actualizar':
            //                 {
            //                     this.modal=1;
            //                     this.tituloModal ='Actualizar categoría';
            //                     this.tipoAccion = 2;
            //                     this.categoria_id = data['id'];
            //                     this.nombre = data['nombre'];
            //                     this.descripcion = data['descripcion'];
            //                     break;
            //                 }
            //             }
            //         }
            //     }
            // }
        },
        mounted() {
            this.listarRole(1,this.buscar, this.criterio);
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

