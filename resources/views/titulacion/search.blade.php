@extends('layout.master')
@section('contenido')

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
<div class="container">
			@if(isset($details))
			<p> el resultado de la busqueda <b> {{ $query }} </b> es:</p>
			<h2>Usuarios encontrados</h2>
			<table class="table table-sm table-hover table-bordered table-condensed table-striped table-responsive-lg">
				<thead>
					<tr>
						<th>NOMBRES</th>
						<th>APELLIDOS</th>
						<th>DOC IDENTIDAD</th>
						<th>AGREGAR</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->nombres}}</td>
						<td>{{$user->apellidos}}</td>
						<td>{{$user->doc_identidad}}</td>
						<td>{!! Form::checkbox('agregar[]',$user->id) !!}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
          		{!! Form::button('Registrar Usuario', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
        </div> 
			
			@endif
		</div>

@endsection

