<!DOCTYPE html>
<html lang="es">
<head>
	<title>Agregar Presupuesto</title>
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
  <script src="../../js/presupuesto/presupuesto.js"></script>
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
            <li><a href="../clientes/clientes.php">Clientes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Altas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li data-toggle="modal" data-target="#agregarNotebook"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Notebook</a></li>
                <li data-toggle="modal" data-target="#agregarNetbook"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Netbook</a></li>
                <li data-toggle="modal" data-target="#agregarMonitor"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Monitor</a></li>
                <li data-toggle="modal" data-target="#agregarAllinOne"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> All In One</a></li>
              </ul>
            </li>          
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
              <li><a href="../ordenServicio/listaPrecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
              <li class="dropdown-header">Presupuesto</li>
              <li><a href="../ordenServicio/listaordenes.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ver Ordenes</a></li>
              <li><a href="../presupuesto/presupuestos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a></li>
              <li><a href="../estadisticas/listadoventaservicio.php">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedido Ventas</a></li>
              <li>
              <a href="../pedidocliente/pedidocliente.php">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedido Clientes</a></li>
              <li class="dropdown-header">Estadisticas</li>
              <li><a href="../estadisticas/notebookEstadisticas.php">Artículos</a></li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="../../php/inicioSesion/logeo.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar Sesión</a>
              </li>
            </ul>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<br><br><br>
    <nav class="navbar navbar-static-top">
      <div class="container">
        <center>
          <h3>Lista de Ordenes de Servicios para Agregar Presupuesto</h3>
        </center>
      </div>
    </nav>
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#sinPresupuesto" aria-controls="home" role="tab" data-toggle="tab">Sin Presupuestos</a></li>
        <li role="presentation"><a href="#conPresupuesto" aria-controls="profile" role="tab" data-toggle="tab">Con Presupuestos</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="sinPresupuesto">
          <br>
           <div class="form-inline">
              <?php 
               require '../../php/conexion.php';
               $consultaPre = "SELECT * FROM productos p, clientes c WHERE P.idCliente = c.idCliente ORDER BY p.idProducto DESC LIMIT 100";
               $resultadosPre = mysqli_query($conexion, $consultaPre) or die("PROBLEMA CON LA CONSULTA DE PRESUPUESTO.");

              ?>
             <div class="form-group col-xs-11"> 
               <div class="input-group col-xs-5">
                <span class="input-group-addon">Buscar</span>
                <input id="filtrar" type="text" class="form-control" placeholder="Ingresa el nombre del  que deseas Buscar...">
              </div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#altaCliente">
                  <span class="glyphicon glyphicon-plus"></span>  Cliente
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Artículo</th>
                    <th>Fecha Ingreso</th>
                    <th>Estado</th>
                    <th>Falla del Cliente</th>
                    <th>Acción</th>
                </tr>  
              </thead>
                <?php while ($row = mysqli_fetch_array($resultadosPre)){ ?>
              <tbody class="buscar">
                <tr class="<?php if ($row['estado'] ==3) {
                  echo "success";
                  } else {
                      if ($row['estado'] ==2) {
                        echo "warning";
                      } else {
                        if ($row['estado'] ==1) {
                          echo "info";
                        } else {
                          # code...
                        }
                        
                      }
                      
                    }
                    ?>">
                    <td> <?php echo $row['idProducto'] ?> </td>
                    <td> <?php echo $row['nombre'] ." ".$row['apellido'] ?> </td>
                    <td> <?php echo $row['articulo'] ?> </td>
                    <td> <?php echo $row['fechaIngreso'] ?> </td>
                    <td> <?php echo $row['estadoEquipo'] ?> </td>
                    <td> <?php echo $row['fallaCliente'] ?> </td>
                    <td>
                      <div class="btn-group">
                        <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li class="dropdown-header">Trabajos</li>                    
                              <li id="<?php echo $row['idProducto'] ?>" class="agregarpresupuesto" data-toggle="modal" data-target="#altaPresupuesto">
                                  <a href="#">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">  </span> Agregar
                                  </a>
                              </li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">Llamadas</li>  
                              <li class="agregarllamada" data-toggle="modal" data-target="#altallamada" id="<?php echo $row['idProducto'] ?>">
                                <a href="#">
                                  <span class="glyphicon glyphicon-earphone" aria-hidden="true">  </span> Agregar
                                </a>
                              </li>  
                              <li>
                              <a href="#">
                                    <form method="GET" action="../../php/presupuesto/historialLlamadas.php" class="llamadas" data-toggle="modal" data-target="#llamadaHistorial">
                                      <input type="hidden" name="idProducto" value='<?php echo $row['idProducto'];?>'>
                                      <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>  
                                      <input type="submit" value="Historial" class="btn-link" style="text-decoration: none;color:black">
                                    </form>
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
                  mysqli_close($conexion);
                ?>
            </table>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="conPresupuesto">
           <div class="form-inline">
              <?php 
               require '../../php/conexion.php';
               $consultaConPresupuesto = "SELECT * FROM productos p, clientes c, trabajos t WHERE p.idCliente = c.idCliente  and t.idProducto = p.idProducto   ORDER BY p.idProducto DESC LIMIT 100";
               $resultadosCP = mysqli_query($conexion, $consultaConPresupuesto) or die("PROBLEMA CON LA CONSULTA con PRESUPUESTO.");

              ?>
              <br>
               <div class="form-group col-xs-11"> 
                 <div class="input-group col-xs-5">
                  <span class="input-group-addon">Buscar</span>
                  <input id="filtrarConPresupuesto" type="text" class="form-control" placeholder="Ingresa el nombre del  que deseas Buscar...">
                </div>
              </div>
          </div>
          <br><br>
          <div class="table-responsive">
            <table class="table table-hover">
              <?php while ($row = mysqli_fetch_array($resultadosCP)){ ?>
              <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Artículo</th>
                    <th>Fecha Ingreso</th>
                    <th colspan="2">Falla del Cliente</th>
                </tr>

              </thead>
                
              <tbody class="buscarConPresupuesto">
                <tr <?php include("logica_color_table.php"); ?> >
                    <td rowspan="4"> <?php echo $row['nombre'] ." ".$row['apellido'] ?> </td>
                    <td> <?php echo $row['articulo'] ?> </td>
                    <td> <?php echo $row['fechaIngreso'] ?> </td>                    
                    <td colspan="2"> <?php echo $row['fallaCliente'] ?> </td>
                </tr>
                  <tr <?php include("logica_color_table.php"); ?> >
                    <th>Observaciones</th>
                    <th>Cambio Producto</th>
                    <th>Trabajo Realizado</th>
                    <th>Garantia</th>
                  </tr>
                <tr <?php include("logica_color_table.php"); ?> >
                  <td> <?php echo $row['observaciones'] ?> </td>
                  <td> <?php echo $row['cambioProducto'] ?> </td>
                  <td> <?php echo $row['trabajoRealizado'] ?> </td>
                  <td> <?php echo $row['garantia'] ?> </td>
                </tr>
                <tr <?php include("logica_color_table.php"); ?> >
                  <td></td>
                  <td></td>
                  <td></td>
                  <td style="background-color: #B6DCE0"> <?php echo $row['presupuesto'] ?> </td>
                </tr>
              </tbody>
              <?php 
                } 
                mysqli_close($conexion);
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
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

<?php include("modal_agregar_trabajos.php");?>
<?php include("modal_agregar_llamadas.php");?>
<?php include("modal_agregar_historial_llamadas.php");?>
<?php include("modal_agregar_notebook.php");?>
<?php include("modal_agregar_monitor.php");?>
<?php include("modal_agregar_netbook.php");?>
<?php include("modal_agregar_allinone.php");?>
<?php include("modal_agregar_clientes.php");?>