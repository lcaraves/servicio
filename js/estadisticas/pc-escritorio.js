$(document).ready(function() {
	$( function() {
    	$( "#desdePc" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
    	$( "#hastaPc" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
  	});

	$('#busqueda-desde-hasta-pc-escritorio').submit(function(e) {
		var type = 'POST';
		var parametros = $(this).serialize();
		var url = '../../php/estadisticas/busquedaDesdeHastaPcEscritorio.php'
		$.ajax({
			url: url,
			type: type,
			data: parametros,
				success: function (data) {
					$('.ajax_busqueda_pc_escritorio').html(data);
				}
		})
		e.preventDefault();	
	});

});