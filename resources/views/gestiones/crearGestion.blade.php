@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>CREAR NUEVA GESTIÓN</h5></div>
			<div class="card-body">
				@include('errores.msjError')
				{!! Form::open(['route'=>'gestiones.store','method'=>'POST'],array('role'=>'form')) !!}
					{!! csrf_field() !!}
					<div class="form-group row">
						<div class="col-md-1">
							<h4><a href="{{ route('gestiones.index') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR GESTIONES</a></h4>
						</div>
						{!! Form::label('anio','*Año:',['class'=>'col-md-3 text-right']) !!}
						<div class="col-md-2">
							{!! Form::select('anio',array(date('Y')=>date('Y'),date('Y')+1=>date('Y')+1,date('Y')+2=>date('Y')+2),null,['class'=>'form-control ']) !!}
						</div>
						{!! Form::label('periodo','*Periodo:',['class'=>'col-md-2 text-right']) !!}
						<div class="col-md-1">
							{!! Form::select('periodo',array('1'=>'1','2'=>'2'),null,['class'=>'form-control ']) !!}
						</div>
					</div>
					
					<div class="form-group row">
						{!! Form::label('tipo_gestion','*Tipo Gestion:',['class'=>'col-md-2']) !!}
						<div class="col-md-7">
						{!! Form::select('tipo_gestion',$tipo_gestiones->pluck('nombre_tipo_gestion','id'),null,['placeholder'=>'Seleccione','required' => 'required','class'=>'form-control']) !!}
						</div>
					</div>
					
					<div class="form-group row">
					{!! Form::label('fecha-inicio','*Fecha Inicio Gestion:',['class'=>'col-md-3']) !!}
					{!! Form::text('fecha_inicio','',array('placeholder'=>'Fecha Inicio Gestion','required'=>'required','id'=>'fecha-inicio','readonly'=>'readonly')) !!}
					</div>

					<div class="form-group row">
					{!! Form::label('fecha_fin','*Fecha Fin Gestion:',['class'=>'col-md-3']) !!}
					{{-- {!! Form::text('fecha-f','',array('id'=>'fecha-fin','placeholder'=>'Fecha Fin Gestion','required'=>'required')) !!} --}}
					{!! Form::text('fecha_fin','', array('placeholder'=>'Fecha Fin Gestion','id' => 'fecha-fin', 'data-date-format' => "dd-mm-yyyy",'readonly'=>'readonly')) !!}
					</div>

					{!! Form::label('habilitar_plan','*HABILITAR PLAN:',['class'=>'col-md-3']) !!}
					<div class="table-responsive"> 
						<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr class="table-info text-center">
									<th>Nro</th>
									<th>CODIGO PLAN</th>
									<th>PLAN</th>
									<th>HABILITAR PLAN</th>
								</tr>
							</thead>
							<tbody>
								@foreach($planes as $key=>$plan)
								<tr>
									<td class="text-center">{{ ++$key }}</td>
									<td>{{ $plan->cod_plan }}</td>
									<td>{{ $plan->nombre_plan }}</td>
									<td>{!! Form::checkbox('plan[]',$plan->id) !!}</td>
								</tr>
								@endforeach
							</tbody> 
						</table>
					</div>
	 				
	 				<div class="text-center">
          				{!! Form::button('Registrar Gestion', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
        			</div> 
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection