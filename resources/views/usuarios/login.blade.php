@extends('layout.inicio')
@section('contenido')    
   <div class="inner-bg">
    <div class="container"> 
      <div class="row d-flex justify-content-center">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          <div class="form-top">
            <div class="text-center">
              <h3 style="color: #f8f9fa;">REGISTRO</h3>
            </div>
          </div>
        <div class="form-bottom">

            {{ Form::open(array('route' => 'usuarios.logear', 'method' => 'POST'), array('role'=> 'form-control')) }}
            {{ csrf_field() }}
          <form>
              <div class="form-group row">
                {{ Form::label('login', 'Ingrese su Login:',['class'=>' control-label col-sm-5','style' =>'color: #e2ecf7;']) }}
                <div class="col-sm-7">{{ Form::text('login',null, array('placeholder'=> 'Introduce su login', 'class' => 'form-control')) }}</div>
              </div>

              <div class="form-group row">
                {{ Form::label('password', 'Ingrese su Password:',['class'=>'control-label col-sm-5','style' =>'color: #e2ecf7;']) }}
                <div class="col-sm-7">{{ Form::password('password', ['placeholder'=>'Introduce su Password','class' => 'form-control']) }}</div>
              </div>
              <div class="text-center">{{ Form::button('Ingresar', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
                {{ Form::close()  }}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection