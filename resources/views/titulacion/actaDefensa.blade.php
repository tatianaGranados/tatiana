<html>
	<head>
		<meta charset="utf-8">
		<title>Acta de Defensa</title>
		<link rel="stylesheet" type="text/css" href="css/testimonio.css">
		
	</head>
	<body class="bodyBody">
		<div class="divReturnAddress">
			FOLIO
		</div>
		<div class="divSubject">
			ACTA DE DEFENSA Y CALIFICACIÓN DEL<br/>
			<strong>{{$usuario->nombre_modalidad}}</strong>
		</div>

		<div class="divContents">
			
			<p align="justify">
				En la ciudad de Cochabamba, en la Facultad de Ciencias Económicas, el dia viernes, 13 de enero del 2017, a horas 17:00, se señalo la defensa y calificación del <strong>{{$usuario->nombre_modalidad}}</strong>presentado por
				@if($usuario->sexo="femenino" or $usuario->sexo="f")
				la postulante:
				@else
				el postulante:
				@endif
				<strong>{{ $usuario->nombreCompleto }}</strong> bajo el título <strong>{{$usuario->titulo_defensa }}</strong> para optar el Diploma Académico de <strong>{{ $usuario->nombre_plan }}</strong>.
			</p>
			<p align="justify">
				Constituido el tribunal presidido por el
				 @foreach($presidentes as $presidente)
				{{ $presidente->nombreCompleto }}
				@endforeach
				 Director de la Carrera de {{ $usuario->nombre_plan }} e integrado por los Docentes:
				@foreach($tribunales as $tribunal)
					{{ $tribunal->titlo_abreviado }} {{ $tribunal->nombreCompleto }}
				@endforeach
			</p>
			<p align="justify">
			Previa lectura de antecedentes, el Presidente de Tribunal concedió el uso de la palabra a la postulante, quién hizo una relación de su Trabajo de referencia. Seguidamente los integrantes del Tribunal formularon preguntas relativas al trabajo, las cuales fueron absueltas por el Postulante.
			</p>
			<p align="justify">
			Concluida la exposición y Defensa, el Tribunal acordó conferir la calificación de {{$usuario->nota }},nota con la que fue ....... de conformidad con el Reglamento de Licenciatura en actual vigencia.
			</p>
			<p align="justify">
			A continuación, el Presidente del Tribunal tomó el juramento de ley al Postulante, con lo que concluyo el acto. Firman los miembros del Tribunal. 
			</p>
		
		</div>

		<div class="divSubject">
			Cochabamba, {{ $fecha }}
		</div>

		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
		<table class="table table-borderless">
			<thead class="text-center">
				<tr>
					<th>Firma 1</th>
					<th>Firma 2</th>
				</tr>
			</thead>
			<tbody class="text-center">
				<tr>
					<td>Firma 3</td>
					<td>Firma 4</td>
				</tr>
			</tbody>

		</table>
	
	   
	</body>
</html>