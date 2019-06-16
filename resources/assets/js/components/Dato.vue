<template>
    <main class="main">
         <!-- Breadcrumb -->
            <ol class="breadcrumb">

                <li class="breadcrumb-item titulo-1"><a href="/">Escritorio</a></li>

            </ol>
            <div class="animated fade-in">
                <div class="row justify-content-center ">
                    <div class="col-md-8">
                        <div class="card" v-for="dato in datos" :key="dato.id">
                            <div class="card-header">
                                <strong>Mi información</strong>
                            </div>
                            <div class="card-body"  >
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="ni-nombre">Nombre</label>
                                        <input class="form-control bg-g"  v-model="dato.nombre" id="ni-nombre" readonly type="text" name="ni-nombre">

                                    </div>
                                    <div class="form-group">
                                        <label for="nf-telefono">Teléfono</label>
                                        <input class="form-control bg-g"  v-model="dato.telefono" readonly id="nf-telefono" type="text" name="nf-telefono" >
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-celular">Celular</label>
                                        <input class="form-control bg-g" v-model="dato.celular" readonly  id="nf-celular" type="text" name="nf-celular" >
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-direccion">Dirección</label>
                                        <input class="form-control bg-g" v-model="dato.direccion" readonly  id="nf-direccion" type="text" name="nf-direccion">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-correo">Correo electrónico</label>
                                        <input class="form-control bg-g" v-model="dato.email" readonly  id="nf-correo" type="text" name="nf-correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-ciudad">Ciudad</label>
                                        <input class="form-control bg-g" v-model="dato.ciudad" readonly  id="nf-ciudad" type="text" name="nf-ciudad">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-pais">Pais</label>
                                        <input class="form-control bg-g" v-model="dato.pais" readonly  id="nf-pais" type="text" name="nf-pais">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                 <button type="button" @click="abrirModal('dato', 'actualizar',dato)" class="btn btn-warning btn-sm" >
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <input type="text" v-model="nombre" class="form-control" placeholder="Nombre de la empresa">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Teléfono</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="telefono" class="form-control" placeholder="Teléfono">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Celular</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="celular" class="form-control" placeholder="Celular">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Dirección</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="direccion" class="form-control" placeholder="Dirección">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Correo Electrónico</label>
                                    <div class="col-md-9">
                                        <input type="email" v-model="email" class="form-control" placeholder="Correo Electrónico">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Ciudad</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="ciudad" class="form-control" placeholder="Ciudad">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Pais</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="pais" class="form-control" placeholder="Pais">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" @click="cerrarModal()" class="btn btn-secondary" >Cerrar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarInformacion()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
    </main>
</template>

<script>
    import vSelect from 'vue-select';
    export default {
        data (){
            return {
                datos: [],
                dato_id : 0,
                nombre: '',
                telefono: '',
                email: '',
                celular: '',
                direccion: '',
                ciudad:'',
                pais: '',
                modal : 0,
                tituloModal : '',
                tipoAccion: 1,
                errorInformacion:0,
                errorMostrarMsjInformacion:[],

            }
        },
        components: {
            vSelect
        },
        methods : {
            getInfo(){

                let me=this;
                var url= '/informacion';
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.datos = respuesta.datos;
                    console.log(datos);
                })

                .catch(function (error) {
                    console.log(error);
                });
                //
                // this.nombre = me.datos[0].nombre;
                // console.log('*********');
                // console.log('nombre', this.nombre);
            },
            abrirModal(modelo, accion, data = []){

                console.log('aa');

                 switch(modelo){
                    case "dato":
                    {
                        switch(accion){
                            case 'actualizar':
                            {
                                this.modal=1;
                                this.tituloModal ='Actualizar Información';
                                this.dato_id = data['id'],
                                this.tipoAccion = 2;
                                this.nombre = data['nombre'];
                                this.direccion = data['direccion'];
                                this.telefono = data['telefono'];
                                this.email = data['email'];
                                this.ciudad = data['ciudad'];
                                this.pais = data['pais'];
                                this.celular = data['celular'];
                                break;
                            }
                        }
                    }
                }
            },
            cerrarModal(){
                this.modal=0;
            },
            actualizarInformacion(){
                if(this.validarInformacion()){
                    return;
                }

                console.log('siiiiiiiiiiiiiiiiiiiiiii');

                let me = this;
                let x = this.nombre;
                console.log(x);
                axios.put('/informacion/actualizar', {
                    'nombre':this.nombre,
                    'id':this.dato_id,
                    'direccion':this.direccion,
                    'telefono': this.telefono,
                    'celular':this.celular,
                    'ciudad': this.ciudad,
                    'pais': this.pais,
                    'email':this.email

                }).then(function (response){

                }).then(function(){
                    me.cerrarModal();
                    me.getInfo();
                }).catch(function(error){
                    console.log(error);
                })

            },
            validarInformacion(){
                this.errorInformacion=0;
                this.errorMostrarMsjInformacion=[];

                if(!this.nombre) this.errorMostrarMsjInformacion.push('El nombre no puede ir vacio');
                if(this.errorMostrarMsjInformacion.length) this.errorInformacion = 1;

                return this.errorInformacion;

            },
        },
        mounted() {
            this.getInfo();
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
