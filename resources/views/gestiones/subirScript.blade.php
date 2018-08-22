@extends('layout.master')
{{-- @section('style') --}}
{{-- {!! Html::style('css/dropzone.css') !!} --}}
{{-- @endsection --}}
@section('contenido')
<h1><center>SUBIR SCRIPT CSV</center></h1>
{!! Form::open(array('route'=>'gestiones.importarScript','method' => 'POST','files'=>'true')) !!}

{!! csrf_field() !!} 
{!! Form::label('gestion','* Seleccione la Gestion',['class'=>'col-md-3']) !!}
{!! Form::select('gestion',$gestiones->pluck('anioGestionTipo','id'),null,['placeholder'=>'Seleccione','required'=>'required']) !!}
{!! Form::label('sample_file','Selecciones el Archivo a Importar',['class'=>'col-md-3']) !!}
{!! Form::file('archivo',['required'=>'required','id'=>'archivo','name'=>'archivo','class'=>'form-control']) !!}
<br>
<br>
{!! Form::submit('Subir',['class'=>"btn btn-primary"]) !!}

{!! Form::close() !!}

@endsection
