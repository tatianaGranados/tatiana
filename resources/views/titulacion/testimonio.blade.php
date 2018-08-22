<html>
	<head>
		<meta charset="utf-8">
		<title>Testimonio</title>
		<link rel="stylesheet" type="text/css" href="css/testimonio.css">
	</head>
	<body class="bodyBody">
		
		<div class="divSubject">
			TESTIMONIO<br/>
			ACTA DE DEFENSA Y CALIFICACION DEL <strong>{{$usuario->nombre_modalidad}}</strong>
		</div>

		<div class="divContents">
			
			<p align="justify">
				En la ciudad de Cochabamba, en la Facultad de Ciencias Económicas, el dia viernes, 13 de enero del 2017, a horas 17:00, se señalo la defensa y calificación del <strong>{{$usuario->nombre_modalidad}}</strong> presentado por el postulante: <strong>{{ $usuario->nombreCompleto }}</strong> bajo el título <strong>{{$usuario->titulo_defensa }}</strong> para optar el Diploma Académico de <strong>{{ $usuario->nombre_plan }}</strong>.
			</p>
			<p align="justify">
				Constituido el tribunal presidido por el Mgr. .......... Director de la Carrera de Economía e itegrado por los Docentes:
				@foreach($tribunales as $tribunal)
					{{ $tribunal->titlo_abreviado }} {{ $tribunal->nombreCompleto }}
				@endforeach
			<p align="justify">
			Previa lectura de antecedentes, el Presidente de Tribunal concedió el uso de la palabra a la postulante, quién hizo una relación de su Trabajo de referencia. Seguidamente los integrantes del Tribunal formularon preguntas relativas al trabajo, las cuales fueron absueltas por el Postulante.
			</p>
			<p align="justify">
			Concluida la exposición y Defensa, el Tribunal acordó conferir la calificación de {{$usuario->nota }},nota con la que fue ....... de conformidad con el Reglamento de Licenciatura en actual vigencia.
			</p>
			<p align="justify">
			A continuación, el Presidente del Tribunal tomó el juramento de ley al Postulante, con lo que concluyo el acto. Firman los miembros del Tribunal. 
			</p>
			<p align="justify">
			El presente Testimonio es copia fiel del original <strong>FOLIO</strong> al que en su caso remito.
			</p>
		</div>

		<div class="divSubject">
			Cochabamba, 06 de junio del 2017
		</div>
	</body>
</html>
