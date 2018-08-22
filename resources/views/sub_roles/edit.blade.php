@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>EDITAR SUB-ROLES</h5>
			</div>
			<div class="card-body">
				<h2><a href="{{ URL::to('sub_roles') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR SUB-ROLES</a></h2></br>
  	 			@include('errores.msjError')
				{!! Form::open(array('route' =>  array('sub_roles.update', $sRol->id), 'method' => 'POST'), array('role'=> 'form')) !!}
					{!! method_field('PUT') !!}
	
					<div class="form-group row">
						{!! Form::label('nombre_sub_rol', 'Nombre del sub Rol a editar:',['class'=>'col-md-3'])!!}
						<div class="col-md-9">
							{!! Form::text('nombre_sub_rol',$sRol->nombre_sub_rol, array('placeholder'=> $sRol->nombre_sub_rol, 'class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group row">
						{!! Form::label('desc_sub_rol', 'Descripcion Rol:',['class'=>'col-md-3']) !!}
						<div class="col-md-9">
							{!! Form::text('desc_sub_rol',$sRol->descripcion_sub_rol, array('placeholder'=> $sRol->descripcion_sub_rol, 'class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group row">	
						{!! Form::label('rol_asignado','Rol Asignado:',['class'=>'col-md-3']) !!}
						<div class="col-md-9">
							<select name="rol_seleccionado" class="form-control">
								<option value={{ $sRol->id_rol }}>{{ $sRol->nombre_rol }}</option>	
								@foreach ($rol as $roles)
									<option value="{{$roles->id}}">{{$roles->nombre_rol}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<h2><center>LISTA DE PERMISOS YA ASIGNADOS</center></h2></br>
					@include('accesos.sub_accesos_permitidos')
					<div class="text-center">
						{!! Form::button('EDITAR SUB ROL', array('type'=> 'submit','class'=>'btn btn-primary')) !!}
					</div>
				{!! Form::close() !!}
 			</div><!--cierre card body-->
		</div><!--cierre panel default-->
	</div>
</div>
@endsection