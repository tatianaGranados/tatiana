@extends('layout.master')
@section('contenido')

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>FORMULARIO MODIFICAR CONTRASEÑA DE USUARIO</strong></div>
  <div class="card-body">
    @include('errores.msjError')
      {{ Form::open(array('route' =>array('usuarios.validarModContrasena', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
			<form>
        <div class="form-group row">
        	{!! Form::label('contrasena', 'Ingrese su contraseña:',['class'=>'col-form-label col-sm-4']) !!}
        	<div class="col-sm-8">
        		{!! Form::password('contrasena', array('placeholder'=> 'Introduce su contraseña', 'class' => 'form-control')) !!}
        	</div>
    		</div>
          
        <div class="form-group row">
          {!! Form::label('nueva_contrasena', 'Ingrese su nueva contraseña:',['class'=>'col-form-label col-sm-4']) !!}
          <div class="col-sm-7">
            {!! Form::password('nueva_contrasena', ['placeholder'=>'Introduce su nueva contraseña','class' => 'form-control', 'id'=>'nuevaContrasena']) !!}
          </div>
          <div class="col-sm-1">
            <input name ="mostrar" type="checkbox" onchange="document.getElementById('nuevaContrasena').type = this.checked ? 'text' : 'password'"> Ver </input>
          </div>
        </div>
          
        <div class="form-group row"> 
        	{!! Form::label('reescribir_contrasena', 'Reescriba su nueva contraseña:',['class'=>'col-form-label col-sm-4']) !!}
        	<div class="col-sm-8">
        		{!! Form::password('reescribir_contrasena', ['placeholder'=>'Reescribe tu nueva contraseña','class' => 'form-control']) !!}
        	</div>
     		</div>

        <div class="text-center">{{ Form::button('editar Login', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
        
      </form>
      {!! form::close() !!}   
        
	</div>
</div>
@endsection