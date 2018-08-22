@extends('layout.master')
@section('contenido')
{{ Form::open(array('route' => 'usuarios.logear', 'method' => 'POST'), array('role'=> 'form')) }}
     {!! csrf_field() !!}

    {{ Form::label('login', 'Ingrese su Loguin') }}
    {{ Form::text('login',null, array('placeholder'=> 'Introduce su loguin', 'class' => 'form-control')) }}
    <br>
    {{ Form::label('password', 'Ingrese su Password') }}
    {{ Form::password('password', ['placeholder'=>'Introduce su Password','class' => 'form-control']) }}
    <br>
    {{ Form::button('Ingresar', array('type'=> 'submit','class'=>'btn btn-primary')) }}
{{ Form::close()  }}
@endsection