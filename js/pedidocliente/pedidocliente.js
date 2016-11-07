$(document).ready(function() {
	//-->dar de Alta al Pedido 
	$('#form-alta-pedido-cliente').submit(function(e) {
   		var url = "../../php/pedidocliente/altapedidocliente.php" ;
   		var type = "POST";
   		$.ajax({
   			url: url,
   			type: type,
   			data: $(this).serialize(), // serializes the form's elements.
               success: function(data)
               {                  
                  $("#msj_alta_pedido_cliente").html(data);
               }
   		})
	 	e.preventDefault();	   	
   	});
   
   $( function() {
		//-->input calendario--> Fecha Pedido
		$('.calendarioPedidoCliente').datepicker({ dateFormat: 'dd-mm-yy' }).val();
		//-->input calendario--> Fecha Confimación
		$('.calendarioConfirmacionCliente').datepicker({ dateFormat: 'dd-mm-yy' }).val();
	});
   
   //-->Select2 --> para Clientes
   $('.clientes').select2({
      placeholder: "Selecionar Cliente",
      tags: true,
   });
   //alta de Cliente
   $("#form-alta").submit(function(e) {
       var url = "../../php/clientes/altaCliente.php"; // the script where you handle the form input.
       $.ajax({
              type: "POST",
              url: url,
              data: $("#form-alta").serialize(), // serializes the form's elements.
              success: function(data)
              {
               $("#form-alta")[0].reset();
               $("#ajax_msj").html(data);
              }
            });
       e.preventDefault(); // avoid to execute the actual submit of the form.       
   });

   //Modificacion de Pedido -> Cliente
    $('.modificarPedido').click(function () {
        
    var idPedidoCliente = $(this).attr('id');
    var producto = $.trim($('#producto_' + idPedidoCliente).text());
    var fechapedido = $.trim($('#fechapedido_' + idPedidoCliente).text());
    var nroserie = $.trim($('#nroserie_' + idPedidoCliente).text());
    var precio = $.trim($('#precio_' + idPedidoCliente).text());
    var confirmacion = $.trim($('#confirmacion_' + idPedidoCliente).text());
    var senia = $.trim($('#senia_' + idPedidoCliente).text());
    var fecha_confirmacion = $.trim($('#fecha_confirmacion_' + idPedidoCliente).text());
    var observacion = $.trim($('#observacion_' + idPedidoCliente).text());

    $('#id_modif').val(idPedidoCliente);
    $('#producto_modif').val(producto);
    $('#fechapedido_modif').val(fechapedido);
    $('#nroserie_modif').val(nroserie);
    $('#precio_modif').val(precio);
    $('#confirmacion_modif').val(confirmacion);
    $('#senia_modif').val(senia);
    $('#fecha_confirmacion_modif').val(fecha_confirmacion);
    $('#observacion_modif').val(observacion);
  });

  //Update de Cliente
    $("#form-modificar-pedido").submit(function(e) {
        var url = "../../php/pedidocliente/modificarPedidoCliente.php"; // the script where you handle the form input.
        var type = "POST";
        $.ajax({
               type: type,
               url: url,
               data: $("#form-modificar-pedido").serialize(), // serializes the form's elements.
               success: function(data)
               {
                $("#ajax_msj_update").html(data);
               }
             });
        e.preventDefault(); // avoid to execute the actual submit of the form.       
    });  
    
});
