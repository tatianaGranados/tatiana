{{-- @extends('layout.master') --}}
{{-- @section('contenido') --}}
<div class="row">
	<!-- <div class="col-md-4 ml-auto mr-auto"> -->
	<div class="card">
		<div class="card-header card-header-primary text-center">
		<h5>REGISTRO DE ACTA</h5>
				<p class="category">MODALIDAD: {{ $modalidad->nombre_modalidad }}</p>
				
		</div>
		<div class="card-body">
			
			{!! Form::open(['route'=>'titulacion.store','method'=>'POST']) !!}
			{{ csrf_field() }}
			<input type="hidden" name="modalidad" value="{{ $modalidad->id }}">
			<input type="hidden" name="nombre_modalidad" value="{{ $modalidad->nombre_modalidad }}">
				<h5>Informacion del(os) Estudiante(s)</h5>
				<hr class="lineaHorizontal">
					@include('titulacion.partials.formInfoEstudiante')
				
				@if($modalidad->nombre_modalidad=="PROYECTO DE GRADO" or $modalidad->nombre_modalidad=="TRABAJO DIRIGIDO" or $modalidad->nombre_modalidad=="ADSCRIPCION" or $modalidad->nombre_modalidad=="TESIS")
					<h5>Informacion de Tesis</h5>
					<hr class="lineaHorizontal">
					@include('titulacion.partials.formInfoTesis')
				
					@if($modalidad->nombre_modalidad=="TRABAJO DIRIGIDO" or $modalidad->nombre_modalidad=="ADSCRIPCION")
						<div class="form-group row">
							{!! Form::label('empresa','* Empresa:',['class'=>'col-md-2'])!!}
							<div class="col-md-5">
							{!! Form::text('empresa',null,['placeholder' => 'Ingrese su nombre', 'class'=>'form-control']) !!}
						</div>
						</div>
					@endif
				
					<h5>Informacion de Los Tribunales</h5>
					<hr class="lineaHorizontal">
						@include('titulacion.partials.formInfoTribunales')
					
					<h5>Informacion de La defensa de tesis</h5>
					<hr class="lineaHorizontal">
						@include('titulacion.partials.formInfoDefensa')
				@endif
				

				@if($modalidad->nombre_modalidad=="EXCELENCIA ACADEMICA" or $modalidad->nombre_modalidad=="RENDIMIENTO ACADEMICO")
					<h5 class="text-lowercase">Informacion {{ $modalidad->nombre_modalidad}}</h5>
					<hr class="lineaHorizontal">
					<div class="form-group row">
						{!! Form::label('resolucion','Nº Resolución:', ['class'=>'col-md-2']) !!}
						<div class="col-md-10">
						{!! Form::text('resolucion',null,['placeholder' => 'Ingrese el numero de Resolución','class'=>'form-control']) !!}
						</div>
					</div>

					<div class="form-group row">
						{!! Form::label('fecha_resolucion','Fecha Resolución:',['class'=>'col-md-2'])!!}
						<div class="col-md-3">
						{!! Form::date('fecha_resolucion', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
						</div>
						{!! Form::label('autoridad','Autoridad:',['class'=>'col-md-2'])!!}
						<div class="col-md-5">
						{!! Form::text('autoridad',null,['placeholder' => 'Nombre Autoridad', 'class'=>'form-control']) !!}
						</div>
					</div>

				@endif

				@if($modalidad->nombre_modalidad=="PTAANG")
					<h5>Informacion Ptaang</h5>
					<hr class="lineaHorizontal">
					@include('titulacion.partials.formPtaang')
				@endif

				<div class="text-center">
					{!! Form::button('Crear Nueva Acta',['type'=> 'submit','class'=>'btn btn-primary'])!!}
				</div>
			{!! form::close() !!}
		</div>                           
	</div>
</div>

 @include('titulacion.partials.modals')

{{-- @endsection --}}

