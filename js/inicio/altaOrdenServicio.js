$(document).ready(function() {
  $("#ordenServicio-alta").submit(function(e) {
          var url = "php/registrarOrden.php"; // the script where you handle the form input.
          $.ajax({
                 type: "POST",
                 url: url,
                 data: $("#ordenServicio-alta").serialize(), // serializes the form's elements.
                 success: function(data)
                 {
                    $('#msjSucces').html(data);
                    $("#ordenServicio-alta")[0].reset();
                 }
               });
          e.preventDefault(); // avoid to execute the actual submit of the form.       
      });  

       $(".chosen").chosen();
       $(".packadobe").select2({
          placeholder: "Selecionar Items",
          allowClear: true,
          tags: true
       });
       $(".corelDraw").select2({
          placeholder: "Selecionar Items"
       });
      
      //Alta de Cliente --> Formulario
      $("#form-alta").submit(function(e) {
          var url = "php/clientes/altaCliente.php"; // the script where you handle the form input.
          $.ajax({
                 type: "POST",
                 url: url,
                 data: $("#form-alta").serialize(), // serializes the form's elements.
                 success: function(data)
                 {
                    $("#form-alta")[0].reset();
                    $("#msj_success_ajax").html(data);
                 }
               });
          e.preventDefault(); // avoid to execute the actual submit of the form.       
      });
});


