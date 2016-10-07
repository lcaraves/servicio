$(document).ready(function(e) {
	$('.eliminarCliente').click(function(event) {
      var idCliente = $(this).attr('id');
		$('#id_eliminar').val(idCliente);
    });

	//Para Eliminar --> Un Cliente
	$('#form-eliminar-cliente').submit(function(e){
		var type = "POST";
		var url = "../../php/clientes/eliminarCliente.php";
		var parametros = $(this).serialize();
		$.ajax({
		    type: type,
	        url: url,
		    data: parametros, // serializes the form's elements.
		        success: function(data){
		        	if ("true") {
		        		$('#ocultarCeldaEliminada').fadeOut(1200);      	
		        	}
		          
		           }
		         });
		e.preventDefault(); // avoid to execute the actual submit of the form.       
	});


	$('.modificarCliente').click(function () {
	      
	  var idCliente = $(this).attr('id');
	  var nombre = $('#nombre_' + idCliente).text();
	  var apellido = $('#apellido_' + idCliente).text();
	  var direccion = $('#direccion_' + idCliente).text();
	  var telefono = $('#telefono_' + idCliente).text();
	  var email = $('#email_' + idCliente).text();
	  var localidad = $('#localidad_' + idCliente).text();
	  var provincia = $('#provincia_' + idCliente).text();

	  $('#id_update').val(idCliente);
	  $('#nombre_update').val(nombre);
	  $('#apellido_update').val(apellido);
	  $('#direccion_update').val(direccion);
	  $('#telefono_update').val(telefono);
	  $('#email_update').val(email);
	  $('#localidad_update').val(localidad);
	  $('#provincia_update').val(provincia);
	});
	//Para Modificar --> Un Cliente
	$("#form-modificacion").submit(function(e){
	
	  $.ajax({
	         type: "POST",
	         url: "../../php/clientes/modificarcliente.php",
	         data: $("#form-modificacion").serialize(), // serializes the form's elements.
	         success: function(data)
	         {
	            // show response from the php script.
	          if (data=='true') {
	            location.reload();
	          }; 
	         
	         }
	       });

	  e.preventDefault(); // avoid to execute the actual submit of the form.
	});

	//Para Dar ALta --> un CLIENTE
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

	//Para buscar --> Clientes
	$('#filtrar').keyup(function () {

	  var rex = new RegExp($(this).val(), 'i');
	  $('.buscar tr').hide();
	  $('.buscar tr').filter(function () {
	      return rex.test($(this).text());
	  }).show();
	});
		
});

