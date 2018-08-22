@extends('layout.master')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="card">
      <div class="card-header card-header-primary text-center text-muted"><h5>CREAR NUEVO USUARIO USUARIO</h5>
      </div>
      <div class="card-body">
        <p><strong>todos los campos en asterisco (*) son de manera obligatoria</strong></p>
        <hr>  
        {!! Form::open(array('route' =>array('usuarios.store'), 'method' => 'POST'), array('role'=> 'form')) !!}
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-5">
              {!! Form::label('login','* Login:')!!}
              {!! Form::text('login',null,['placeholder' => 'Ingrese su login', 'class'=>'form-control']) !!}
              @if($errors->has('login'))
                {!! $errors->first('login','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('login') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('clave','* Contraseña:')!!}
              {!! Form::password('clave',['placeholder' => 'Ingrese su contraseña', 'class'=>'form-control', 'id'=>'clave']) !!}
              @if($errors->has('clave'))
                {!! $errors->first('clave','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('clave') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-check col-md-1 d-flex align-items-center">
              <div class="checkbox checkbox-primary">
                <input id="checkbox2" name ="mostrar" type="checkbox" onchange="document.getElementById('clave').type = this.checked ? 'text' : 'password'">
                <label for="checkbox2">Ver</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              {!! Form::label('doc_identidad','* Documento de indentidad:')!!}
              {!! Form::text('doc_identidad',null,array('placeholder' => 'Ingrese su doc CI', 'class'=>'form-control')) !!}
              @if($errors->has('doc_identidad'))
                {!! $errors->first('doc_identidad','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('doc_identidad') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-md-4">
              {!! Form::label('id_tipo_Doc_identidad','* Tipo documento:') !!}
              {!! Form::select('id_tipo_Doc_identidad',$tipoDocId,null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
              @if($errors->has('id_tipo_Doc_identidad'))
                {!! $errors->first('id_tipo_Doc_identidad','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_tipo_Doc_identidad') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-md-4">
              {!! Form::label('ciudad_expedido_doc','* Expedido en:') !!}
              {!! Form::select('ciudad_expedido_doc',$ciudad,null,['placeholder' => 'Seleccione','class'=>'form-control '])!!}
              @if($errors->has('ciudad_expedido_doc'))
                {!! $errors->first('ciudad_expedido_doc','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('ciudad_expedido_doc') }}</strong></span> --}}
              @endif
            </div>
          </div>

          <div class="form-group row">
            {!! Form::label('apellidos','* Apellidos:', ['class'=>'col-md-2']) !!}
            <div class="col-md-10">
              {!! Form::text('apellidos',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control')) !!}
              @if($errors->has('apellidos'))
                {!! $errors->first('apellidos','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('apellidos') }}</strong></span> --}}
              @endif
            </div>
          </div>
        
          <div class="form-group row">
            {!! Form::label('nombres','* Nombres:',['class'=>'col-md-2']) !!}
            <div class="col-md-10">
              {!! Form::text('nombres',null,array('placeholder' => 'Ingrese Nombre','class'=>'form-control')) !!}
                @if($errors->has('nombres'))
                {!! $errors->first('nombres','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('nombres') }}</strong></span> --}}
                @endif
            </div>
          </div>

          <div class="form-group row">
            {!! Form::label('fecha_nac','* Fecha de nacimiento:',['class'=>'col-md-3']) !!}
            <div class="col-md-9">
              <input name='fecha_nac' type="date" class="form-control" id="birthday">
              @if($errors->has('fecha_nac'))
                {!! $errors->first('fecha_nac','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('fecha_nac') }}</strong></span> --}}
                @endif
            </div>          
          </div>
          
          <div class=" form-row">
            <div class=" form-group col-md-4">
              {{ csrf_field()}}           
              {!! Form::label('pais_usuario','* Pais:') !!}
              {!! Form::select('pais_usuario',$pais,null,['id'=>'id_pais','placeholder' => 'Seleccione','class'=>'form-control'])!!}
              @if($errors->has('pais_usuario'))
                {!! $errors->first('pais_usuario','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('pais_usuario') }}</strong></span> --}}
                @endif
            </div>
            <div class="form-group col-md-4">
              {!! Form::label('ciudad_usuario','* Ciudad:') !!}
              {!! Form::select('ciudad_usuario',['placeholder' => 'Seleccione'],null,['id'=>'id_ciudad','class'=>'form-control'])!!}
                @if($errors->has('ciudad_usuario'))
                {!! $errors->first('ciudad_usuario','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('ciudad_usuario') }}</strong></span> --}}
                @endif
            </div>
            <div class="form-group col-md-4">
              {!! Form::label('id_provincia','* Provincia:') !!}
              {!! Form::select('id_provincia',['placeholder' => 'Seleccione'],null,['id'=>'id_provincia','class'=>'form-control'])!!}
              @if($errors->has('id_provincia'))
                {!! $errors->first('id_provincia','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('provincia_usuario') }}</strong></span> --}}
                @endif
            </div>
          </div>
          
          <div class=" form-row">
            <div class="form-group col-md-6">
              {!! Form::label('sexo','* Genero:') !!}
              {!! Form::select('sexo',array('FEMENINO'=>'FEMENINO','MASCULINO'=>'MASCULINO'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
              @if($errors->has('sexo'))
                {!! $errors->first('sexo','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('sexo') }}</strong></span> --}}
                @endif
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('id_estado_civil','* Estado civil:') !!}
              {!! Form::select('id_estado_civil',$estado,null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
              @if($errors->has('id_estado_civil'))
                {!! $errors->first('id_estado_civil','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_estado_civil') }}</strong></span> --}}
                @endif
            </div>
          </div>

          <div class="form-row"> 
            <div class="form-group col-md-6">
              {!!Form::label('id_tipo_email','* Tipo Correo Electronico:') !!}
              {!!Form::select('id_tipo_email', $tipo_email,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
              @if($errors->has('id_tipo_email'))
                {!! $errors->first('id_tipo_email','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_tipo_email') }}</strong></span> --}}
                @endif
            </div>
            <div class="form-group col-md-6">
              {!!Form::label('email','* Correo electronico:') !!}
              {!!Form::email('email',null,array('placeholder' => 'example@gmail.com','class'=>'form-control')) !!}
              @if($errors->has('email'))
                {!! $errors->first('email','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span> --}}
                @endif
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              {!! Form::label('id_tipo_telefono','* Tipo Telefono:') !!}
              {!! Form::select('id_tipo_telefono', $tipo_telefono,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
              @if($errors->has('id_tipo_telefono'))
                {!! $errors->first('id_tipo_telefono','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_tipo_telefono') }}</strong></span> --}}
                @endif
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('numero_telefono','* Telefono:') !!}
              {!! Form::text('numero_telefono',null,array('placeholder' => 'Ingrese su Telefono','class'=>'form-control numbers')) !!}
              @if($errors->has('fecha_nac'))
                {!! $errors->first('numero_telefono','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('numero_telefono') }}</strong></span> --}}
                @endif
            </div>
          </div>

          <div class="form-row">
            <div class="from-group col-md-6">
              {!! Form::label('id_tipo_direccion','* Tipo Direccion:') !!}
              {!! Form::select('id_tipo_direccion', $tipo_direccion,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
              @if($errors->has('id_tipo_direccion'))
                {!! $errors->first('id_tipo_direccion','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_tipo_direccion') }}</strong></span> --}}
                @endif
            </div>
            <div class="from-group col-md-6">
              {!! Form::label('nombre_direccion','* Direccion:') !!}
              {!! Form::text('nombre_direccion',null,array('placeholder' => 'Ingrese direccion','class'=>'form-control')) !!}
              @if($errors->has('nombre_direccion'))
                {!! $errors->first('nombre_direccion','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('nombre_direccion') }}</strong></span> --}}
                @endif
            </div>
          </div> 
          <br>
          <div class="text-center">
            {!! Form::button('Crear Nuevo Usuario', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

{{--
     <div class="form-row">
    
    <div class="table-responsive">
      <table  class="table table-hover table-bordered table-condensed table-striped">
      <thead>
        <th class="info">TIPO DIRECCION</th>
        <th class="info">DIRECCION</th>
        <th class="info"">MODIFICAR</th>
        <th class="info"">ELIMINAR</th>
      </thead>
      <tbody>
       
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       
      </tr>
      </tbody>
      </table>
      </div>
      </div>
     

     {{-- 
    <button type="button" id="anadirdireccion" class="btn btn-link" href= "#nuevadireccion" data-toggle="modal">+ Añadir nueva direccion</button>
    <div class="modal fade" id="nuevadireccion">
        {{ csrf_field() }}
             <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title">Añadir Direccion</h2>
                  <button tyle="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>
                </div>
                <form action="{{URL::to('/usuario/store')}}" method="POST" id="form-direccion">
                <div class="modal-body">
                <input type="hidden" id="id_dir">
                  {{ Form::label('tipo_direccion','Tipo Direccion:') }}
                  {{ Form::select('tipo_direccion', $tipo_direccion,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) }}

                  {{ Form::label('direccion_usuario','Numero Telefono:') }}
                  {{ Form::text('direccion_usuario',null,array('placeholder' => 'Ingrese su Direccion','class'=>'form-control')) }}

                </div>
                <div class="modal-footer">
                  <button type="button" id="modificar" class="btn btn-primary">Guardar</button>
                  <input type="submit" class="btn btn-success" value="Save">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <div class="text-center">{{ Form::button('Editar Usuario', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
                </form>
                </div>
              </div>           
            </div>   
          </div>--}} 

@endsection