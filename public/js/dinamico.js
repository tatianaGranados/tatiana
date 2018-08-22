$(document).ready(function(){


	$("#id_pais").change(function(event){

	var seleccion = $(this).val();
	console.log(seleccion);

		$.ajax({
	  	type: 'POST',
	  	url : "/usuarios/ciudades/"+seleccion,
	  	data: {_token: $('input[name=_token]').val()},
	  	success : function(data){
	  		var ciudades='<option selected disabled hidden value="">Seleccione</option>';
	  		$.each(data, function(index, value){
	  				ciudades+='<option value="'+index+'">'+value+'</option>';
	  			});

	  			$('#id_ciudad').html(ciudades);


	  		}
		});
	}); 

	$("#id_ciudad").change(function(event){

	var seleccion = $(this).val();

	$.ajax({
	  type: 'POST',
	  url : "/usuarios/provincias/"+seleccion,
	  data: {_token: $('input[name=_token]').val()},
	  success : function(data){
	  var provincias='<option selected disabled hidden value="">Seleccione</option>';
	  $.each(data, function(index, value){
	  		provincias+='<option value="'+index+'">'+value+'</option>';
	 
	  });

	  $('#id_provincia').html(provincias);


	 }
	});
		//console.log(seleccion);
	}); 
});

