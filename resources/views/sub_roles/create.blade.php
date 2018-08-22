@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>CREAR NUEVO SUB-ROL PARA USUARIO</h5></div>
			<div class="card-body">
				<h2><a href="{{ URL::to('sub_roles') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR SUB-ROLES</a></h2></br>
	 				@include('errores.msjError')
					{{ Form::open(array('route' =>array('sub_roles.store','rol_seleccionado'), 'method' => 'POST'), array('role'=> 'form')) }}
						{{ csrf_field() }}
						{{-- ingresar token ejemplo; input type="hidden" name="_token" value="{{ csrf_token() }}" --}}
						<div class="form-group row">
							{{ Form::label('nombre_rol', 'Seleccione Rol:',['class'=>'col-md-3']) }}
							<div class="col-md-9">
								<select name="rol_seleccionado" class="form-control">
									<option value='-1'>Seleccione</option>	
									@foreach ($rol as $roles)
										<option value="{{$roles->id}}">{{$roles->nombre_rol}}</option>
									@endforeach	
								</select>
							</div>
						</div>
						<hr>
						<div class="form-group row">
							{{ Form::label('nombre_sub_rol', 'Nombre del Nuevo Sub-Rol',['class'=>'col-md-3']) }}
							<div class="col-md-9">
								{{ Form::text('nombre_sub_rol',null, array('placeholder'=> 'Introduce el nuevo Sub Rol', 'class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group row">
							{{ Form::label('desc_sub_rol', 'Descripcion del Sub-Rol',['class'=>'col-md-3']) }}
							<div class="col-md-9">
								{{ Form::text('desc_sub_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Sub-Rol', 'class' => 'form-control')) }}
							</div>
						</div>

						<h2><center>LISTA DE PERMISOS A ASIGNAR</center></h2></br>
						@include('accesos.prueba')      
						<div class="text-center">
							{{ Form::button('Crear Sub Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}
						</div>    
					{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection