<?php
  require_once '../conexion.php';
  $consultaCliente = "SELECT * FROM clientes c, productos p WHERE c.idCliente = p.idCliente and c.idCliente = 1";
  $resultadosClientes = mysqli_query($conexion, $consultaCliente) or die("PROBLEMA CON LA CONSULTA DE CLIENTES");
  while ($row = mysqli_fetch_array($resultadosClientes)) {
    
 ?>
<tr>
  <td colspan="2" class="titulo" valign="top" height="1">Producto</td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Articulo:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></div></td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['articulo']?></span></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Codigo:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></div></td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['codigo']?></span></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Serial:</span><img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></div></td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['serial']?></span></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Estado Del Equipo:<img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></span></div></td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['estadoEquipo']?></span></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Falla Denunciada:<img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></span></div></td>
  <td valign="top" height="25"><span class="productos_carrito"><?php echo $row['fallaCliente']?></span></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Producto de Awan:<img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></span></div></td>
  <td valign="top" height="25"><div class="titulo_carrito" align="right">
    <div align="left"><span class="categorias"><span class="productos_carrito">
                      No</span></span></div>
  </div></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">Pedido o Factura N°:<img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></span></div></td>
  <td valign="top" height="25"><span class="productos_carrito"></span></td>
</tr>
<tr>
  <td valign="top" height="25"><div align="right"><span class="titulo_carrito">En Garantia:<img src="usuario_completado1.php_files/spacer.gif" width="5" height="5"></span></div></td>
  <td valign="top" height="25"><div class="titulo_carrito" align="right">
    <div align="left"><span class="categorias"><span class="productos_carrito">      No</span></span></div>
  </div></td>
</tr>

<?php } ?>