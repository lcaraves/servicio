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
});