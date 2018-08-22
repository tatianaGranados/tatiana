$('#errorProf').hide();
$(document).on('click','.crearProf', function() {
		$('#crearProfe').modal('show');
		$('.form-horizontal').show();
		$('.modal-title').text('Crear Profesional');
});

	$("#addprof").click(function() {
		$.ajax({
			type: 'POST',
			url: '/titulacion/addProfesional',
			data: {
				'_token': $('input[name=_token]').val(),
				'apellidos': $('input[name=apellidos]').val(),
				'nombres': $('input[name=nombres]').val(),
				'doc_identidad': $('input[name=doc_identidad]').val(),   
				'sexo': $('select[name=sexo]').val(),
				'id_funcion': $('select[name=id_funcion]').val()
		},
			success: function(data){
				if ((data.errors)) {
				    $("#errorProf").show();
				    $('.error').text(data.errors['apellidos']);
				    $('.error').text(data.errors['nombres']);
				    $('.error').text(data.errors['doc_identidad']);
				    $('.error').text(data.errors['sexo']);
				    $('.error').text(data.errors['id_funcion']); 
				}else {
					$("p").remove(":contains('hidden')");
					if(data.id_funcion==10)//10 hace referencia a la funcion presidente
					{
						$('#selectPre').append("<option value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
	          $("#addprof").trigger("click");
						$('button').attr("data-dismiss","modal");
					}
					else if(data.id_funcion==11)//11 hace referencia a la funcion tutor
					{	
						$('#tutor').append("<option value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
					}
					else if(data.id_funcion==12)//12 hace referencia a la funcion decano
					{	
						$('#decano').append("<option value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
					}
					else if(data.id_funcion==13)//13 hace referencia a la funcion miembro
					{
						$('#selectMiembro1').append("<option value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
						$('#selectMiembro2').append("<option value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
						$('#selectMiembro3').append("<option value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
					}
				}
			},
		});
		$('#apellidos').val('');
		$('#nombres').val('');
		$('#doc_identidad').val('');
		$('#sexo').val();
		$('#id_funcion').val();
		$('#errorProf').hide();
});

function getvalue(id){
  $.ajax({
    type: 'get',
    url: 'showProfesional/'+id,
    success: function(data) {
      //console.log(data);
     return data;
      
    }
  });
}


$(document).ready(function(){
  $('#editPre').click(function(){
    $('#selectPre').change();
    $val =$('#selectPre').val();
    //console.log($valor);
    if($val ==-1){
    $('#alert').modal('show');

     }else{ 
     	var user;
    	$.ajax({
        type: 'get',
        url: '/titulacion/showProfesional/'+ $val,
        success: function(data) {
        $('.modal-title').text('Editar Profesional');
      	$('.deleteContent').hide();
      	$('#pid').val($(this).data('id'));
      	$('#apellidos2').val($(this).data('apellidos'));
      	$('#nombre2').val($(this).data('nombres'));
      	document.getElementById("pid").value = $val;
      	document.getElementById("apellidos2").value = data['apellidos'];
      	document.getElementById("nombres2").value = data['nombres'];
      	document.getElementById("doc_identidad2").value = data['doc_identidad'];
      	document.getElementById("sexo2").value = data['sexo'];
      	document.getElementById("id_funcion2").value = data['id_funcion'];
	    $("#prof").modal('show');
        //console.log(data);
      //$('#editAmbi').modal('show');    
    		
     	}
 		
 		}); 
	}
  }); 
});


$('.modal-footer').on('click', '.editPre', function() {
  $.ajax({
    type: 'POST',
    url: '/titulacion/editProfesional',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $("#pid").val(),
      'nombres': $('#nombres2').val(),
      'apellidos': $('#apellidos2').val(),   
      'doc_identidad': $('#doc_identidad2').val(),
      'id_funcion': $('#id_funcion2').val()
},
    success: function(data) {
    	//console.log(data);
      $('.selectPre'+data.id).replaceWith("<option class='edit"+data.id+"' value='"+data.id+"'>"+ data.apellidos+' '+data.nombres +"</option>");
    	//$('#selectMiembro1').append("<option value='"+data.id+"'>"+ data.nombres+ data.apellidos +"</option>");
    }
  });
});
