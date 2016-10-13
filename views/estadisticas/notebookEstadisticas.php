<!DOCTYPE html>
<html lang="es">
<head>
	<title>Estadisticas</title>
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

  <link rel="stylesheet" type="text/css" href="../../css/styles.css" media="screen">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../../js/estadisticas/ensamblado.js"></script>
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
              <li><a href="../clientes/clientes.php">Clientes</a></li>          
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
                  <li class="dropdown-header">Orden Servicio</li>
                  <li><a href="../../index.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Nueva</a></li>
                  <li><a href="../ordenServicio/listaPrecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
                  <li class="dropdown-header">Presupuesto</li>
                  <li><a href="../ordenServicio/listaordenes.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ver Ordenes</a></li>
                  <li><a href="../presupuesto/presupuestos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a></li>
                  <li><a href="listadoventaservicio.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pedido Ventas</a></li>
                  <li class="dropdown-header">Estadisticas</li>
                  <li><a href="notebookEstadisticas.php">Artículo</a></li>
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
          <h3>Estadisticas del Servicio Técnico</h3>
        </center>
      </div>
    </nav>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#notebook" aria-controls="home" role="tab" data-toggle="tab">Notebook</a></li>
      <li role="presentation"><a href="#netbook" aria-controls="netbook" role="tab" data-toggle="tab">Netbook</a></li>
      <li role="presentation"><a href="#ensamblado" aria-controls="ensamblado" role="tab" data-toggle="tab">Ensamblado</a></li>
    </ul>

    <div class="tab-content"> 
      <div role="tabpanel" class="tab-pane fade in active" id="notebook">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
      </div>
      <div role="tabpanel" class="tab-pane fade active"  id="netbook">
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
      </div>
      <div role="tabpanel" class="tab-pane fade active" id="ensamblado">
        <div class="form-inline">
          <div class="form-group col-md-2 col-md-offset-10">
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#altaEnsamblado">
                <span class="glyphicon glyphicon-plus"></span> Ensamblado
            </button>
          </div>
        </div>
        <form action="../../php/estadisticas/busquedaDesdeHastaEnsamblado.php" method="POST" id="busqueda-desde-hasta-ensamblado">
          <div class="form-inline">
            <div class="form-group">
              <label for="" class="control-label col-sm-3">Desde</label>
              <input type="text" id="desdeCalendario" class="form-control col-xs-2" name="desde" placeholder="dd/mm/aaaa">  
            </div>
            <div class="form-group">
              <label for="" class="control-label col-sm-3">Hasta</label>
              <input type="text" id="hastaCalendario" class="form-control col-xs-2" name="hasta" placeholder="dd/mm/aaaa">  
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" aria-label="Left Align">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </button>  
            </div>
          </div>
        </form>
        <div>
          <br>
          <div class="ajax_busqueda_ensamblado" ></div>
          <div id="columnchart_values" style="width: 900px; height: 500px;"></div>    
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
<?php include('modal_estadisticas/modal_agregar_ensamblado.php') ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  <?php 
    require_once '../../php/conexion.php';
    $consultaNotebook = "SELECT * FROM notebook WHERE nrovisita > 0 ORDER BY nrovisita  DESC";
    $resultNotebook = mysqli_query($conexion, $consultaNotebook) or die("PROBLEMA CON LA CONSULTA DE NOTEBOOK.");
    $totalFilas = mysqli_num_rows($resultNotebook);
  ?> 
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Notebook', 'Ingreso Servicio Tecnico'],
      <?php   
        while ($row = mysqli_fetch_array($resultNotebook)) { 
      ?>
        ["<?php echo $row['nombre'] ?>", <?php echo $row['nrovisita'] ?>],
      <?php } ?>   
    ]);

    var options = {
      title: 'Notebook Ingresadas al Servicio Técnico'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  } 
</script>

<script type="text/javascript">
  <?php 
    $consultaNetbook = "SELECT * FROM netbook WHERE nrovisita > 0 ORDER BY nrovisita  DESC";
    $resultNetbook = mysqli_query($conexion, $consultaNetbook) or die("PROBLEMA CON LA CONSULTA DE NETBOOK.");
    $totalFilas = mysqli_num_rows($resultNetbook);
  ?> 
   google.charts.load("current", {packages:["corechart"]});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart() {
     var data = google.visualization.arrayToDataTable([
       ['Netbook', 'Ingreso de Netbook'],
        <?php 
          while ($row = mysqli_fetch_array($resultNetbook)) { 
        ?>
         ["<?php echo $row['nombre'] ?>", <?php echo $row['nrovisita'] ?>],
        <?php 
          } 
        ?>  
     ]);

     var options = {
       title: 'Netbook Ingresadas al Servicio Técnico',
       is3D: true,
     };

     var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
     chart.draw(data, options);
   }  
</script>

  <script type="text/javascript">
    <?php 
      $consultaEnsamblado = "SELECT *, SUM(e.cantidad_ensamblado) FROM ensamblado e GROUP BY e.articulo_ensamblado ORDER BY e.articulo_ensamblado DESC";
      $resultEnsamblado = mysqli_query($conexion, $consultaEnsamblado) or die("PROBLEMA CON LA CONSULTA DE Ensamblado.");
      
    ?> 

    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Maquina Ensamblada", "Cantidad", { role: "style" } ],
        <?php 
          while ($rowEnsamblado = mysqli_fetch_array($resultEnsamblado)) { 
         ?>
        ["<?php echo $rowEnsamblado['articulo_ensamblado'] ?>", <?php echo $rowEnsamblado['SUM(e.cantidad_ensamblado)'] ?>, "#519BB0"],
        <?php }?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Cantidad de Máquinas Ensambladas",
        width: 1200,
        height: 500,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    }
  </script>
  
  <script>
    $(document).ready(function() {
      $(".seleccionEnsamblado").select2({
         placeholder: "Selecionar Items"
      });
    });
  </script>







