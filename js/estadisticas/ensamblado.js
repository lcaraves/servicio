$(document).ready(function() {
	$('#form-alta-ensamblado').submit(function(e) {
		var type = 'POST';
		var parametros = $(this).serialize();
		var url = '../../php/estadisticas/altaEnsamblado.php'
		$.ajax({
			url: url,
			type: type,
			data: parametros,
				success: function (data) {
					$('#ajax_mjs_ensamblado').html(data);
				}
		})
		e.preventDefault();	
	});

	$('#articulo_text').hide();
	//Realiza el camnbio si quiero nuevo, o listar articulos.
	$(".nuevo_articulo").on( 'click', function() {
	    if( $(this).is(':checked') ) {
	        // Hacer algo si el checkbox ha sido seleccionado
	    	$('#articulo_text').show();
	    	$('#articulo_select').hide();		    
	    } else {
	        // Hacer algo si el checkbox ha sido deseleccionado
	        $('#articulo_text').hide();
	    	$('#articulo_select').show();		    
	    }
	});

	$( function() {
    	$( "#calendario" ).datepicker();
    	$( "#desdeCalendario" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
    	$( "#hastaCalendario" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
  	});

	$('#busqueda-desde-hasta-ensamblado').submit(function(e) {
		var type = 'POST';
		var parametros = $(this).serialize();
		var url = '../../php/estadisticas/busquedaDesdeHastaEnsamblado.php'
		$.ajax({
			url: url,
			type: type,
			data: parametros,
				success: function (data) {
					$('.ajax_busqueda_ensamblado').html(data);
				}
		})
		e.preventDefault();	
	});

});