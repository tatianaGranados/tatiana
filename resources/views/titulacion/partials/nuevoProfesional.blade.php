<div class="form-group row">
    {!! Form::label('apellidos','* Apellidos:', ['class'=>'col-lg-2']) !!}
    <div class="col-lg-10">
    {!! Form::text('apellidos',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control','id'=>'apellidos')) !!}
    </div>
</div>
<div class="form-group row">
{!! Form::label('nombres','* Nombres:', ['class'=>'col-lg-2']) !!}
    <div class="col-lg-10">
    {!! Form::text('nombres',null,array('placeholder' => 'Ingrese nombre','class'=>'form-control','id'=>'nombres')) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('doc_identidad','* Carnet de identidad:', ['class'=>'col-lg-3']) !!}
    <div class="col-lg-4">
    {!! Form::text('doc_identidad',null,array('placeholder' => 'Ingrese su ci','class'=>'form-control','id'=>'doc_identidad')) !!}
    </div>
    {!! Form::label('sexo','* Genero:', ['class'=>'col-lg-2 text-right']) !!}
    <div class="col-lg-3">
    {!! Form::select('sexo',array('FEMENINO'=>'FEMENINO','MASCULINO'=>'MASCULINO'),null,['class'=>'form-control'])!!}
    </div>
</div>
