<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de compras y ventas en Laravel">
    <meta name="author" content="jotaefe006@gmail.com">
    <meta name="keyword" content="Sistema de compras y ventas">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Sistema Ventas - Compras</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{  Auth::check() ? Auth::user()->id : ''}}">


    <!-- Icons -->
    <link href="css/plantilla.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-3.4.0.js"></script>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app" >
            <header class="app-header navbar">
                    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <ul class="nav navbar-nav ml-auto">
                        {{-- <notification :notifications="notifications"></notification> --}}
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header text-center">
                                    <strong>Cuenta</strong>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-lock"></i> Cerrar sesión</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-md-down-none">{{Auth::user()->usuario}} </span>
                                <img src="img/avatars/engranajes.png" class="img-avatar" alt="cerrar sesión">

                            </a>

                        </li>
                    </ul>
                </header>

    <div class="app-body">
        @if(Auth::check())
            @if(Auth::user()->idrole == 1)
                @include('plantilla.sidebaradministrador')
            @elseif(Auth::user()->idrole == 2)
                @include('plantilla.sidebarvendedor')
            @elseif(Auth::user()->idrole == 3)
                @include('plantilla.sidebaralmacenero')
            @endIf
        @endIf

        {{-- @include('plantilla.sidebar') --}}

        <!-- Contenido Principal -->
        @yield('contenido')
        <!-- /Fin del contenido principal -->
    </div>
    </div>
    <footer class="app-footer">
        <span><a href="http://www.incanatoit.com/">Labs28</a> &copy; 2019</span>
        <span class="ml-auto">Desarrollado por <a href="#">Labs28</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="js/app.js"></script>
    <script src="js/plantilla.js"></script>

</body>

</html>
