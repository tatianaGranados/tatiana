@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
  		<div class="card-header card-header-primary text-center text-muted"><strong>CREAR ROL</strong></div>
  		<div class="card-body">
  			<h4><a href="{{ route('roles.index') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR ROLES</a></h4></br>
			
				{!! Form::open(array('route' => 'roles.store', 'method' => 'POST')) !!}
				{{ csrf_field() }}
					<div class="form-group row {{$errors->has('nombre_rol')? 'has-error' : '' }}">
						{!! Form::label('nombre_rol', 'Nombre del Nuevo Rol',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
						{!! Form::text('nombre_rol',null, array('placeholder'=> 'Introduce el nuevo Rol', 'class' => 'form-control')) !!}
							@if($errors->has('nombre_rol'))
								{!! $errors->first('nombre_rol', '<div class="alert alert-danger ">:message</div>') !!}
							@endif
						</div>
					</div>

					<div class="form-group row {{$errors->has('desc_rol')? 'has-error' : '' }} ">
						{!! Form::label('desc_rol', 'Descripcion Rol',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
						{!! Form::text('desc_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Rol', 'class' => 'form-control')) !!}
							@if($errors->has('desc_rol'))
								{!! $errors->first('desc_rol', '<div class="alert alert-danger">:message</div>') !!}
							@endif
						</div>
					</div>

					<div class="text-center">
						{!! Form::button('<i class="fa fa-drivers-license-o"></i> Crear Rol', array('type'=> 'submit','class'=>'btn btn-primary')) !!}
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection