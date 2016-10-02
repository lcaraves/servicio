$(document).ready(function() {
  $("#ordenServicio-alta").submit(function(e) {
          var url = "php/registrarOrden.php"; // the script where you handle the form input.
          $.ajax({
                 type: "POST",
                 url: url,
                 data: $("#ordenServicio-alta").serialize(), // serializes the form's elements.
                 success: function(data)
                 {
                    $("#ordenServicio-alta")[0].reset();
                 }
               });
          e.preventDefault(); // avoid to execute the actual submit of the form.       
      });  
});

