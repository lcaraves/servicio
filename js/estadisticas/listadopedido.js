$(document).ready(function() {
	//para Realizar la Busqueda.
   $('#filtrar').keyup(function () {

     var rex = new RegExp($(this).val(), 'i');
     $('.buscar tr').hide();
     $('.buscar tr').filter(function () {
         return rex.test($(this).text());
     }).show();
   });

   //Alta de Pedido
   $('#form-alta-pedido').submit(function(e) {
   		var url = "../../php/estadisticas/altapedido.php" ;
   		var type = "POST";
   		$.ajax({
   			url: url,
   			type: type,
   			data: $("#form-alta-pedido").serialize(), // serializes the form's elements.
               success: function(data)
               {                  
                  location.reload();
               }
   		})
	 	e.preventDefault();	   	
   });

	//Modificar Pedido
	$('.modificarPedido').click(function () {
	      
	  var idPedidoServicio = $(this).attr('id');
	  var articulo_pedido = $('#articulo_' + idPedidoServicio).text();
	  var fecha_pedido = $('#fecha_' + idPedidoServicio).text();
	  
	  $('#idPedidoServicio_update').val(idPedidoServicio);
	  $('#articulo_pedido_update').val(articulo_pedido);
	  $('#fecha_pedido_update').val(fecha_pedido);
	});

	//Modificar Pedido 
	$("#form-pedido-modif").submit(function(e){
		var url = "../../php/estadisticas/modificacionpedido.php";
		var type = "POST";
	  $.ajax({
	         type: type,
	         url: url,
	         data: $("#form-pedido-modif").serialize(), // serializes the form's elements.
	         success: function(data)
	         {
	            location.reload();
	         }
	       });

	  e.preventDefault(); // avoid to execute the actual submit of the form.
	});   	
});


 