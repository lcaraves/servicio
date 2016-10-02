<?php 
  require '../../php/conexion.php';
  $consultaLlamadas = "SELECT * FROM llamadas l, productos p WHERE p.idProducto = l.idProducto AND l.idProducto = 137";
  $resultLlamadas = mysqli_query($conexion, $consultaLlamadas) or die("PROBLEMA CON LA CONSULTA DE LLAMADAS.");
  $total = mysqli_num_rows($resultLlamadas);
             
echo "

<div class='table-responsive'>
  <table class='table table-bordered table-hover'>
    <thead>
      <tr>
        <td><strong>#</strong></td>
        <td><strong>Fecha - Hs</strong></td>
        <td><strong>Observación</strong></td>
        <td><strong>Notificado</strong></td>
      </tr>
    </thead>
    <tbody>
      <tr>"       

         if ($total == 0) {
           "
           <div class='alert alert-warning alert-dismissible' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button>
              <strong>Cuidado!</strong> No hay Registros Asociados con este Articulo.
            </div>";
         } else {
           while ($row = mysqli_fetch_array($resultLlamadas)){."
         
        <td><?php echo $row['idLlamada'] ?></td>
        <td><?php echo $row['fechaHoraLlamada'] ?></td>
        <td><?php echo $row['observaciones'] ?></td>
        <td><?php echo $row['notificado'] ?></td>
      </tr>
    </tbody>". 
      }
        }
        mysqli_close($conexion);."
  </table>
</div>   
";

?>


