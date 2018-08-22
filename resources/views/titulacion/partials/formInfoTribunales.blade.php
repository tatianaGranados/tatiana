<div class="col-md-2">
	<a class="crearProf btn btn-info btn-sm " href="#" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
</div>
<div class="form-group row">
	{!! Form::label('presidente','Presidente:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
		{{ csrf_field() }}
	<select name="presidente" class="form-control" id="selectPre" >
        <option value='-1'>Seleccione</option>
            @foreach ($funcionPresidentes as $presidente)
            <option value="{{$presidente->id_us_sig_sub_rol}}" class="edit{{$presidente->id}}">{{$presidente->nombre_completo_user}}</option>
            @endforeach 
            <input type="hidden" name="presidente_funcion" value="{{ $presidente->id }}">
    </select>
	</div>
	<div class="col-md-2 col-lg-2">
		<a href="#" class="editPre btn btn-success btn-sm"  id="editPre" data-toggle="modal"><i class="fa fa-pencil"></i> Modificar </a>
	</div>
</div>

<div class="form-group row">
	{!! Form::label('miembro1','Miembro 1:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	<select name="miembro1" class="form-control" id="selectMiembro1" >
        <option value='-1'>Seleccione</option>
            @foreach ($funcionMiembro as $miembro)
            <option value="{{$miembro->id_us_sig_sub_rol}}" class="edit{{$miembro->id}}"> {{$miembro->nombre_completo_user}}</option>
            @endforeach 
            <input type="hidden" name="miembro1_funcion" value="{{ $miembro->id }}">
    </select>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi1" data-target="#modificarMi1" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar</a>
	</div>
</div>


<div class="form-group row">
	{!! Form::label('miembro2','Miembro 2:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	<select name="miembro2" class="form-control" id="selectMiembro2" >
        <option value='-1'>Seleccione</option>
            @foreach ($funcionMiembro as $miembro)
            <option value="{{$miembro->id_us_sig_sub_rol}}" class="edit{{$miembro->id}}"> {{$miembro->nombre_completo_user}}</option>
            @endforeach
            <input type="hidden" name="miembro2_funcion" value="{{ $miembro->id }}">
     
    </select>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi2" data-target="#modificarMi2" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar</a>
	</div>
</div>

<div class="form-group row">
	{!! Form::label('miembro3','Miembro 3:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	<select name="miembro3" class="form-control" id="selectMiembro3" >
        <option value='-1'>Seleccione</option>
            @foreach ($funcionMiembro as $miembro)
            <option value="{{$miembro->id_us_sig_sub_rol}}" class="edit{{$miembro->id}}"> {{$miembro->nombre_completo_user}}</option>
            @endforeach 
            <input type="hidden" name="miembro3_funcion" value="{{ $miembro->id }}">
    </select>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi3" data-target="#modificarMi3" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar</a>
	</div>
</div>


<div class="form-group row">
	{!! Form::label('tutor','Tutor:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	<select name="tutor" class="form-control" id="tutor" >
        <option value='-1'>Seleccione</option>
            @foreach ($funcionTutor as $tutor)
            <option value="{{$tutor->id_us_sig_sub_rol}}" class="edit{{$tutor->id}}"> {{$tutor->nombre_completo_user}}</option>
            @endforeach
            <input type="hidden" name="tutor_funcion" value="{{ $tutor->id }}">
    </select>
	{{-- {!! Form::select('tutor',$funcionTutor->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!} --}}
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarTutor" data-target="#modificarTutor" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar</a>
	</div>
</div>

<div class="form-group row">
	{!! Form::label('decano','Decano:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	<select name="decano" class="form-control" id="decano" >
        <option value='-1'>Seleccione</option>
            @foreach ($funcionDecano as $decano)
            <option value="{{$decano->id_us_sig_sub_rol}}" class="edit{{$decano->id}}">{{$decano->nombre_completo_user}}</option>
            @endforeach
            <input type="hidden" name="decano_funcion" value="{{ $decano->id}}">
           
    </select>
	{{-- {!! Form::select('decano',$funcionDecano->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!} --}}
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarDecano" data-target="#modificarDecano" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar</a>
	</div>
</div>



{{-- modales --}}

