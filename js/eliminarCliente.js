$(document).ready(function($) {
	$('.eliminarCliente').click(function(event) {
      var idCliente = $(this).attr('id');
		$('#id_eliminar').val(idCliente);
    });

	//Script de Eliminar
	$('#form-eliminar-cliente').submit(function(){
		var type = "POST";
		var url = "../php/clientes/eliminarCliente.php";
		var parametros = $(this).serialize();
		$.ajax({
		    type: type,
	        url: url,
		    data: parametros, // serializes the form's elements.
		        success: function(data){
		              	$('#modalModificar').modal('hide');      
		           }
		         });
		    e.preventDefault(); // avoid to execute the actual submit of the form.       
		});	
});

