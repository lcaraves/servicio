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

	$('#nuevo_articulo').click(function() {
		$('#articulo_text').show();		
		$('#articulo_select').hide();
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