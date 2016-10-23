
<?php 
	require_once('../conexion.php');
	$desde = date('Y-m-d',strtotime( $_REQUEST['desde']));
	$hasta = date('Y-m-d',strtotime( $_REQUEST['hasta']));

	$consultaPc = "SELECT * FROM productos p, clientes c WHERE p.articulo like'%Pc - Escritorio%' AND p.fechaIngreso BETWEEN '$desde' AND '$hasta' AND c.idCliente=p.idCliente"; 
	$resultPc = mysqli_query($conexion, $consultaPc) or die("PROBLEMA CON LA CONSULTA DE Pc-Escritorio.");

?>
	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  	<h4>
	  		<center>Cantidad de Pc de Escritorio Ingresadas en un Periodo al Servicio Técnico</center>
	  	</h4>
	  </div>
	  <div class="panel-body">
	    <p> Desde: <strong><?php echo $_REQUEST['desde'] ?></strong> - Hasta <strong><?php echo $_REQUEST['hasta']; ?></strong></p>
	  </div>

	  <!-- Table -->
	  <div class="table-responsive">
	  	<table class="table table-hover table-striped table-bordered">
	  		<thead style="background-color: #A1BFE4">
	  			<tr>
	  				<td><strong><h4>Cliente</h4></strong></td>
	  				<td><strong><h4>Falla Producto</h4></strong></td>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<?php 
	  			$suma = 0;
	  			while ($row = mysqli_fetch_array($resultPc)) { 
	  			?>
	  			<tr>
	  				<td><?php echo $row['nombre']; echo " ". $row['apellido']; ?></td>
	  				<td><?php echo $row['fallaCliente']; ?></td>
	  				<?php $suma = $suma +1; ?>
	  			</tr>
	  			<?php }?>
	  			<tr>
	  				<td></td>
	  				<td style="background-color: #C5DAB6"> <?php echo $suma; ?> </td>
	  			</tr>
	  		</tbody>
	  	</table>
	  </div>
	</div>
		