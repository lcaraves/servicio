$(function() {
	$('#buscar').keyup(function() {
		var envio = $('#buscar').val();

		$('#resultadosbusquedas').html('<h4><img src="img/loading.gif" width="20" alt=""/> Cargando</h4>');

	 	$.ajax({
	 		url: 'php/buscador.php',
	 		type: 'POST',
	 		data: ('buscar='+ envio),
	 		success: function (resp) {
	 			if (resp!="") {
	 				$('#resultadosbusquedas').fadeIn();
	 				$('#resultadosbusquedas').html(resp);
	 			}
	 		}
	 	});
	 });
	$(document).on('click', 'li', function() {
		$('#buscar').val($(this).text());
		$('#resultadosbusquedas').fadeOut();
	});
});