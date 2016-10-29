<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pedido Cliente</title>
 	 <!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- para datepicket -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<!-- js/pedidocliente.js -->
  	<script type="text/javascript" src="../../js/pedidocliente/pedidocliente.js"></script>
  	<!-- Select2 -->
  	<script type="text/javascript" src="../../js/select2/js/select2.full.js"></script>
  	<script type="text/javascript" src="../../js/select2/js/select2.full.min.js"></script>
  	<script type="text/javascript" src="../../js/select2/js/select2.js"></script>
  	<script type="text/javascript" src="../../js/select2/js/select2.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../../js/select2/css/select2.css" media="screen">
  	<link rel="stylesheet" type="text/css" href="../../js/select2/css/select2.min.css" media="screen">
</head>
<body>
	<?php 
    session_start();
      if(!isset($_SESSION["session_UsuarioNombre"])){
      	header("Location: php/inicioSesion/logeo.php");
    	}
    ?>	
	<div class="container fluid theme-showcase" role="main">
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand">Servicio Técnico</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="../../index.php">Nueva Orden</a></li>
	            <li><a href="../../views/clientes/clientes.php">Clientes</a></li>          
	          </ul>
	          <div class="dropdown navbar-right">
	            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
	                <?php 
	                  echo $_SESSION['session_UsuarioNombre'];
	                ?>
	              <span class="caret"></span>
	            </button>
	            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	              <li class="dropdown-header">Orden de Servicio</li>
	              <li><a href="../../index.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Nueva</a></li>
	              <li><a href="../../views/ordenServicio/listaPrecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
	              <li class="dropdown-header">Presupuesto</li>
	              <li><a href="../../views/ordenServicio/listaordenes.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ver Ordenes</a></li>
	              <li><a href="../../views/presupuesto/presupuestos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a></li>
	              <li><a href="../../views/estadisticas/listadoventaservicio.php">
	              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedido Ventas</a></li>
	              <li>
	              <a href="../../views/pedidocliente/pedidocliente.php">
	              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedido Clientes</a></li>
	              <li class="dropdown-header">Estadisticas</li>
	              <li><a href="../../views/estadisticas/notebookEstadisticas.php">Artículos</a></li>
	              <li><a href="php/pdf/imprimir2.php">Imprimir Prueba</a></li>
	              <li role="separator" class="divider"></li>
	              <li>
	                <a href="php/inicioSesion/logeo.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar Sesión</a>
	              </li>
	            </ul>
	          </div>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
		<br>
	   	<br>
	   	<!-- Contenido Principal Pagina -->
	   	<nav class="navbar navbar-static-top">
	   	  <div class="container">
	   	    <center>
	   	      <h3>Pedido de Articulos de los Clientes</h3>
	   	    </center>
	   	  </div>
	   	</nav>
	   	<!-- Nav tabs -->
	   	<ul class="nav nav-tabs" role="tablist">
	   	  <li role="presentation" class="active"><a href="#pedidocliente" aria-controls="home" role="tab" data-toggle="tab">Pedidos</a></li>
	   	  <li role="presentation"><a href="#confirmados" aria-controls="profile" role="tab" data-toggle="tab">Confirmados</a></li>
	   	  <li role="presentation"><a href="#NoConfirmados" aria-controls="profile" role="tab" data-toggle="tab">Negativa</a></li>
	   	</ul>
	   	<!-- Contenido de los Tab -->
	   	<div class="tab-content">
	   	  <!-- Contenido de los Tab #servicio Tecnico -->
	   	  <?php 
	   	    require_once '../../php/conexion.php';
	   	    $consultaPedCliST = "SELECT * FROM pedidocliente pc WHERE pc.confirmacion='' ORDER BY pc.idPedidoCliente DESC LIMIT 100";
	   	    $resultPedCliST = mysqli_query($conexion, $consultaPedCliST) or die("PROBLEMA CON LA CONSULTA DE Pedido de Productos de los Clientes al Servicio Tecnico.");
	   	   ?>
	   	  <div role="tabpanel" class="tab-pane active" id="pedidocliente">
	   	    <br>
	   	    <div class="form-inline">
	   	      <div class="form-group col-xs-10"> 
	   	         <div class="input-group col-xs-5">
	   	          <span class="input-group-addon">Buscar</span>
	   	          <input id="filtrar1" type="text" class="form-control" placeholder="Ingresa el articulo que desea Buscar...">
	   	        </div>
	   	      </div>
	   	      <div class="form-group">
	   	        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#altaPedido">
	   	            <span class="glyphicon glyphicon-plus"></span>  Encargo 
	   	        </button>
	   	      </div>
	   	    </div>
	   	    <br>
	   	    <div class="table-responsive">
	   	      <table class="table table-hover">
	   	        <thead>
	   	          <tr>
	   	            <th>#</th>
	   	            <th>Cliente</th>
	   	            <th>Producto</th>
	   	            <th>Fecha Pedido</th>
	   	            <th>Nº Serie</th>
	   	            <th>Precio</th>
	   	            <th>Fecha Confirmación</th>
	   	            <th>Observación</th>
	   	            <th></th>
	   	          </tr>
	   	        </thead>
	   	          <?php while ($row = mysqli_fetch_array($resultPedCliST)){ ?>
	   	          <tbody class="buscar1">
	   	           <tr id="<?php echo $row['idPedidoCliente'] ?>">
	   	             <td id="id_<?php echo $row['idPedidoCliente'] ?>"> <?php echo $row['idPedidoCliente'] ?> </td>
	   	             <td></td>
	   	             <td id="articulo_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['productoPedido']); ?> </td>
	   	             <td id="fecha_<?php echo $row['idPedidoCliente'] ?>"> <?php echo date('d-m-Y',strtotime($row['fechaPedido'])) ?> </td>
	   	             <td id="estado_<?php echo $row['idPedidoCliente'] ?>"> <?php echo $row['numeroSerie'] ?> </td>
	   	             <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['precio']) ?> </td>
	   	             <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['confirmacion']) ?> </td>
	   	             <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo ""?> </td>
	   	             <td id="fecha_confirmacion_<?php echo $row['fechaConfirmacion'] ?>">
	   	               <?php 
	   	               if ('0000-00-00' == $row['fechaConfirmacion']) {
	   	                 echo "Sin Fecha de Confirmacion";
	   	               }else{
	   	                 echo date('d-m-Y',strtotime($row['fechaConfirmacion']));
	   	               }
	   	               ?>
	   	                 
	   	             </td>
	   	             <td id="observacion_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['observacion']) ?> 
	   	             </td>
	   	             <td>
	   	               <div class="btn-group">
	   	                 <ul class="nav navbar-nav navbar-right">
	   	                   <li class="dropdown">
	   	                     <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	   	                       <span class="caret"></span>
	   	                     </button>
	   	                     <ul class="dropdown-menu">
	   	                       <li data-toggle="modal" data-target="#modificarPedido">
	   	                           <a href="#" class="modificarPedido" id="<?php echo $row['idPedidoServicio'] ?>">
	   	                             <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Modificar
	   	                           </a>
	   	                       </li>  
	   	                     </ul>
	   	                   </li>
	   	                 </ul>
	   	               </div>
	   	             </td>
	   	           </tr>
	   	          </tbody>  
	   	          <?php 
	   	          } 
	   	          ?>
	   	      </table>
	   	    </div>
	   	  </div>
	   	  <div role="tabpanel" class="tab-pane" id="confirmados">
	   	    <!-- Contenido de los Tab #devolvio producto a ventas -->
	   	    <?php 
	   	      $consultaPedCon = "SELECT * FROM pedidocliente pc WHERE pc.confirmacion='Si' ORDER BY pc.idPedidoCliente DESC LIMIT 100";
	   	      $resultPedCon = mysqli_query($conexion, $consultaPedCon) or die("PROBLEMA CON LA CONSULTA DE Pedido Devueltos al Area de Ventas.");
	   	     ?>
	   	    <br>
	   	    <div class="form-inline">
	   	      <div class="form-group col-xs-10"> 
	   	         <div class="input-group col-xs-5">
	   	          <span class="input-group-addon">Buscar</span>
	   	          <input id="filtrar2" type="text" class="form-control" placeholder="Ingresa el articulo que desea Buscar...">
	   	        </div>
	   	      </div>
	   	      <div class="form-group">
	   	        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#altaPedido">
	   	            <span class="glyphicon glyphicon-plus"></span>  Encargo
	   	        </button>
	   	      </div>
	   	    </div> 
	   	    <br>
	   	    <div class="table-responsive">
	   	      <table class="table table-hover">
	   	        <thead>
	   	          <tr>
	   	            <th>#</th>
	   	            <th>Cliente</th>
	   	            <th>Producto</th>
	   	            <th>Fecha Pedido</th>
	   	            <th>Nº Serie</th>
	   	            <th>Precio</th>
	   	            <th>Confirmacion</th>
	   	            <th>Seña</th>
	   	            <th>Fecha Confirmación</th>
	   	            <th>Observación</th>
	   	            <th>Acción</th>
	   	          </tr>
	   	        </thead>
	   	          <?php while ($row = mysqli_fetch_array($resultPedCon)){ ?>
	   	          <tbody class="buscar2">
	   	            <tr id="<?php echo $row['idPedidoCliente'] ?>">
	   	              <td id="id_<?php echo $row['idPedidoCliente'] ?>"> <?php echo $row['idPedidoCliente'] ?> </td>
	   	              <td></td>
	   	              <td id="articulo_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['productoPedido']); ?> </td>
	   	              <td id="fecha_<?php echo $row['idPedidoCliente'] ?>"> <?php echo date('d-m-Y',strtotime($row['fechaPedido'])) ?> </td>
	   	              <td id="estado_<?php echo $row['idPedidoCliente'] ?>"> <?php echo $row['numeroSerie'] ?> </td>
	   	              <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['precio']) ?> </td>
	   	              <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['confirmacion']) ?> </td>
	   	              <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo ""?> </td>
	   	              <td id="fecha_confirmacion_<?php echo $row['fechaConfirmacion'] ?>">
	   	                <?php 
	   	                if ('0000-00-00' == $row['fechaConfirmacion']) {
	   	                  echo "Sin Fecha de Confirmacion";
	   	                }else{
	   	                  echo date('d-m-Y',strtotime($row['fechaConfirmacion']));
	   	                }
	   	                ?>
	   	                  
	   	              </td>
	   	              <td id="observacion_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['observacion']) ?> 
	   	              </td>
	   	              <td>
	   	                <div class="btn-group">
	   	                  <ul class="nav navbar-nav navbar-right">
	   	                    <li class="dropdown">
	   	                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	   	                        <span class="caret"></span>
	   	                      </button>
	   	                      <ul class="dropdown-menu">
	   	                        <li data-toggle="modal" data-target="#modificarPedido">
	   	                            <a href="#" class="modificarPedido" id="<?php echo $row['idPedidoServicio'] ?>">
	   	                              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Modificar
	   	                            </a>
	   	                        </li>  
	   	                      </ul>
	   	                    </li>
	   	                  </ul>
	   	                </div>
	   	              </td>
	   	            </tr>
	   	          </tbody>  
	   	          <?php 
	   	          } 
	   	          ?>
	   	      </table>
	   	    </div>
	   	  </div>
	   	  <div role="tabpanel" class="tab-pane" id="NoConfirmados">
	   	    <!-- Contenido de los Tab #vendio producto al cliente -->
	   	    <?php 
	   	      $consultaPedNoCon = "SELECT * FROM pedidocliente pc WHERE pc.confirmacion = 'No' ORDER BY pc.idPedidoCliente DESC LIMIT 100";
	   	      $resultPedNoCon = mysqli_query($conexion, $consultaPedNoCon) or die("PROBLEMA CON LA CONSULTA DE Pedido de Productos Vendidos .");
	   	     ?>
	   	    <br>
	   	    <div class="form-inline">
	   	      <div class="form-group col-xs-10"> 
	   	         <div class="input-group col-xs-5">
	   	          <span class="input-group-addon">Buscar</span>
	   	          <input id="filtrar3" type="text" class="form-control" placeholder="Ingresa el articulo que desea Buscar...">
	   	        </div>
	   	      </div>
	   	      <div class="form-group">
	   	        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#altaPedido">
	   	            <span class="glyphicon glyphicon-plus"></span>  Pedido
	   	        </button>
	   	      </div>
	   	    </div> 
	   	    <br>
	   	    <div class="table-responsive">
	   	     <table class="table table-hover">
	   	       <thead>
	   	         <tr>
	   	           <th>#</th>
	   	           <th>Cliente</th>
	   	           <th>Producto</th>
	   	           <th>Fecha Pedido</th>
	   	           <th>Nº Serie</th>
	   	           <th>Precio</th>
	   	           <th>Confirmacion</th>
	   	           <th>Seña</th>
	   	           <th>Fecha Confirmación</th>
	   	           <th>Observación</th>
	   	           <th>Acción</th>
	   	         </tr>
	   	       </thead>
	   	         <?php while ($row = mysqli_fetch_array($resultPedNoCon)){ ?>
	   	         <tbody class="buscar2">
	   	           <tr id="<?php echo $row['idPedidoCliente'] ?>">
	   	             <td id="id_<?php echo $row['idPedidoCliente'] ?>"> <?php echo $row['idPedidoCliente'] ?> </td>
	   	             <td></td>
	   	             <td id="articulo_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['productoPedido']); ?> </td>
	   	             <td id="fecha_<?php echo $row['idPedidoCliente'] ?>"> <?php echo date('d-m-Y',strtotime($row['fechaPedido'])) ?> </td>
	   	             <td id="estado_<?php echo $row['idPedidoCliente'] ?>"> <?php echo $row['numeroSerie'] ?> </td>
	   	             <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['precio']) ?> </td>
	   	             <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['confirmacion']) ?> </td>
	   	             <td id="precio_<?php echo $row['idPedidoCliente'] ?>"> <?php echo ""?> </td>
	   	             <td id="fecha_confirmacion_<?php echo $row['fechaConfirmacion'] ?>">
	   	               <?php 
	   	               if ('0000-00-00' == $row['fechaConfirmacion']) {
	   	                 echo "Sin Fecha de Confirmacion";
	   	               }else{
	   	                 echo date('d-m-Y',strtotime($row['fechaConfirmacion']));
	   	               }
	   	               ?>
	   	                 
	   	             </td>
	   	             <td id="observacion_<?php echo $row['idPedidoCliente'] ?>"> <?php echo trim($row['observacion']) ?> 
	   	             </td>
	   	             <td>
	   	               <div class="btn-group">
	   	                 <ul class="nav navbar-nav navbar-right">
	   	                   <li class="dropdown">
	   	                     <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	   	                       <span class="caret"></span>
	   	                     </button>
	   	                     <ul class="dropdown-menu">
	   	                       <li data-toggle="modal" data-target="#modificarPedido">
	   	                           <a href="#" class="modificarPedido" id="<?php echo $row['idPedidoServicio'] ?>">
	   	                             <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Modificar
	   	                           </a>
	   	                       </li>  
	   	                     </ul>
	   	                   </li>
	   	                 </ul>
	   	               </div>
	   	             </td>
	   	           </tr>
	   	         </tbody>  
	   	         <?php 
	   	         } 
	   	         ?>
	   	     </table>
	   	    </div>
	   	  </div>
	   	</div>
    
  	</div><!-- End Container Fluid -->
  	</br>
	<footer class="bd-footer text-muted">
		<div class="avbar navbar-default navbar-static-top">
		<div class="container">
		  <center>
		    <img src="../../img/ArwanLogoGris.jpg" alt="" width="32" class="img-circle">
		    <p class="text-muted credit">
		      <strong>E-mail: ventas@arwancomputacion.com.ar <br>Av. San Martin 83 | C.P. H3500CIA | Resistencia, Chaco | Tel.: (0362) 4411605 <br>
		      <a href="http://www.arwancomputacion.com.ar">www.arwancomputacion.com.ar</a></strong>
		    </p>
		  </center>    
		</div>
		</div>
	</footer> 
</body>
</html>
<?php include("modal/modal_agregar_pedido.php");?>
<?php include("modal/modal_agregar_clientes.php");?>
