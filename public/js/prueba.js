// $(document).ready(function(){
// 	var mytable=$("#mytable")
// })


$(document).ready(function(){
		// $(document).on('click','#buscarEst',function(event){
		// 	$('#listaUsuarios').show(400);
		// 	var seleccion=$(this).val();
		// 	console.log(seleccion);
		// });
		// var usuarios=[]

		$(document).on('click','#buscar',function(event){
			var seleccion=$(this).val();
			$('.modal-title').text('Buscar Estudiante');
			$('#listaUsuarios').hide(400);
			$('#ci').val('');
			$('#nombre').val('');
			$('#apellido').val('');
		});
		$('#buscarEst').click(function(event) {
			$('#listaUsuarios').show(400);
			var ci=$('#ci').val();
			var nombre=$('#nombre').val();
			var apellido=$('#apellido').val();
			var id_quitar = new Array();
			a = document.getElementsByName('id_busqueda[]');
			a.forEach(function(x){id_quitar.push(x.value)});
			console.log('--->'+id_quitar);

			$.ajax({
				type: 'POST',
				url: '/titulacion/buscar/',
				data: {'ci':ci,'nombre':nombre,'apellido':apellido,'id_quitar':id_quitar,'_token': $('input[name=_token]').val()},
				
				success : function(data){
					usuarios='<table class="table table-sm table-condensed table-striped table-bordered"><thead><tr class="text-center table-info"><td>COD SIS</td><td>NOMBRE COMPLETO</td><td>CARRERA</td><td>ACCION</td></tr></thead><tbody>';
					for(var i=0;i<data.length;i++){
						usuarios+='<tr>'+
						'<td>'+data[i].cod_sis+'</td>'+
						'<td>'+data[i].nombres+" "+data[i].apellidos+'</td>'+
						'<td>'+data[i].nombre_plan+'</td>'+
						'<td><button class="btn btn-success glyphicon glyphicon-edit" data-dismiss="modal" onclick="agregarEst('+data[i].id_usuario_asignar_sub_rol+')">AGREGAR</button></td>'+
						'</tr>';
					}
					// console.log(data);
	  			// });
	  			usuarios+='</tbody></table>';
	  			$('#listaUsuarios').html(usuarios);
	  		}
	  	});
		});
	});
	function agregarEst(id){
		$('#mostrarUsuario').show(400);
		var id_usuario_asignar_sub_rol=id;
		//console.log(id_usuario_asignar_sub_rol);
		$.ajax({
			type:'POST',
			url:'/titulacion/buscarUsuario/',
			data:{'id':id,'_token': $('input[name=_token]').val()},
			success:function(data){
				//console.log(data);
				
				$('#mostrarDatos').append(
					"<div class='form-group row'>"+
						"<input class='form-control' name='id_usuario[]' value='"+data.id_ins+"' type='hidden'>"+
						"<input name='id_busqueda[]' value='"+data.id_usuario+"' type='hidden'>"+
						"<label class='col-md-2'>Nombres:</label>"+
						"<div class='col-md-6'>"+
						"<input class='form-control' name='nombre' value='"+data.nombres+"'>"+
						"</div>"+
					"</div>"+
					"<div class='form-group row'>"+
						"<label class='col-md-2'>Apellidos:</label>"+
						"<div class='col-md-6'>"+
						"<input class='form-control' name='apellido' value='"+data.apellidos+"'>"+
						"</div>"+
					"</div>"+
					"<div class='form-group row'>"+
						"<label class='col-md-2'>Carrera:</label>"+
						"<div class='col-md-6'>"+
						"<input class='form-control' name='carrera' value='"+data.nombre_plan+"'>"+
						"</div>"+
					"</div>"+
					"</br>"
					);			
			}

			// console.log(usuarios);
		});

		// post('buscarUsuario',{'id':id_usuario_asignar_sub_rol},function(data){
			// console.log(data);
		// });
		// var id=$('#idUsuario').val();
		// var text=$('#idUsuario').text();
		// console.log(text);
		
	}
	// function search_sis(){
	// 	// cod_sis = document.getElementById("search_sis").value;
	// 	// $.get('search/'+cod_sis, function(data, status){
	// 	// var array=new Array(data);
	// 	// var contador;
	// 	// console.log(array);

 //    // });

	// }