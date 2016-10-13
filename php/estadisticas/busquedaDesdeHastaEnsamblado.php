<?php 
	require_once('../conexion.php');
	$desde = date('Y-m-d',strtotime( $_REQUEST['desde']));
	$hasta = date('Y-m-d',strtotime( $_REQUEST['hasta']));


	$consultaEnsamblado = "SELECT *, SUM(e.cantidad_ensamblado) FROM ensamblado e WHERE e.fecha_ensamblado BETWEEN '$desde' AND '$hasta' GROUP BY e.articulo_ensamblado ORDER BY e.articulo_ensamblado ASC";
	$resultEnsamblado = mysqli_query($conexion, $consultaEnsamblado) or die("PROBLEMA CON LA CONSULTA DE Ensamblado.");

?>
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead style="background-color: #B9B9B9">
				<tr>
					<td><strong><h3>Articulo</h3></strong></td>
					<td><strong><h3>Cantidad</h3></strong></td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$suma = 0;
				while ($r = mysqli_fetch_array($resultEnsamblado)) { 
				?>
				<tr>
					<td><?php echo $r['articulo_ensamblado']; ?></td>
					<td> <?php echo $r['SUM(e.cantidad_ensamblado)']; $suma =  $suma + $r['SUM(e.cantidad_ensamblado)']; ?> </td>
				</tr>
				<?php }?>
				<tr>
					<td></td>
					<td style="background-color: #C5DAB6"> <?php echo $suma; ?> </td>
				</tr>
			</tbody>
		</table>
	</div>