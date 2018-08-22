<table class="table table-striped table-bordered table-hover table-condensed">
@foreach($acceso as $accesos)
	<tr class="table-info">
	<th>{{ $accesos->nombre_acceso }}</th>
	<th class="table-info"></th>
	@foreach($subAcceso as $subAccesos)
		<tr >
		<!--<td>{{ $subAccesos->id }}</td>-->
		@if($subAccesos->acceso->id==$accesos->id)
			<td>{{ $subAccesos->nombre_sub_acceso }}</td>

			@if($subAccesos->acceso->nombre_acceso=='Menu usuario')
				{{--<td>{{ Form::checkbox('subAcceso[]',$subAccesos->id,true)}}</td>--}}
				<td><input name="permiso[]" type="checkbox" checked = "checked" value="{{ $subAccesos->id }}"></td>
			@else
				<!--td>{{-- Form::checkbox('subAcceso',$subAccesos->id,null) --}}</td-->
				<td><input name="permiso[]" type="checkbox" value="{{ $subAccesos->id }}"></td>
			@endif

		@endif

		</tr>
	@endforeach

@endforeach 
</table>
