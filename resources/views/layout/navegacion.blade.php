@if (Auth::guest())
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LOGO</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('usuarios.login') }}">LOGIN<span class="sr-only">(current)</span></a>
            </li>     
        </ul>
    </nav>
@else
    <nav class="navbar navbar-expand-xl navbar-dark sticky-top" style="background-color: #161a45;">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExample06">
            <ul class="navbar-nav mr-auto">
                @foreach($acceso as $accesos)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{ $accesos->nombre_acceso }}</a>
                        <div class="dropdown-menu">
                            @foreach($subAccesosUsuario as $subAccesos)
                                @if($subAccesos->id_acceso == $accesos->id)
                                    <a class="dropdown-item" href="{{ route($subAccesos->ruta_sub_acceso) }}">{{ $subAccesos->nombre_sub_acceso }}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>
             
            <div class="form-inline my-2 my-md-0">
                <ul class="navbar-nav mr-auto">      
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">{{ Auth::user()->nombre_completo }}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('usuarios.perfil') }}">Perfil Usuario</a>
                            <a class="dropdown-item" href="{{ route('usuarios.loginModificar') }}">Modificar Login</a>
                            <a class="dropdown-item" href="{{ route('usuarios.contrasenaModificar') }}">Modificar Contraseña</a>
                            <a class="dropdown-item" href="{{ route('usuarios.bitacora') }}">Bitacora de usuario</a>
                            <a class="dropdown-item" href="{{ route('usuarios.logout') }}">Salir del Sistema</a>
                            
                        </div>          
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light" style="background-color: #e6e7f7;">
                <ul class="nav nav-pills flex-column">
                    @foreach($subAccesosUsuario as $subAccesos)
                        <li class="nav-item">
                            @if($subAccesos->id_acceso == $accesos->id)
                                <a class="nav-link" href="{{ route($subAccesos->ruta_sub_acceso) }}">{{ $subAccesos->nombre_sub_acceso }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <a class="dropdown-item" href="#">{{ $usuarioLogueado->funcion->nombre_funcion }}hola</a>
                <a class="dropdown-item" href="#">{{ $usuarioLogueado->unidad->nombre_unidad     }}hola</a>
            </nav>
@endif
{{-- @foreach($usuarioLogueado->funcion as $pru)
    $pru->nombre_funcion
@endforeach --}}
