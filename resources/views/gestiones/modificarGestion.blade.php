@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>MODIFICAR GESTIÓN</h5></div>
			<div class="card-body">
				@include('errores.msjError')
				{!! Form::open(array('route'=> array('gestiones.update', $gestionModificar->id), 'method' => 'POST'), array('role'=>'form')) !!}
				{!! method_field('PUT') !!}
				{!! Form::label('anio','*Año:',['class'=>'col-md-3']) !!}
				{!! Form::label('anio',$gestionModificar->anio,['class'=>'col-md-3']) !!}
				{{-- {!! Form::select('anio',array(date('Y')=>date('Y'),date('Y')+1=>date('Y')+1,date('Y')+2=>date('Y')+2),$gestionModificar->anio) !!} --}}
				{!! Form::label('periodo','*Periodo:',['class'=>'col-md-3']) !!}
				{!! Form::select('periodo',array('1'=>'1','2'=>'2'),$gestionModificar->periodo) !!}
				<br>
				{!! Form::label('tipo_gestion','*Tipo Gestion:',['class'=>'col-md-3']) !!}
				{!! Form::select('tipo_gestion',$tipo_gestiones->pluck('nombre_tipo_gestion','id'),$gestionModificar->tipo_gestiones->id,['placeholder'=>'Seleccione','required' => 'required']) !!}
				<br>
				{!! Form::label('fecha-inicio','*Fecha Inicio Gestion:',['class'=>'col-md-3']) !!}
				{!! Form::text('fecha_inicio',$gestionModificar->fecha_inicio,array('placeholder'=>'Fecha Inicio Gestion','required'=>'required','id'=>'fecha-inicio','readonly'=>'readonly')) !!}
				<br>
				{!! Form::label('fecha_fin','*Fecha Fin Gestion:',['class'=>'col-md-3']) !!}
				{{-- {!! Form::text('fecha-f','',array('id'=>'fecha-fin','placeholder'=>'Fecha Fin Gestion','required'=>'required')) !!} --}}
				{!! Form::text('fecha_fin',$gestionModificar->fecha_fin, array('placeholder'=>'Fecha Fin Gestion','id' => 'fecha-fin', 'data-date-format' => "dd-mm-yyyy",'readonly'=>'readonly')) !!}
				<br>
				{!! Form::label('habilitar_plan','*HABILITAR PLAN:',['class'=>'col-md-3']) !!}
				{{-- {!! csrf_field() !!} --}}
				<table class="table table-striped table-bordered table-hover table-condensed">
					<tr class="table-info">
						<th class="table-info">Nro</th>
						<th class="table-info">Cod PLAN</th>
						<th class="table-info">PLAN</th>
						<th class="table-info">Habilitar Plan</th>
						@foreach($planes as $key=>$plan)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $plan->cod_plan }}</td>
							<td>{{ $plan->nombre_plan }}</td>
							<td>
							@if($plan->activo =='SI')
								{{ Form::checkbox('plan[]',$plan->id,true) }}
							@else
								{{ Form::checkbox('plan[]',$plan->id) }}	
							@endif
							</td>
						</tr>
					</tr>
						@endforeach 
					</table>
				 <div class="text-center">
				          {!! Form::button('Modificar Gestion', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
				        </div> 
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
{{-- @section('script') --}}
{{-- <script>
	$(document).ready(function(){
		 $('#activo').click(function(event){
		// });
		//$(document).on('click','#activo',function(event){
			event.preventDefault();
			var estado=$(this).attr('value');
			var token=$('input[name="_token"]').val();
			console.log(estado);
		});
	 });
</script> --}}
{{-- @endsection --}}