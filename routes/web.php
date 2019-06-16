<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['guest']], function () {

    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('/', 'Auth\LoginController@login')->name('login');

});


Route::group(['middleware' => ['auth']], function () {

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/dashboard', 'DashboardController');

    //notificaciones
    Route::post('/notification/get', 'NotificationController@get');

    Route::get('/main', function () { return view('contenido/contenido'); })->name('main');

    Route::group(['middleware' => ['Almacenero']], function () {
        /**
         * rutas categorias
         */
        Route::get('/categoria', 'CategoriaController@index');
        Route::post('/categoria/registrar','CategoriaController@store' );
        Route::put('/categoria/actualizar','CategoriaController@update' );
        Route::put('/categoria/desactivar','CategoriaController@desactivar' );
        Route::put('/categoria/activar','CategoriaController@activar' );
        Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria');
        Route::get('/categoria/listarPdf', 'CategoriaController@listarPdf')->name('categorias_pdf');

        /**
         * rutas articulos
         */
        Route::get('/articulo', 'ArticuloController@index');
        Route::post('/articulo/registrar','ArticuloController@store' );
        Route::put('/articulo/actualizar','ArticuloController@update' );
        Route::put('/articulo/desactivar','ArticuloController@desactivar' );
        Route::put('/articulo/activar','ArticuloController@activar' );
        Route::get('/articulo/buscarArticulo', 'ArticuloController@buscarArticulo');
        Route::get('/articulo/listarArticulo', 'ArticuloController@listarArticulo');
        Route::get('/articulo/listarPdf', 'ArticuloController@listarPdf')->name('articulos_pdf');


        /**
         * rutas proveedor
         */
        Route::get('/proveedor', 'ProveedorController@index');
        Route::post('/proveedor/registrar','ProveedorController@store' );
        Route::put('/proveedor/actualizar','ProveedorController@update' );
        Route::get('/proveedor/selectProveedor', 'ProveedorController@selectProveedor');
        Route::get('/proveedor/listarPdf', 'ProveedorController@listarPdf')->name('proveedores_pdf');

        /**
         * rutas ingresos
         */
        Route::get('/ingreso', 'IngresoController@index');
        Route::post('/ingreso/registrar','IngresoController@store' );
        Route::put('/ingreso/desactivar','IngresoController@desactivar' );
        Route::get('/ingreso/obtenerCabecera', 'IngresoController@obtenerCabecera');
        Route::get('/ingreso/obtenerDetalles', 'IngresoController@obtenerDetalles');
        Route::get('/ingreso/listarPdf', 'IngresoController@listarPdf')->name('ingresos_pdf');
        Route::get('/ingreso/BuscarUltimoIngreso', 'IngresoController@obtenerUltimoRegistroIngreso');


     });
    Route::group(['middleware' => ['Vendedor']], function () {

        /**
         * rutas clientes
         */
        Route::get('/cliente', 'ClienteController@index');
        Route::post('/cliente/registrar','ClienteController@store' );
        Route::put('/cliente/actualizar','ClienteController@update' );
        Route::get('/cliente/selectCliente', 'ClienteController@selectCliente');
        Route::get('/cliente/listarPdf', 'ClienteController@listarPdf')->name('clientes_pdf');

        Route::get('/articulo/buscarArticuloVenta', 'ArticuloController@buscarArticuloVenta');
        Route::get('/articulo/listarArticuloVenta', 'ArticuloController@listarArticuloVenta');

         /**
         * rutas ventas
         */
        Route::get('/venta', 'VentaController@index');
        Route::post('/venta/registrar','VentaController@store' );
        Route::put('/venta/desactivar','VentaController@desactivar' );
        Route::get('/venta/obtenerCabecera', 'VentaController@obtenerCabecera');
        Route::get('/venta/obtenerDetalles', 'VentaController@obtenerDetalles');
        Route::get('/venta/pdf/{id}', 'VentaController@pdf')->name('venta_pdf');
        Route::get('venta/BuscarUltimaVenta', 'VentaController@obtenerUltimoRegistroVenta');

    });
    Route::group(['middleware' => ['Administrador']], function () {

        /**
         * ruta para obtener información de la empresa
         */

        Route::get('/informacion', 'DatoController@index');
        Route::put('/informacion/actualizar', 'DatoController@update');

        /**
         * rutas categorias
         */
        Route::get('/categoria', 'CategoriaController@index');
        Route::post('/categoria/registrar','CategoriaController@store' );
        Route::put('/categoria/actualizar','CategoriaController@update' );
        Route::put('/categoria/desactivar','CategoriaController@desactivar' );
        Route::put('/categoria/activar','CategoriaController@activar' );
        Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria');
        Route::get('/categoria/listarPdf', 'CategoriaController@listarPdf')->name('categorias_pdf');

        /**
         * rutas articulos
         */
        Route::get('/articulo', 'ArticuloController@index');
        Route::post('/articulo/registrar','ArticuloController@store' );
        Route::put('/articulo/actualizar','ArticuloController@update' );
        Route::put('/articulo/desactivar','ArticuloController@desactivar' );
        Route::put('/articulo/activar','ArticuloController@activar' );
        Route::get('/articulo/buscarArticulo', 'ArticuloController@buscarArticulo');
        Route::get('/articulo/buscarArticuloVenta', 'ArticuloController@buscarArticuloVenta');
        Route::get('/articulo/listarArticulo', 'ArticuloController@listarArticulo');
        Route::get('/articulo/listarArticuloVenta', 'ArticuloController@listarArticuloVenta');
        Route::get('/articulo/listarPdf', 'ArticuloController@listarPdf')->name('articulos_pdf');

        /**
         * rutas proveedor
         */
        Route::get('/proveedor', 'ProveedorController@index');
        Route::post('/proveedor/registrar','ProveedorController@store' );
        Route::put('/proveedor/actualizar','ProveedorController@update' );
        Route::get('/proveedor/selectProveedor', 'ProveedorController@selectProveedor');
        Route::get('/proveedor/listarPdf', 'ProveedorController@listarPdf')->name('proveedores_pdf');
        /**
         * rutas clientes
         */
        Route::get('/cliente', 'ClienteController@index');
        Route::post('/cliente/registrar','ClienteController@store' );
        Route::put('/cliente/actualizar','ClienteController@update' );
        Route::get('/cliente/selectCliente', 'ClienteController@selectCliente');
        Route::get('/cliente/listarPdf', 'ClienteController@listarPdf')->name('clientes_pdf');


        /**
         * rutas roles
         */
        Route::get('/role', 'RoleController@index');
        Route::post('/role/registrar','RoleController@store' );
        Route::get('/role/selectRole', 'RoleController@selectRole');

        /**
         * rutas roles
         */
        Route::get('/user', 'UserController@index');
        Route::post('/user/registrar','UserController@store' );
        Route::put('/user/actualizar','UserController@update' );
        Route::put('/user/desactivar','UserController@desactivar' );
        Route::put('/user/activar','UserController@activar' );

        /**
         * rutas ingresos
         */
        Route::get('/ingreso', 'IngresoController@index');
        Route::post('/ingreso/registrar','IngresoController@store' );
        Route::put('/ingreso/desactivar','IngresoController@desactivar' );
        Route::get('/ingreso/obtenerCabecera', 'IngresoController@obtenerCabecera');
        Route::get('/ingreso/obtenerDetalles', 'IngresoController@obtenerDetalles');
        Route::get('/ingreso/listarPdf', 'IngresoController@listarPdf')->name('ingresos_pdf');
        Route::get('/ingreso/BuscarUltimoIngreso', 'IngresoController@obtenerUltimoRegistroIngreso');

        /**
         * rutas ventas
         */
        Route::get('/venta', 'VentaController@index');
        Route::post('/venta/registrar','VentaController@store' );
        Route::put('/venta/desactivar','VentaController@desactivar' );
        Route::get('/venta/obtenerCabecera', 'VentaController@obtenerCabecera');
        Route::get('/venta/obtenerDetalles', 'VentaController@obtenerDetalles');
        Route::get('/venta/pdf/{id}', 'VentaController@pdf')->name('venta_pdf');
        Route::get('/venta/BuscarUltimaVenta', 'VentaController@obtenerUltimoRegistroVenta');
        //Auth::routes();
    });


});

//Route::get('/home', 'HomeController@index')->name('home');
