@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>LISTA DE ROLES CREADOS</h5></div>
			<div class="card-body">
				<h2><a href="{{ URL::to('roles/create') }}" role="button" class="btn btn-success"><i class="fa fa-drivers-license"></i> CREAR UN NUEVO ROL</a></h2>
				<div class="table-responsive">  
					<table  class="table table-sm table-condensed table-striped table-bordered table-hover">
						<thead>
							<tr class="text-center table-info">
								<th class="text-center">Nro</th>
							    <th class="text-center">NOMBRE ROL</th>
							    <th class="text-center">DESCRIPCION</th>
							    <th class="text-center">MODIFICAR</th>
							    <th class="text-center">ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($rol as $roles)
							<tr>
								<td class="text-center">{{ $roles->id }}</td>
								<td>{{ $roles->nombre_rol }}</td>
								<td>{{ $roles->descripcion_rol }}</td>
								<td class="text-center"><a href="{{ route('roles.edit', $roles->id) }}" role="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i> Modificar</a></td>
								<td class="text-center">
									{!! Form::open(array('route' =>array('roles.destroy',$roles->id),'method'=>'delete')) !!}
				          {{ Form::button('<i class="fa fa-trash-o"></i> Eliminar', array('type'=> 'submit','class'=>'btn btn-danger btn-sm','onclick' => 'return confirm("¿Estas Seguro que desea eliminar el rol?")')) }}
				          {!! Form::close() !!}
				        </td>
							</tr>
							@endforeach
						</tbody>
	</table>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}