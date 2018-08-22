<html>
	<head>
		<meta charset="utf-8">
		<title>Primer Recordatorio</title>
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
			<u>REF.: NOTIFICACIÓN DE DEFENSA</u>
		</div>

		<div class="divContents">
			<p align="justify" class="divSaludo">
				De mi consideración:
			</p>

			<p align="justify">
				Por la presente, comunico a usted que al haber cumplido con los requisitos exigidos por el reglamento correspondiente, el dia <strong>{{ $usuario->fecha_defensa }}</strong> a horas <strong>{{ $usuario->hora_defensa }}</strong> se llevara a cabo la defensa y calificacion del <strong>{{$usuario->nombre_modalidad}}</strong> denominado <strong>{{$usuario->titulo_defensa }}</strong> presentada por: <strong>{{ $usuario->nombreCompleto }}</strong>.
			</p>
			<p align="justify">
				En este sentido, me permito solicitar su asistencia puntual a dicho acto, en virtud a que su persona es Miembro Tribunal Calificador.
			</p>
			<p align="justify">
			Con este motivo, saludo a usted con las consideraciones más distinguidas.
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
