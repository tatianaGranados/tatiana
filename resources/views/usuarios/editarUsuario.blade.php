@extends('layout.master') 
@section('contenido') 
<div class="container">
  <div class="row">
    <div class="card">
      <div class="card-header card-header-primary text-center text-muted"><h5>EDICIÓN FORMULARIO DE REGISTRO</h5>
      </div>
      <div class="card-body">
        {{ Form::open(array('route' =>array('usuarios.update', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
          {{ method_field('PUT') }}
          <div class="form-row">
            <div class="form-group col-sm-5">
              {!! Form::label('login','* Login:')!!}
              {!! Form::text('login',$usuario->login,['placeholder' => $usuario->login, 'class'=>'form-control'] )!!}
              @if($errors->has('login'))
                {!! $errors->first('login','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('login') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-sm-6">
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
              {{ Form::label('doc_identidad','Documento de indentidad:')}}
              {{ Form::text('doc_identidad',$usuario->doc_identidad, array('placeholder'=> $usuario->doc_identidad, 'class' => 'form-control')) }}
              @if($errors->has('doc_identidad'))
                {!! $errors->first('doc_identidad','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('doc_identidad') }}</strong></span> --}}
              @endif
            </div>

            <div class="form-group col-md-4">
              {!! Form::label('id_tipo_Doc_identidad','Tipo documento:') !!}
              {{ Form::select('id_tipo_Doc_identidad', $tipoDocId, $usuario->tipo_doc_identidad->id, array('placeholder'=> $usuario->doc_identidad, 'class' => 'form-control')) }}
              @if($errors->has('id_tipo_Doc_identidad'))
                {!! $errors->first('id_tipo_Doc_identidad','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_tipo_Doc_identidad') }}</strong></span> --}}
              @endif
            </div>
              {{--   <select name="id_tipo_Doc_identidad" class="form-control">
                <option value='{{ $user->id_tipo_doc_identidad }}'>{{ $user->nombre_tipo_doc_identidad }}</option>  
                  @foreach ($tipoDocId as $tipoDoc)
                <option value="{{$tipoDoc->id}}">{{$tipoDoc->nombre_tipo_doc_identidad}}</option>
                  @endforeach 
                </select>--}}
            <div class="form-group col-md-4">
              {!! Form::label('ciudad_expedido_doc','Expedido en:') !!}
              <select name="ciudad_expedido_doc" class="form-control">
                <option value='{{ $usuario->ciudad_expedido_doc }}'>{{ $usuario->ciudad->nombre_ciudad }}</option>  
                  @foreach ($ciudad as $expedido)
                <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
                  @endforeach 
              </select>
              @if($errors->has('ciudad_expedido_doc'))
                {!! $errors->first('ciudad_expedido_doc','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('ciudad_expedido_doc') }}</strong></span> --}}
              @endif
            </div>
          </div>

          <div class="form-row">
            {!! Form::label('apellidos','Apellidos:',['class'=>'form-group col-md-1']) !!}
            <div class="form-group col-md-11">
            <input type="text" class="form-control" id="exampleInputName2" name="apellidos" value="{{ $usuario->apellidos }}">
            @if($errors->has('apellidos'))
              {!! $errors->first('apellidos','<p class="rounded msjAlert">:message</p>') !!}
              {{-- <span class="text-danger"><strong>{{ $errors->first('apellidos') }}</strong></span> --}}
            @endif
            </div>
          </div>
        
          <div class="form-row">
            {!! Form::label('nombres','Nombres:',['class'=>'form-group col-md-1']) !!}
            <div class="form-group col-md-11">
            {!! form::text('nombres',$usuario->nombres,array('placeholder'=>$usuario->nombres, 'class'=>'form-control')) !!}
            @if($errors->has('nombres'))
              {!! $errors->first('nombres','<p class="rounded msjAlert">:message</p>') !!}
              {{-- <span class="text-danger"><strong>{{ $errors->first('nombres') }}</strong></span> --}}
            @endif
            </div>
          </div>

          <div class="form-row">
            {!! Form::label('fecha_nac','Fecha de nacimiento:',['class'=>'form-group col-md-2']) !!}
            <div class="form-group col-md-10">
            {!! form::text('fecha_nac',$usuario->fecha_nac,array('placeholder'=>$usuario->fecha_nac, 'class'=>'form-control')) !!}
            @if($errors->has('fecha_nac'))
              {!! $errors->first('fecha_nac','<p class="rounded msjAlert">:message</p>') !!}
              {{-- <span class="text-danger"><strong>{{ $errors->first('fecha_nac') }}</strong></span> --}}
            @endif
            </div>
          </div>
          
          <div class=" form-row">
            <div class="form-group col-md-4">
              {!! Form::label('pais_usuario','Pais:') !!}
              <select name="pais_usuario" class="form-control" id="id_pais">
                <option value='{{ $usuario->provincia->id }}'>{{ $usuario->provincia->ciudad->pais->nombre_pais}}</option>  
                  @foreach ($pais as $paises)
                <option value="{{$paises->id}}">{{$paises->nombre_pais}}</option>
                  @endforeach 
              </select>
              @if($errors->has('pais_usuario'))
                {!! $errors->first('pais_usuario','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('pais_usuario') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-md-4">
              {!! Form::label('ciudad_usuario','Ciudad:') !!}
              <select name="ciudad_usuario" class="form-control" id="id_ciudad">
                <option value='{{ $usuario->provincia->id}}'>{{ $usuario->provincia->ciudad->nombre_ciudad,$usuario->provincia->nombre_provincia}}</option>  
                
              </select>
              @if($errors->has('ciudad_usuario'))
                {!! $errors->first('ciudad_usuario','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('ciudad_usuario') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-md-4">
              {!! Form::label('id_provincia','Provincia:') !!}
              <select name="id_provincia" class="form-control" id="id_provincia">
                <option value='{{ $usuario->provincia->id }}'>{{ $usuario->provincia->nombre_provincia }}</option> 
              </select>
              @if($errors->has('id_provincia'))
                {!! $errors->first('id_provincia','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('provincia_usuario') }}</strong></span> --}}
              @endif
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              {!! Form::label('sexo','Genero:') !!}
              <input type="text" class= "form-control"  id="sexoUsuario"  name="sexo" list="Sexo" value="{{ $usuario->sexo }}">
                <datalist id="Sexo">
                  <option value="Femenino">
                  <option value="Masculino">
                </datalist>
              @if($errors->has('sexo'))
                {!! $errors->first('sexo','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('sexo') }}</strong></span> --}}
              @endif
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('id_estado_civil','Estado civil:') !!}
              <select name="id_estado_civil" class="form-control">
                <option value='{{ $usuario->estado_civil->id}}'>{{ $usuario->estado_civil->estado_civil }}</option>  
                  @foreach ($estado as $estado)
                <option value="{{$estado->id}}">{{$estado->estado_civil}}</option>
                  @endforeach 
              </select>
              @if($errors->has('id_estado_civil'))
                {!! $errors->first('id_estado_civil','<p class="rounded msjAlert">:message</p>') !!}
                {{-- <span class="text-danger"><strong>{{ $errors->first('id_estado_civil') }}</strong></span> --}}
              @endif
            </div>
          </div>
    
          <div class="text-center">{{ Form::button('Editar Usuario', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
        {{ Form::close() }}
      </div><!--cierre card body-->
    </div>
  </div>
</div>
@endsection