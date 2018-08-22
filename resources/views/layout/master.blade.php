<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
	{{-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,shrink-to-fit=no, minimum-scale=1.0"> --}}
	
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/font-awesome.css" rel="stylesheet">
	<link href="/css/material-kit.css" rel="stylesheet">
	<link href="/css/estiloPropio.css" rel="stylesheet">
	<link href="/css/dashboard.css" rel="stylesheet">
	{{-- <<<<<<< HEAD --}}
	<link href="/css/navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
	{{-- ======= --}}
	<link href="/css/toastr.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
	<title>FCE-UMSS</title>
</head>
<body>
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
	<!--menu navegaciones-->
	@include('layout.navegacion')
	<div class="col-sm-9 col-md-10">
			@yield('contenido')
	</div>
	</div>
	</div>
	<!--pie de pagina-->
	<footer class="footer" style="margin-top: 196px;">
		<p>facultad de Ciencias Económicas</p>
		<p>Direccion calle Calama Este - Edificio Prototipo </p>
		<p>Fono: 591-4-4540261 Correo Electrónico: info@fce.umss.edu.bo Cochabamba - Bolivia</p>
	</footer>
	<script src="/js/jquery-3.2.1.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/toastr.js"></script>
	<script src="/js/modal.js"></script>
	<script src="/js/modalProfesional.js"></script>
	<script src="/js/dinamico.js"></script>
	<script src="/js/numeroAletra.js"></script>
	<script src="/js/cargar.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
	<!--scripts-->
	{{-- <<<<<<< HEAD --}}
	{{-- <script src="/js/jquery.js"></script> --}}
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/datepicker-es.js"></script>
	<script src="/js/prueba.js"></script>
	<script src="/js/liz.js"></script>
	
	@yield('script')
		<script>
		@if(\Session::has('mensaje3'))
			var type="{{ session::get('alert-type','info') }}"
		switch(type){
		  case 'info':
			  toastr.info("{{\session::get('mensaje3')}}");
			  break;
		  case 'success':
			  toastr.success("{{\session::get('mensaje3')}}");
			  break;
		  case 'warning':
			  toastr.warning("{{\session::get('mensaje3')}}");
			  break;
		  case 'error':
			  toastr.error("{{\session::get('mensaje3')}}");
			  break;
		}
		@endif
		</script>
	
	{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

 --}}



</body>

</html>
