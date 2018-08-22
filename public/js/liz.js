$(document).ready(function (){
      $(function(){
        $.datepicker.setDefaults($.datepicker.regional["es"]);
        $('#fecha-inicio').datepicker({
          // buttonText: "Choose",
          // onlyButton: true,
          changeMonth: true,
          changeYear: true,
          showOn: "button",
          language: "es",
          autoclose: true,
          // minDate: "-20D", 
          // maxDate: "+20D", 
          // gotoCurrent: true,
          showMonthAfterYear: true,
          buttonImage: '/img/prueba.png',
          buttonImageOnly: true,
          // showOn: "focus",
          // numberOfMonths: 2, 
          buttonText: "Selecciona la Fecha de Inicio",
          dateFormat: "yy-mm-dd",
          // minDate: '-2m', 
          onClose: function(selectedDate){
            $('#fecha-fin').datepicker("option","minDate",selectedDate);
          } 
        });
        $('#fecha-fin').datepicker({
          // useCurrent: false,
          showOn: "button",
          buttonText: "Selecciona la Fecha de Fin de Gestion",
          buttonImage: '/img/prueba.png',
          buttonImageOnly: true,
          showMonthAfterYear: true,
          changeMonth: true,
          changeYear: true,
          // numberOfMonths: 3,
          language: "es",
          // defaultDate: '+3m', 
          // maxDate:  "+5M, -10D",
          showAnim: 'drop',
          showOptions: { direction: "down" },
          // maxDate:  $('fecha-inicio').val().'+2m',
          // minDate: "+3M", 
          autoclose: true,
          dateFormat: "yy-mm-dd",
          onClose: function(selectedDate){
            $('#fecha-inicio').datepicker("option","maxDate",selectedDate);
          } 
        });
      });
    });
   