<div class="form-group row">
	{!! Form::label('nombreAmbiente','*Nombre del ambiente:', ['class'=>'col-md-3']) !!}
	<div class="col-md-9">
	{!! Form::text('nombre_ambiente',null,array('placeholder' => 'nombre ambiente','class'=>'form-control','id'=>'')) !!}
	</div>
	<p class="error text-center alert alert-danger" id="errorAmb" ></p>
</div>
{{-- <div class="form-group row">
	{!! Form::label('tipoAmbiente','Tipo Ambiente:',['class'=>'col-md-3']) !!}
	<div class="col-md-9">
	{!! Form::select('tipoAmbiente', $tipo_ambiente,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
	</div>
</div> --}}
<div class="form-group row">
	{{-- {!! Form::label('unidad','Unidad:',['class'=>'col-md-3 ']) !!}
	<div class="col-md-4">
	{!! Form::select('unidad', $unidad,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
	</div> --}}
	{!! Form::label('max_estudiantes','Max estudiantes:',['class'=>'col-md-3 text-right']) !!}
	<div class="col-md-2">
	{!! Form::number('max_estudiantes',null,array('class'=>'form-control')) !!}
	</div>
	<p class="error text-center alert alert-danger" id="errorMax" ></p>
</div>
