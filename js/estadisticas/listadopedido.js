$(document).ready(function() {
	//Filtro para --> productos que estan en el servicio tecnico
   $('#filtrar1').keyup(function () {

     var rex = new RegExp($(this).val(), 'i');
     $('.buscar1 tr').hide();
     $('.buscar1 tr').filter(function () {
         return rex.test($(this).text());
     }).show();
   });
   //Filtro para --> productos que se Devolvieron
   $('#filtrar2').keyup(function () {

     var rex = new RegExp($(this).val(), 'i');
     $('.buscar2 tr').hide();
     $('.buscar2 tr').filter(function () {
         return rex.test($(this).text());
     }).show();
   });
   //Filtro para --> Productos Vendidos
   $('#filtrar3').keyup(function () {

     var rex = new RegExp($(this).val(), 'i');
     $('.buscar3 tr').hide();
     $('.buscar3 tr').filter(function () {
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
                  $("#msj_alta_pedido").html(data);

               }
   		})
	 	e.preventDefault();	   	
   });

	//Modificar Pedido
	$('.modificarPedido').click(function () {
	      
	  var idPedidoServicio = $.trim($(this).attr('id'));
	  var articulo_pedido = $.trim($('#articulo_' + idPedidoServicio).text());
	  var fecha_pedido = $.trim($('#fecha_' + idPedidoServicio).text());
	  var nropresupuesto_pedido = $.trim($('#nropresupuesto_' + idPedidoServicio).text());
	  var fecha_salida_pedido = $.trim($('#fecha_salida_pedido' + idPedidoServicio).text());
	  
	  $('#idPedidoServicio_update').val(idPedidoServicio);
	  $('#articulo_pedido_update').val(articulo_pedido);
	  $('#fecha_pedido_update').val(fecha_pedido);
	  $('#nropresupuesto_pedido_update').val(nropresupuesto_pedido);
	  $('#fecha_salida_pedido_update').val(fecha_salida_pedido);
	  
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
	         	$("#msj_modificar_pedido").html(data);
	            //location.reload();
	         }
	       });

	  e.preventDefault(); // avoid to execute the actual submit of the form.
	}); 

   	$(".datepicker").datepicker();


});


 