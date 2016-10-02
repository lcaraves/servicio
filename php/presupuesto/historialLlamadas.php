  <?php 
  require '../../php/conexion.php';
  $consultaLlamadas = "SELECT * FROM llamadas l, productos p WHERE p.idProducto = l.idProducto AND l.idProducto = '$_REQUEST[idProducto]' ORDER BY l.idLlamada DESC";
  $resultLlamadas = mysqli_query($conexion, $consultaLlamadas) or die("PROBLEMA CON LA CONSULTA DE LLAMADAS.");
  $total = mysqli_num_rows($resultLlamadas);

$msj= "<div class='table-responsive'>
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
      <tr>";
         if ($total == 0) {
           $msj = $msj."<div class='alert alert-warning alert-dismissible' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button>
              <strong>Cuidado!</strong> No hay Registros Asociados con este Articulo.
            </div>";
         
         } else {
           while ($row = mysqli_fetch_array($resultLlamadas)){
        $msj = $msj." 
        <td>". $row['idLlamada'] ."</td>
        <td>". $row['fechaHoraLlamada']."</td>
        <td>". $row['observaciones']."</td>
        <td>". $row['notificado']."</td>
      </tr>";
	  }
	  }
    $msj = $msj."</tbody>  
  </table>
</div>";
echo $msj;
mysqli_close($conexion);
?>

