@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>LISTA DE TODA LAS GESTIONES</h5>
			</div>
			<div class="card-body">
				<h2><a href="{{ URL::to('gestiones/create') }}" role="button" class="btn btn-success"><i class="fa fa-plus"></i> CREAR NUEVA GESTIÓN</a></h2>
				<div class="table-responsive">  
					<table  class="table table-sm table-condensed table-striped table-bordered">
						<thead>
							<tr class="text-center table-info">
								<th class="text-center">Nro</th>
								<th class="text-center">NOMBRE ROL</th>
								<th class="text-center">FECHA INICIO</th>
								<th class="text-center">FECHA FIN</th>
								<th class="text-center">ACTIVO</th>
								<th class="text-center">MODIFICAR</th>
								<th class="text-center">ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($gestiones as $key=>$gestion)
							<tr>
								<td class="text-center">{{ ++$key }}</td>
								{{-- <td>{{ $gestion }}</td> --}}
								<td>{{ $gestion->anioGestionTipo }}</td>
								<td>{{ $gestion->fecha_inicio }}</td>
								<td>{{ $gestion->fecha_fin }}</td>
								<td class="text-center">{{ $gestion->activo }}
								@if($gestion->activo=='SI')
		                			<a href="{{ route('gestiones.modActivo',$gestion->id)}}" class="btn btn-danger btn-responsive btn-sm" role="button"> Desactivar</a>
		       					@else
									<a href="{{ route('gestiones.modActivo',$gestion->id)}}" class="btn btn-success btn-responsive btn-sm" role="button">Activar</a>
		      					@endif </td>

								<td class="text-center"><a href="{{ route('gestiones.edit', $gestion->id) }}" class="btn btn-success glyphicon glyphicon-edit" role="button"><i class="fa fa-pencil-square-o"></i> Modificar</a></td>
								<td class="text-center">
									{!! Form::open(array('route' =>array('gestiones.destroy',$gestion->id),'method'=>'delete')) !!}
										{{ Form::button('<i class="fa fa-trash-o"></i> Eliminar', array('type'=> 'submit','class'=>'btn btn-danger')) }}
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
