
		<div class="form-group row">
			{!! Form::label('ci','Documento de Identidad:',['class'=>'col-md-3']) !!}
			<div class="col-md-9">
				{!! Form::text('ci','',array('placeholder'=>'Ingrese Doc de Identidad','class'=>'form-control','id'=>'ci')) !!}
			</div>
		</div>
		
		<div class="form-group row">
			{!! Form::label('nombre','Nombre de Usuario:',['class'=>'col-md-3']) !!}
			<div class="col-md-9">
				{!! Form::text('nombre','',array('placeholder'=>'Nombre de Usuario','class'=>'form-control','id'=>'nombre')) !!}
			</div>
		</div> 
		<div class="form-group row">
			{!! Form::label('apellido','Apellidos de Usuario:',['class'=>'col-md-3']) !!}
			<div class="col-md-9">{!! Form::text('apellido',"",array('placeholder'=>'Apellidos de Usuario','class'=>'form-control','id'=>'apellido')) !!}
			</div>
		</div>
		<div class="text-center">
			{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary','id'=>'buscarEst'))!!}
		</div>
	
