<div class="form-group row">
	{!! Form::label('titulo_defensa','*Nombre Tesis:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('titulo_defensa',null,['placeholder' => 'nombre_tesis','class'=>'form-control','size' => '30x2']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('descripcion','*Breve Descrición:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('descripcion',null,['placeholder' => 'Escriba una breve descipcion del proyecto','class'=>'form-control','size' => '30x3']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('nota','Nota numeral:',['class'=>'col-md-2']) !!}
	<div class="col-md-3">
		<input type="number" name="nota" id="nota" class="form-control" min="1" max="100" onkeyup="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0'}">
	{{-- {!! Form::text('nota',null,['type'=>'input','placeholder' => 'nota numeral','class'=>'form-control numbers','size' => '30x3','id'=>'nota']) !!} --}}
	</div>
	{!! Form::label('nota_literal','Nota Literal:',['class'=>'col-md-2 ']) !!}
	<div class="col-md-3">
	{!! Form::text('nota_literal',null,array('placeholder' => 'nota literal','class'=>'form-control','size' => '30x3','id'=>'nota_literal','readonly' => 'true')) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('avance','Porcentaje de Avance:',['class'=>'col-md-3']) !!}
	<div class="col-md-2">
	{!! Form::select('avance',['10'=>'10%','20'=>'20%','30'=>'30%','40'=>'40%','50'=>'50%','60'=>'60%','70'=>'70%','80'=>'80%','90'=>'90%','100'=>'100%'],null,['class'=>'form-control','id'=>'avance'])!!}
	
	</div>
	{{-- <div class="col-md-6">
  	<input type="button" id="myButton" value="Analizar" />	
    <div class="progress" style="width:600px;">
        <div id="barra" style="background-color:#2196a8; height:19px; width:0px; color:white; text-align:center">
        </div>
    </div>
	</div> --}}
</div>
