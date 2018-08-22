@extends('layout.master') 
@section('contenido')    

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>INFORMACION BIOGRAFICA DE USUARIO</strong></div>
  <div class="card-body"> 
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="/img/img_avatar3.png" class="img-thumbnail img-responsive img-raised" width="220" height="150">
      </div> 
      <div class="col-md-8">
        <table class="table table-sm table-hover table-condensed table-bordered">
          <tbody>
            <tr>
              <th class="table-info"  WIDTH="255">CI:</th>
                <td>{{ $usuario->doc_identidad }}</td>  
            </tr>
            <tr>
              <th class="table-info">TIPO DE DOCUMENTO:</th>
              <td class="text-uppercase">{{ $usuario->tipo_doc_identidad->nombre_tipo_doc_identidad }}</td>
            </tr>
            <tr>
              <th class="table-info">DOCUMENTO EXPEDIDO EN:</th>
              <td class="text-uppercase">{{ $usuario->ciudad->nombre_ciudad }}</td>
            </tr>
            <tr>
              <th class="table-info">NOMBRES:</th>
              <td class="text-uppercase">{{ $usuario->nombres }}</td>
            </tr>
            <tr>
              <th class="table-info">APELLIDOS:</th>
              <td class="text-uppercase">{{ $usuario->apellidos }}</td>
            </tr>
            <tr>
              <th class="table-info">FECHA DE NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuario->fecha_nac }}</td>
            </tr>
            <tr>
              <th class="table-info">PAIS NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuario->provincia->ciudad->pais->nombre_pais }}</td>
            </tr>
            <tr>
              <th class="table-info">CIUDAD DE NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuario->provincia->ciudad->nombre_ciudad }}</td>
            </tr>
            <tr>
              <th class="table-info">PROVINCIA NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuario->provincia->nombre_provincia }}</td> 
            </tr>
            <tr>
              <th class="table-info">GENERO:</th>
              <td class="text-uppercase">{{ $usuario->sexo }}</td>
            </tr>
            <tr>
              <th class="table-info">ESTADO CIVIL:</th>
              <td class="text-uppercase">{{ $usuario->estado_civil->estado_civil }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>CORREO USUARIO</strong></div>
  <div class="card-body">
    <table class="table table-condensed table-bordered table-responsive-lg">
      <thead>
        <tr class="text-center table-info">
          <th>TIPO DE CORREO</th>
          <th>CORREO ELECTRONICO</th>
          <th>ACTIVO</th>
          <th>MODIFICAR</th>
          <th>ELIMINAR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($usuarioEmail as $usuarioEmail)
          <td class="text-uppercase">
             @if(!is_null($usuarioEmail))  
               {{ $usuarioEmail->nombre_tipo_email }} 
            @else
            <h4>SIN TIPO CORREO</h4>
            @endif
          </td>
          <td>
            @if(!is_null($usuarioEmail)) 
               {{ $usuarioEmail->email }} 
            @else
              <h4>USUARIO SIN CORREO</h4>
            @endif 
          </td>  
          <td>
             @if(!is_null($usuarioEmail))  
               {{ $usuarioEmail->email_activo}} 
            @else
            <h4>SIN TIPO CORREO</h4>
            @endif 
          </td>
          <td class="text-center"><a class="btn btn-success btn-sm" href="#modificarEmail"  data-target="#modificarEmail{{ $usuarioEmail->id }}" data-toggle="modal" ><i class="fa fa-pencil"></i>Modificar</a> </td>
          
          
                <div class="modal fade" id="modificarEmail{{ $usuarioEmail->id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Modificar Email</h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
                      </div>
                      
                      <div class="modal-body">
                     {{-- {{ $usuarioEmail->email }} --}}
                    {!! Form::open(array('route' =>array('usuarios.modificarEmail', $usuarioEmail->id), 'method' => 'POST'), array('role'=> 'form')) !!}
                    
                          <div class="form-row"> 
                              <div class="form-group col-md-12">

                                {{ Form::label('tipo_email','Tipo Correo Electronico:') }}
                                {{ Form::select('tipo_email', $tipo_email,$usuarioEmail->id_tipo_email, ['placeholder'=>$usuarioEmail->nombre_tipo_email, 'class' => 'form-control']) }}

                              </div>
                              <div class="form-group col-md-12">
                                {{ Form::label('email_usuario','Correo electronico:') }}
                                {{ Form::email('email_usuario',$usuarioEmail->email,array('placeholder' => 'example@gmail.com','class'=>'form-control')) }}
                              </div>
                            </div>
                                  

                      </div>
                      <div class="modal-footer">
                           
                            {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                           <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button> 

                          
                      </div>
                                  
                     </div>              
                 </div> 
                 {{ Form::close() }}
                          
                </div>
          <td class="text-center">{!! Form::open(array('route' =>array('usuarios.eliminarEmail',$usuarioEmail->id),'method'=>'delete')) !!}
          {{ Form::button(' Eliminar', array('type'=> 'submit','class'=>'btn btn-danger fa fa-trash')) }}
          {!! Form::close() !!}</td>
          
         
        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-primary" href="#ventanaEmail" data-toggle="modal" ><i class="fa fa-plus fa-fw"></i> NUEVO EMAIL</a>

        <div class="modal fade" id="ventanaEmail">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title">Agregar Email</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
                </div>
                
                <div class="modal-body">
               
              {{ Form::open(array('route' =>array('usuarios.crearEmail', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
              {{ csrf_field() }}
                  <div class="form-row"> 
                    <div class="form-group col-md-12">

                      {{ Form::label('tipo_email','Tipo Correo Electronico:') }}
                      {{ Form::select('tipo_email', $tipo_email,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) }}

                    </div>
                    <div class="form-group col-md-12">
                      {{ Form::label('email_usuario','Correo electronico:') }}
                      {{ Form::email('email_usuario',null,array('placeholder' => 'example@gmail.com','class'=>'form-control')) }}
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                     
                      {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button> 

                    
                </div>
                            
               </div>              
           </div> 
           {{ Form::close() }}
                    
        </div>
  </div><!--cierre panel body-->
</div><!--cierre panel card-->




<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>TELEFONO USUARIO</strong></div>
  <div class="card-body">
    <table class="table table-condensed table-bordered table-responsive-md">
      <thead>
        <th class="text-center table-info">TIPO DE TELEFONO:</th>
        <th class="text-center table-info">TELEFONO</th>
        <th class="text-center table-info">MODIFICAR</th>
        <th class="text-center table-info">ELIMINAR</th>
      </thead>
      <tbody>
        <tr>
        @foreach($usuarioTelf as $usuarioTelf)
          <td>
           @if(!is_null($usuarioTelf))
              {{ $usuarioTelf->nombre_tipo_telefono }} 
            @else
              <h4>SIN TIPO TELEFONO</h4>
            @endif  
          </td>
          <td >
            @if(!is_null($usuarioTelf))
               {{ $usuarioTelf->numero_telefono }}  
            @else
              <h4>USUARIO SIN TELEFONO</h4>
            @endif 
          </td>  
          
          <td class="text-center"><a class="btn btn-success btn-sm" href="#modificarTelefono"  data-target="#modificarTelefono{{ $usuarioTelf->id }}" data-toggle="modal" ><i class="fa fa-pencil"></i> Modificar</a></td>
          
          
                <div class="modal fade" id="modificarTelefono{{ $usuarioTelf->id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Modificar Telefono</h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
                      </div>
                      
                      <div class="modal-body">
                     
                    {!! Form::open(array('route' =>array('usuarios.modificarTelefono', $usuarioTelf->id), 'method' => 'POST'), array('role'=> 'form')) !!}
                    
                          <div class="form-row"> 
                              <div class="form-group col-md-12">

                                {{ Form::label('tipo_telefono','Tipo Correo Electronico:') }}
                                {{ Form::select('tipo_telefono', $tipo_telefono,$usuarioTelf->id_tipo_telefono, ['placeholder'=>$usuarioTelf->nombre_tipo_telefono, 'class' => 'form-control']) }}

                              </div>
                              <div class="form-group col-md-12">
                                {{ Form::label('telefono_usuario','Correo electronico:') }}
                                {{ Form::text('telefono_usuario',$usuarioTelf->numero_telefono,array('class'=>'form-control')) }}
                              </div>
                            </div>
                                  

                      </div>
                      <div class="modal-footer">
                           
                            {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                           <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button> 

                          
                      </div>
                                  
                     </div>              
                 </div> 
                 {{ Form::close() }}
                          
                </div>
          <td class="text-center">{!! Form::open(array('route' =>array('usuarios.eliminarTelefono',$usuarioTelf->id),'method'=>'delete')) !!}
          {{ Form::button(' Eliminar', array('type'=> 'submit','class'=>'btn btn-danger fa fa-trash')) }}
          {!! Form::close() !!}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
   
    <a class="btn btn-primary" href="#ventanaTelefono" data-toggle="modal" ><i class="fa fa-plus fa-fw"></i> NUEVO TELEFONO</a>
    <div class="modal fade" id="ventanaTelefono">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title">Agregar Telefono</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
                </div>
                
                <div class="modal-body">
               
              {{ Form::open(array('route' =>array('usuarios.crearTelefono', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
              {{ csrf_field() }}
                  <div class="form-row">
                    <div class="form-group col-md-12">
                     {{ Form::label('tipo_telefono','Tipo Telefono:') }}
                     {{ Form::select('tipo_telefono', $tipo_telefono,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-md-12">
                      {{ Form::label('telefono_usuario','Telefono:') }}
                      {{ Form::text('telefono_usuario',null,array('placeholder' => 'Ingrese su Telefono','class'=>'form-control')) }}
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                     
                      {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button> 

                    
                </div>
                            
               </div>              
           </div> 
           {{ Form::close() }}
      </div>

  </div><!--cierre panel body-->
</div><!--cierre card-->

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>DIRECCION DE USUARIO</strong></div>
  <div class="card-body">
    <table class="table table-condensed table-bordered table-responsive-md">
      <thead>
        <tr class="text-center table-info">
          <th>TIPO DE DIRECCIÓN</th>
          <th>DIRECCIÓN</th>
          <th>MODIFICAR</th>
          <th>ELIMINAR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         @foreach($usuarioDir as $usuarioDir)
          <td class=" text-uppercase">

           @if(!is_null($usuarioDir))
               {{ $usuarioDir->nombre_tipo_direccion }} 
            @else
              <h4>sin tipo Direccion</h4>
            @endif 
          </td>
          <td class="text-uppercase">
            @if(!is_null($usuarioDir))
              {{ $usuarioDir->nombre_direccion }}   
            @else
              <h4>Usuario sin direccion</h4>
            @endif
          </td>  

          <td class="text-center"><a class="btn btn-success btn-sm" href="#modificarDireccion"  data-target="#modificarDireccion{{ $usuarioDir->id }}" data-toggle="modal" ><i class="fa fa-pencil"></i> Modificar</a></td>
          
          
                <div class="modal fade" id="modificarDireccion{{ $usuarioDir->id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Modificar Direccion</h2>
                          <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
                      </div>
                      
                      <div class="modal-body">
                     
                    {!! Form::open(array('route' =>array('usuarios.modificarDireccion', $usuarioDir->id), 'method' => 'POST'), array('role'=> 'form')) !!}
                    
                          <div class="form-row"> 
                              <div class="form-group col-md-12">

                                {{ Form::label('tipo_direccion','Tipo Correo Electronico:') }}
                                {{ Form::select('tipo_direccion', $tipo_direccion,$usuarioDir->id_tipo_direccion, ['placeholder'=>$usuarioDir->nombre_tipo_direccion, 'class' => 'form-control']) }}

                              </div>
                              <div class="form-group col-md-12">
                                {{ Form::label('direccion_usuario','Correo electronico:') }}
                                {{ Form::text('direccion_usuario',$usuarioDir->nombre_direccion,array('class'=>'form-control')) }}
                              </div>
                            </div>
                                  

                      </div>
                      <div class="modal-footer">
                           
                            {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                           <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button> 

                          
                      </div>
                                  
                     </div>              
                 </div> 
                 {{ Form::close() }}
                          
                </div>
          
          <td class="text-center">{!! Form::open(array('route' =>array('usuarios.eliminarDireccion',$usuarioDir->id),'method'=>'delete')) !!}
          {{ Form::button(' Eliminar', array('type'=> 'submit','class'=>'btn btn-danger fa fa-trash')) }}
          {!! Form::close() !!}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{-- <a class="btn btn-primary" href="#"><i class="fa fa-plus fa-fw"></i> NUEVA DIRECCION</a> --}}
    <a class="btn btn-primary" href="#ventanaDireccion" data-toggle="modal" ><i class="fa fa-plus fa-fw"></i> NUEVA DIRECCION</a>
      <div class="modal fade" id="ventanaDireccion">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title">Agregar Direccion</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
                </div>
                
                <div class="modal-body">
               
                   {{ Form::open(array('route' =>array('usuarios.crearDireccion', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
                   {{ csrf_field() }}
                <div class="form-row">
                  <div class="from-group col-md-12">
                  {{ Form::label('tipo_direccion','Tipo Direccion:') }}
                  {{ Form::select('tipo_direccion', $tipo_direccion,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) }}
                </div>
                  <div class="from-group col-md-12">
                  {{ Form::label('direccion_usuario','Direccion:') }}
                  {{ Form::text('direccion_usuario',null,array('placeholder' => 'Ingrese direccion','class'=>'form-control')) }}
                  </div>
                  

                </div>  
                <div class="modal-footer">
                     
                      {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button> 

                    
                </div>
                            
               </div>              
           </div> 
           {{ Form::close() }}
                    
        </div>
  </div><!--cierre panel body-->
</div><!--cierre panel card-->

@endsection






