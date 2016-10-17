$(document).ready(function(e) {
 $('.agregarpresupuesto').click(function () {
        
    var idCliente = $(this).attr('id');
    $('#id_agregarPresupuesto').val(idCliente);
  });
 
 $('.agregarllamada').click(function () {
        
    var idCliente = $(this).attr('id');
    $('#id_agregarLlamada').val(idCliente);
  });
 
  $("#form-alta-presupuesto").submit(function(e) {
      var url = "../../php/presupuesto/altaTrabajos.php"; // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#form-alta-presupuesto").serialize(), // serializes the form's elements.
             success: function(data)
             {
                $("#form-alta-presupuesto")[0].reset();
                $("#msj_ajax_trabajo").html(data);
              }
           });
      e.preventDefault(); // avoid to execute the actual submit of the form.       
  });
  //Dar de Alta las LLamadas
  $("#form-alta-llamada").submit(function(e) {
      var url = "../../php/presupuesto/altaLlamada.php"; // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#form-alta-llamada").serialize(), // serializes the form's elements.
             success: function(data)
             {
                $("#form-alta-llamada")[0].reset();
                $("#ajax_register_Llamada").html(data);
              }
           });
      e.preventDefault(); // avoid to execute the actual submit of the form.       
  });
  //para buscar
  $('#filtrar').keyup(function () {

    var rex = new RegExp($(this).val(), 'i');
    $('.buscar tr').hide();
    $('.buscar tr').filter(function () {
        return rex.test($(this).text());
    }).show();
  }); 

  //ALta de CLIENTE
  $("#form-alta").submit(function(e) {
      var url = "../../php/clientes/altaCliente.php"; // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#form-alta").serialize(), // serializes the form's elements.
             success: function(data)
             {
                $("#form-alta")[0].reset();
                $("#msj_ajax").html(data);
             }
           });
      e.preventDefault(); // avoid to execute the actual submit of the form.       
  });

   //historial de llamdas.
  $(".llamadas").click(function(e) {
      var type = "POST";
      var url = "../../php/presupuesto/historialLlamadas.php";
      var parametros = $(this).serialize();
      $.ajax({
             type: type,
             url: url,
             data: parametros,
             success: function(datos)
             {
                $(".mostrarTabla").html(datos);
             }
           });
      e.preventDefault();
  });

  //ALTA de NOTEBBOK
  $( "#form-guardar-AltaNotebook" ).submit(function( event ) {
    var parametros = $(this).serialize();
     $.ajax({
        type: "POST",
        url: "../../php/presupuesto/altaNotebook.php",
        data: parametros,
        success: function(datos){
        $("#ajax_register_Note").html(datos);
        }
    });
    event.preventDefault();
  }); 

  //ALTA de NETBOOK
  $( "#form-guardar-AltaNetbook" ).submit(function( event ) {
    var parametros = $(this).serialize();
     $.ajax({
        type: "POST",
        url: "../../php/presupuesto/altaNetbook.php",
        data: parametros,
          success: function(datos){
        $("#ajax_register_Net").html(datos);
        }
    });
    event.preventDefault();
  });

  //ALTA de MONITOR
  $( "#form-guardar-AltaMonitor" ).submit(function( event ) {
    var parametros = $(this).serialize();
     $.ajax({
        type: "POST",
        url: "../../php/presupuesto/altaMonitor.php",
        data: parametros,
          success: function(datos){
            $("#ajax_register_Monitor").html(datos);
            load(1);
          }
    });
    event.preventDefault();
  });
  //ALTA de ALL IN ONE
  $( "#form-guardar-AllInOne" ).submit(function( event ) {
    var parametros = $(this).serialize();
     $.ajax({
        type: "POST",
        url: "../../php/presupuesto/altaAllinOne.php",
        data: parametros,
          success: function(datos){
            $("#ajax_register_allinone").html(datos);
          }
    });
    event.preventDefault();
  });
  
});