<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/css/estiloPropio.css" >
  <link rel="stylesheet" href="/css/login.css" >
  <link href="/css/bootstrap.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>FCE-UMSS</title>
</head>

<!--cabecera d la pagina-->
<header class="cabecera subhead" id="overview">
  <div class="container">
  <div class="row">
    <div class="d-none d-md-block col-md-2 col-lg-2">
    <img src=" /img/logo_umss.png" class="rounded float-left" width="90" height="100">
    </div>
    <div class="col-md-10 col-lg-8">
    <h1>TITULACIÓN FCE UMSS SAMTE</h1>
     <a class="navbar-brand" href="#"><p>Facultad de ciencias economicas</p></a>
    </div>
    <div class="d-none d-lg-block col-lg-2">
      <img src="/img/logoFCE.png" class="rounded float-right" width="110" height="90">
    </div>
  </div>
  </div>
</header>
<!--Cuerpo-->
<body>

<!--menu navegacion-->
<nav class="navbar navbar-expand-xl navbar-dark sticky-top" style="background-color: #161a45;">
  <a class="navbar-brand" href="#">LOGO</a>  
    <div class="collapse navbar-collapse" id="navbarsExample06">
      <ul class="navbar-nav mr-auto">
        @if (Auth::guest())
          <li class="nav-item">
            <a  class="nav-link" href="{{ route('usuarios.login') }}">LOGIN</a>
          </li>  
        @else
          <li  class="nav-intem">
              <a class="nav-link">{{ Auth::user()->apellidos.' '.Auth::user()->nombres }}</li>
              <a class="nav-link" href="{{ route('usuarios.logout') }}">SALIR</a>
          </li>
        @endif
      </ul>
    </div>
</nav> 

<div class="cuerpo">
<!--seccion a cambiar-->
  @yield('contenido')
<!--pie de pagina-->

</div>
<!-- Footer -->
<footer class=" footer text-center">
  <p>facultad de Ciencias Económicas</p>
        <p>Direccion calle Calama Este - Edificio Prototipo Fono: 591-4-4540261 Correo Electrónico: info@fce.umss.edu.bo Cochabamba - Bolivia</p>
</footer>

<!--scripts-->
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/dinamico.js"></script>

</body>
</html>


