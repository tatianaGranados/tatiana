@extends('layout.master')
@section('contenido')

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>FORMULARIO MODIFICAR LOGIN DE USUARIO</strong></div>
  <div class="card-body">
    @include('errores.msjError')
    {{ Form::open(array('route' =>array('usuarios.validarModLogin', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
    <form>
        <div class="form-group row">
          {!! Form::label('login', 'Login Actual:',['class'=>'col-sm-2 col-form-label']) !!}
          <div class="col-sm-10">
            <fieldset disabled>
              {!! Form::text('login',null, array('class' => 'form-control', 'id'=>'disabledTextInput','placeholder'=>$usuario->login)) !!}
            </fieldset>
          </div>
        </div>

        <div class="form-group row">
          {!! Form::label('nuevo_login', 'Ingrese su nuevo login:',['class'=>'col-sm-2 col-form-label']) !!}
          <div class="col-sm-10">
            {!! Form::text('nuevo_login',null, array('class' => 'form-control','placeholder'=>'Introduce su nuevo login', 'id'=>'password')) !!}
          </div>
        </div>
        <div class="text-center">{{ Form::button('editar Login', array('type'=> 'submit','class'=>'btn btn-primary')) }}
        </div>
    </form>
    {!! form::close() !!}  
  </div>
</div>

@endsection