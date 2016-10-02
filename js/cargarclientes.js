$('.vistaCliente').click(function () {
      
  
  var nombre = $('#nombre_' + idCliente).text();
  //var apellido = $('#apellido_' + idCliente).text();
  //var direccion = $('#direccion_' + idCliente).text();
  //var telefono = $('#telefono_' + idCliente).text();
  //var email = $('#email_' + idCliente).text();
  //var provincia = $('#provincia_' + idCliente).text();

  //$('#id_update').val(idCliente);
  $('#vistaNombre').val(nombre);
  //$('#apellido_update').val(apellido);
  //$('#direccion_update').val(direccion);
  //$('#telefono_update').val(telefono);
  //$('#email_update').val(email);
  //$('#provincia_update').val(provincia);
});