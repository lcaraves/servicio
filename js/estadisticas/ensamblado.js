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
  } );
});