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
});