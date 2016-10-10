$(document).ready(function() {
    //---------------------------
    //Para buscar 
    $('#filtrar').keyup(function () {

      var rex = new RegExp($(this).val(), 'i');
      $('.buscar tr').hide();
      $('.buscar tr').filter(function () {
          return rex.test($(this).text());
      }).show();
    });
    //----------------------------
    // Modificar Orden de Servicio obtener datos y pasar a ventana modal
    $('.modifOrden').click(function () {
          
      var idProducto = $(this).attr('id');
      var estadoEquipo = $.trim($('#estadoEquipo_' + idProducto).text());
      var codigo = $.trim($('#codigo_' + idProducto).text());
      var serial = $.trim($('#serial_' + idProducto).text());
      var accesorios = $.trim($('#accesorios_'+idProducto).text());
      var fallaEquipo = $.trim($('#fallaEquipo_'+idProducto).text());

      $('#id_update').val(idProducto);
      $('#estadoEquipo_update').val(estadoEquipo);
      $('#codigo_update').val(codigo);
      $('#serial_update').val(serial);
      $('#accesorios_update').val(accesorios);
      $('#fallaEquipo_update').val(fallaEquipo);
    });
    //---------------------------
    //Modifcar Orden -->archivo php
    $('#form-modificar-orden').submit(function(event) {
    	var url ='../../php/ordenservicio/modificarOrdenServicio.php';
    	var type ='POST';
    	var parametros = $(this).serialize();
    	$.ajax({
    		url: url,
    		type: type,
    		data: parametros,
    		success:function (data) {
    			$('#ajax_msj_success').html(data);
    		}
    	})
    	event.preventDefault();   
    });

  });