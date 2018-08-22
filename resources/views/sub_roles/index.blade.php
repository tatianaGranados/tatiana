@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>LISTA DE SUB ROLES</h5></div>
			<div class="card-body">
			<h2><a href="{{ URL::to('sub_roles/create') }}" role="button" class="btn btn-success"><i class="fa fa-group"></i>  CREAR UN SUB-ROL</a></h2>

			<div class="table-responsive">  
				<table  class="table table-sm table-condensed table-striped table-bordered table-hover">
					<thead>
						<tr class="text-center table-info">
							<th class="text-center">Nro</th>
					       	<th class="text-center">NOMBRE SUB-ROL</th>
					        <th class="text-center">DESCRIPCION</th>
					        <th class="text-center">NOMBRE ROL</th>
					        <th class="text-center">MODIFICAR</th>
					        <th class="text-center">ELIMINAR</th>
      					</tr>
					</thead>
					<tbody>
						@foreach ($sRoles as $key=>$roles)
						<tr>
							<td class="text-center">{{ ++$key }}</td>
							<td>{{ $roles->nombre_sub_rol }}</td>
							<td>{{ $roles->descripcion_sub_rol }}</td>
							<td>{{ $roles->nombre_rol }}</td>
							<td class="text-center">
								<a href="{{ route('sub_roles.edit', $roles->id) }}" role="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i> Modificar</a>
							</td>
							<td class="text-center">
								{{-- <<<<<<< HEAD --}}
								{{-- 	{!! Form::open(array('route'=>array('sub_roles.destroy',$roles->id),'method'=>'delete')) !!}
			   					 {{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
			    				{!! Form::close() !!}
			   					 </td> --}}
			   		 			{{-- </tr> --}}
								{{-- ======= --}}
								{!! Form::open(array('route' =>array('sub_roles.destroy',$roles->id),'method'=>'delete')) !!}
			    					{{ Form::button('<i class="fa fa-trash-o"></i> Eliminar', array('type'=> 'submit','class'=>'btn btn-danger btn-sm','onclick' => 'return confirm("¿Estas Seguro que desea eliminar el sub rol?")')) }}			
			 					{!! Form::close() !!}
        					</td>
						</tr>
								{{-- >>>>>>> 5124918adb3fa56f49af1791bedecfb072b061ac --}}
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}} 	