<html>
	<head>
		<meta charset="utf-8">
		<title>Designacion Tribunal</title>
		<link rel="stylesheet" type="text/css" href="css/carta.css">
	</head>
	<body class="bodyBody">
		<div class="divReturnAddress">
			
			Cochabamba {{ $fecha }}<br/>
			CICA - as12-23-j232-23<br/>
			<br/>
		</div>
		<div class="divName">

			Señor(a):<br/>
			@foreach($tribunales as $tribunal)
			{{ $tribunal->titlo_abreviado }} {{ $tribunal->nombreCompleto }}<br/>
			@endforeach
			<strong>DOCENTE DE LA FACULTAD</strong> <br/>
			Presente.-<br/>
		   
		</div>

		<div class="divSubject">
			<u>REF: DESIGNACIÓN TRIBUNAL DE DEFENSA</u>
		</div>

		<div class="divContents">
			<p align="justify" class="divSaludo">
				De mi consideración:
			</p>

			<p align="justify">
				Me permito comunicarle que ha sido designado  miembro del tribunal calificador del <strong>{{$usuario->nombre_modalidad}}</strong> denominado <strong >{{$usuario->titulo_defensa }}</strong> presentado por 
				@if($usuario->sexo="femenino" or $usuario->sexo="f")
				la alumna
				@else
				el alumno 
				@endif
				<strong>{{ $usuario->nombreCompleto }}</strong> de la carrera de {{ $usuario->nombre_plan }}.
			</p>
			<p align="justify">
				En este sentido, le solicito hacer llegar su informe de aprobación o suficiencia en un plazo no mayor a los 45 dias calendario, segun reglamento especifico para esta modalidad.
			</p>
			<p align="justify">
			Con este motivo, presento a usted las consideraciones de mi distincion personal.
			</p>
		</div>

		<div class="divAdios">
			<br/>
			<br/>
			<br/>
			Adjunto lo indicado<br/>
			Cc. Arch <br/>
		</div>
	</body>
</html>
