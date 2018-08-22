@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
  		<div class="card-header card-header-primary text-center text-muted"><strong>EDITAR ROL</strong></div>
  			<div class="card-body">
  	  			<h4><a href="{{ route('roles.index') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR ROLES</a></h4>

				{!! Form::open(array('route' =>  array('roles.update', $rol->id), 'method' => 'POST'), array('role'=> 'form')) !!}
					{{ method_field('PUT') }}
					{{ csrf_field() }}
					<div class="form-group row {{$errors->has('nombre_rol')? 'has-error' : '' }}">
						{!! Form::label('nombre_rol', 'Nombre del Rol a editar :',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
							{!! Form::text('nombre_rol',$rol->nombre_rol, array('placeholder'=> $rol->nombre_rol, 'class' => 'form-control')) !!}
						</div>
					</div>

					<div class="form-group row {{$errors->has('desc_rol')? 'has-error' : '' }}">
						{!! Form::label('desc_rol', 'Descripcion Rol:',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
							{!! Form::text('desc_rol',$rol->descripcion_rol, array('placeholder'=> $rol->descripcion_rol, 'class' => 'form-control')) !!}
							@if($errors->has('desc_rol'))
								{!! $errors->first('desc_rol', '<div class="alert alert-danger ">:message</div>') !!}
							@endif
						</div>
					</div>
					<div class="text-center">
						{!! Form::button('editar Rol', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection