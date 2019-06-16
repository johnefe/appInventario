    @extends('principal')
    @section('contenido')
    @if(Auth::check())
        @if(Auth::user()->idrole == 1)
            <template v-if="menu==0">
                <dashboard></dashboard>
            </template>
            <template v-if="menu==1">
                <categoria></categoria>
            </template>
            <template v-if="menu==2">
                <articulo></articulo>
            </template>
            <template v-if="menu==3">
                <ingreso></ingreso>
            </template>
            <template v-if="menu==4">
                <proveedor></proveedor>
            </template>
            <template v-if="menu==5">
                <venta></venta>
            </template>
            <template v-if="menu==6">
                <cliente></cliente>
            </template>
            <template v-if="menu==7">
                <user></user>
            </template>
            <template v-if="menu==8">
                <role></role>
            </template>
            <template v-if="menu==9">
                <consultaingreso></consultaingreso>
            </template>
            <template v-if="menu==10">
                <consultaventa></consultaventa>
            </template>
            <template v-if="menu==11">
                <dato></dato>
            </template>

        @elseif(Auth::user()->idrole == 2)
            <template v-if="menu==5">
                <venta></venta>
            </template>
            <template v-if="menu==6">
                <cliente></cliente>
            </template>
            <template v-if="menu==10">
                    <consultaventa></consultaventa>
            </template>
        @elseif(Auth::user()->idrole == 3)
            <template v-if="menu==1">
                <categoria></categoria>
            </template>
            <template v-if="menu==2">
                <articulo></articulo>
            </template>
            <template v-if="menu==3">
                <ingreso></ingreso>
            </template>
            <template v-if="menu==4">
                <proveedor></proveedor>
            </template>
            <template v-if="menu==9">
                <consultaIngreso></consultaIngreso>
            </template>

        @endIf
    @endIf

@endsection
