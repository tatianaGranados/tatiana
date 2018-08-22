@extends('layout.master')
@section('contenido')
<div class="card">
	<div class="card-header card-header-primary text-center text-muted"><h5>LISTA BITACORA DE USUARIO</h5></div>
		<div class="card-body">
			<ul class="pagination justify-content-center">{{ $bitacoras->render("pagination::bootstrap-4") }}</ul>
			<table class="table table-sm table-hover table-bordered table-condensed table-striped table-responsive-lg">
				<thead class="text-center table-info">
					<tr class="table-primary text-center">
						<th>Nro</th>
						<th>TIPO OPERACIÓN</th>
						<th>DESCRICIÓN DE LA OPERACIÓN</th>
						<th>FECHA</th>
						<th>IP</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($bitacoras as $key=>$bitacora)
					<tr>
						<td class="text-center">{{ ++$key }}</td>
						<td>{{ $bitacora->operacion_bitacora}}</td>
						<td>{{ $bitacora->desc_operacion}}</td>
						<td class="text-center">{{$bitacora->fecha_bitacora}}</td>
						<td class="text-center">{{$bitacora->ip}}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<ul class="pagination justify-content-center">{{ $bitacoras->render("pagination::bootstrap-4") }}</ul>
		</div>
	</div>
</div>
@endsection
