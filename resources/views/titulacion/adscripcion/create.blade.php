@extends('layout.master')
@section('contenido')
<div class="container">
    <div class="row">
    {{-- <div class="col-md-10 ml-auto mr-auto"> --}}
    <div class="card">
        <div class="card-header card-header-primary text-center">
        <h5>REGISTRO DE ACTA</h5>
			<p class="category">MODALIDAD: {{ $modalidad->nombre_modalidad }}</p>
        </div>
        <div class="card-body">
			{!! Form::open() !!}
            <h5>Informacion del(os) Estudiante(s)</h5>
            <hr class="lineaHorizontal">
			@include('titulacion.partials.formDatosEstudiante')
            <h5>Informacion de Tesis</h5>
            <hr class="lineaHorizontal">
            @include('titulacion.partials.formInfoTesis')
            <div class="form-group row">
                {!! Form::label('empresa','Unidad/empresa de convenio:',['class'=>'col-md-3']) !!}
                <div class="col-md-9">
                {!! Form::text('empresa',null,array('placeholder' => 'nombre unidad/empresa de convenio','class'=>'form-control')) !!}
                </div>
            </div>

            <h5>Informacion de defensa</h5>
            <hr class="lineaHorizontal">
	      	@include('titulacion.partials.formDefensaTesis')
            @include('titulacion.partials.formAmbiente')
    		{!! Form::close() !!}

     	</div>                           
    </div>
  </div>
</div>

@include('titulacion.partials.modals')
@endsection



