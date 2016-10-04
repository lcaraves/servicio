<?php 
  require_once '../conexion.php';
  $consultaCliente = "SELECT * FROM clientes c, productos p WHERE c.idCliente = p.idCliente and c.idCliente = 105";
  $resultadosClientes = mysqli_query($conexion, $consultaCliente) or die("PROBLEMA CON LA CONSULTA DE CLIENTES");
  while ($row = mysqli_fetch_array($resultadosClientes)) {
    
 ?>


<tr>
  <td colspan="2" class="titulo" align="center" valign="top" height="1"><hr></td>
</tr>
<tr>
  <td colspan="2" class="titulo" valign="top" height="1">Contacto</td>
</tr>
<tr>
  <td valign="top" width="39%" height="25">
    <div align="right"><span class="titulo_carrito">Titular del Equipo:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5">
    </div>
  </td>
  <td class="productos_carrito" valign="top" width="61%" height="25"><?php echo $row['nombre'] ." " .$row['apellido']?></td>
</tr>
<tr>
  <td valign="top" height="25">
    <div align="right"><span class="titulo_carrito">Dirección:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5">
    </div>
  </td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['direccion']?></span></td>
</tr>
<tr>
  <td valign="top" height="25">
    <div align="right"><span class="titulo_carrito">Telefono:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5">
    </div>
  </td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['telefono']?></span></td>
</tr>
<tr>
  <td valign="top" height="25">
    <div align="right"><span class="titulo_carrito">E-mail:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5">
    </div>
  </td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['email']?></span></td>
</tr>
<tr>
  <td valign="top" height="25">
    <div align="right"><span class="titulo_carrito">Localidad:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5">
    </div>
    <div align="left"></div>
  </td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['localidad']?></span></td>
</tr>
<tr>
  <td valign="top" height="25">
    <div align="right"><span class="titulo_carrito">Provincia:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5">
    </div>
  </td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['provincia']?></span>
  </td>
</tr>
<!-- end Contacto  -->

<?php } ?>