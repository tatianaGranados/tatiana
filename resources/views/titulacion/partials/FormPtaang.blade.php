<div class="form-group row">
	{!! Form::label('grupo','Grupo:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('grupo',null,['placeholder' => 'Ingrese el numero de grupo','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('modalidad_ptaang','Modalidad:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::select('modalidad_ptaang',['memoria profesional'=>'Memoria profesional','trabajo dirigido'=>'Trabajo dirigido','otro'=>'Otro'],null,['placeholder' => 'Ingrese la modalidad','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('nota','Nota numeral:',['class'=>'col-md-2']) !!}
	<div class="col-md-3">
	{!! Form::text('nota',null,['type'=>'input','placeholder' => 'nota numeral','class'=>'form-control numbers','size' => '30x3','id'=>'nota']) !!}
	</div>
	{!! Form::label('nota_literal','Nota Literal:',['class'=>'col-md-2 ']) !!}
	<div class="col-md-3">
	{!! Form::text('nota_literal',null,array('placeholder' => 'nota literal','class'=>'form-control','size' => '30x3','id'=>'nota_literal','readonly' => 'true')) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('version','Version:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('version',null,['placeholder' => 'Version ','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('expedido','Expedido:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('expedido',null,['placeholder' => 'Expedido ','class'=>'form-control']) !!}
	</div>
</div>
