@extends('layout.master')
@section('contenido')
<table border=1>
@foreach($subAcceso as $permisos)
<tr >
	<td>{{ $permisos->id }}</td>
	<td>{{ $permisos->acceso->nombre_acceso }}</td>
	<td>{{ $permisos->nombre_sub_acceso}}</td>
</tr>

@endforeach
</table>

@endsection