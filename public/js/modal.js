$('#errorAmb').hide();
$('#errorTipoAmb').hide();
$('#errorUnidad').hide();
$('#errorMax').hide();
$(document).on('click','.crearAmb', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Crear Ambiente');
  });

  $("#add").click(function() {
    $.ajax({
      type: 'POST',
      url: '/titulacion/addAmbiente',
      data: {
        '_token': $('input[name=_token]').val(),
        'nombre_ambiente': $('input[name=nombre_ambiente]').val(),
        'id_tipo_ambiente': $('select[name=id_tipo_ambiente]').val(),   
        'id_unidad': $('select[name=id_unidad]').val(),
        'max_estudiantes': $('input[name=max_estudiantes]').val()
      },
      success: function(data){
      console.log(data);
        if ((data.errors)) {
          if(data.errors['nombre_ambiente']!=null){
            $("#errorAmb").show();
            $('.error').text(data.errors['nombre_ambiente']);
          }
          else if(data.errors['id_tipo_ambiente']!=null){
            $('#errorTipoAmb').show();
            $('.error').text(data.errors['id_tipo_ambiente']);
          }  
          else if(data.errors['id_unidad']!=null){
              $('#errorUnidad').show();
              $('.error').text(data.errors['id_unidad']);
          }
          else{
            $('#errorMax').show();
            $('.error').text(data.errors['max_estudiantes']);
          }
        }else {
          $("p").remove(":contains('hidden')");
          $('#select').append("<option value='"+data.id+"'>"+ data.nombre_ambiente +"</option>");
          $('.addAmb').click(function(){
          $('button').attr("data-dismiss","modal");
          });
        }
        
      },
    });
   
    $('#nombre_ambiente').val('');
    $('#max_estudiantes').val('');
    $('#id_tipo_ambiente').val('');
    $('#id_unidad').val();
    $('#errorTipoAmb').hide();
    $('#errorUnidad').hide();
    $('#errorAmb').hide();
    $('#errorMax').hide();

  });



//editar ambiente
function getvalue(id){
  $.ajax({
    type: 'get',
    url: 'showAmbiente/'+id,
    success: function(data) {
      //console.log(data);
     return data;
      
    }
  });
}
$(document).ready(function(){
  $('#editAmb').click(function(){
    $('#select').change();
    $valor =$('#select').val();
      //console.log($valor);
    if($valor ==-1){
      $('#alert').modal('show');

    }else{ 
      var ambiente;
        $.ajax({
          type: 'get',
          url: '/titulacion/showAmbiente/'+ $valor,
          success: function(data) {
          console.log(data);
      $('.modal-title').text('Editar Ambiente');
      $('.deleteContent').hide();
      $('.form-horizontal').show();
      $('#fid').val($(this).data('id'));
      $('#nombre_ambiente2').val($(this).data('nombre_ambiente'));
      document.getElementById("fid").value = data['id'];
      document.getElementById("nombre_ambiente2").value = data['nombre_ambiente'];
      document.getElementById("max_estudiantes2").value = data['max_estudiantes'];
      document.getElementById("id_tipo_ambiente2").value = data['id_tipo_ambiente'];
      document.getElementById("id_unidad2").value = data['id_unidad'];
      $('#editAmbi').modal('show');
          }
      }); 

 
    }
  }); 
});

$('.modal-footer').on('click', '.edit', function() {
  $.ajax({
    type: 'POST',
    url: '/titulacion/editAmbiente',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $("#fid").val(),
      'nombre_ambiente': $('#nombre_ambiente2').val(),
      'id_tipo_ambiente': $('#id_tipo_ambiente2').val(),   
      'id_unidad': $('#id_unidad2').val(),
      'max_estudiantes': $('#max_estudiantes2').val()
},
    success: function(data) {
      document.getElementById('select').getElementsByTagName('option')[$("#fid").val()].innerHTML = $('#nombre_ambiente2').val();
      $('.edit'+data.id).replaceWith("<option class='edit"+data.id+"' value='"+data.id+"'>"+ data.nombre_ambiente +"</option>");
    }
  });
});
