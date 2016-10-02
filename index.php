  <!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
  
  
  
  
  <script type="text/javascript" src="js/buscadorajax.js"></script>
  <script type="text/javascript" src="js/seleccionarArticulos.js"></script>
  <script type="text/javascript" src="js/altaOrdenServicio.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">
  <!-- chosen -->
  <script type="text/javascript" src="js/chosen/chosen.jquery.min.js"></script>
  <script type="text/javascript" src="js/chosen/chosen.jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="js/chosen/chosen.css" media="screen">
  <link rel="stylesheet" type="text/css" href="js/chosen/chosen.min.css" media="screen">
  <!-- Select2 -->
  <script type="text/javascript" src="js/select2/js/select2.full.js"></script>
  <script type="text/javascript" src="js/select2/js/select2.full.min.js"></script>
  <script type="text/javascript" src="js/select2/js/select2.js"></script>
  <script type="text/javascript" src="js/select2/js/select2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="js/select2/css/select2.css" media="screen">
  <link rel="stylesheet" type="text/css" href="js/select2/css/select2.min.css" media="screen">
</head>
<body>
<?php 
    session_start();
      if(!isset($_SESSION["session_UsuarioNombre"])){
      header("Location: php/inicioSesion/logeo.php");
    }

    require 'php/conexion.php';
    $consultaProvincia = "SELECT * FROM provincia";
    $resultadosProvincia = mysqli_query($conexion, $consultaProvincia) or die("PROBLEMA CON LA CONSULTA DE PROVINCIA.");
    $consultaCliente = "SELECT * FROM clientes";
    $resultadosClientes = mysqli_query($conexion, $consultaCliente) or die("PROBLEMA CON LA CONSULTA DE CLIENTES");
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
            <li><a href="index.php">Nueva Orden</a></li>
            <li><a href="views/clientes/clientes.php">Clientes</a></li>          
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
              <li><a href="index.php"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Nueva</a></li>
              <li><a href="views/ordenServicio/listaPrecio.php"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Lista Precios</a></li>
              <li class="dropdown-header">Presupuesto</li>
              <li><a href="views/ordenServicio/listaordenes.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Ver Ordenes</a></li>
              <li><a href="views/presupuesto/presupuestos.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a></li>
              <li class="dropdown-header">Estadisticas</li>
              <li><a href="views/estadisticas/notebookEstadisticas.php">Ingreso Notebook</a></li>
              <li><a href="php/pdf/imprimir2.php">Imprimir Prueba</a></li>
              <li><a href="views/estadisticas/listadoventaservicio.php">Pedido Ventas</a></li>
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
   	<div class="page-header">
      <div class="form-inline">
        <center>
          <h2>Ficha Técnica</h2>
          <img src="img/mifavicon.png" alt="" width="128">
        </center>
      </div>
    </div><!-- page-header -->
    </br>
    <form action="php/registrarOrden.php" method="post" id="ordenServicio-alta">
      <div class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-xs-3" for="exampleInputEmail1">Titular del Equipo</label>
          <div class="col-xs-5">
           <?php 
              require_once 'php/conexion.php';
              $consultaClientes = "SELECT * FROM clientes ORDER BY idCliente DESC";
              $resultadosCli = mysqli_query($conexion, $consultaClientes) or die("PROBLEMA CON LA CONSULTA DE CLIENTES."); 
             ?>
           <select name="seleccionCliente" class="chosen form-control" data-placeholder="Seleccionar Cliente" required>
              <option value=""></option>
                <?php while ($row = mysqli_fetch_array($resultadosCli)){ ?> 
                  <option value="<?php echo $row['idCliente'] ?>"><?php echo $row['nombre'] ." ". $row['apellido']."   - Tel: ( ". $row['telefono']." ) " ?></option>
                <?php 
                  }     
                ?>
            </select> 
          </div>
          <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#altaCliente">
              <span class="glyphicon glyphicon-plus"></span> 
            </button> 
        </div><!-- end div form-group -->    
      </div>    
      </br>

     <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#producto" aria-controls="producto" role="tab" data-toggle="tab">Producto</a></li>
          <li role="presentation" id="pestañaSO"><a href="#so" aria-controls="so" role="tab" data-toggle="tab">Sistema Operativo</a></li>
          <li role="presentation" id="pestañaOffice"><a href="#office" aria-controls="office" role="tab" data-toggle="tab">Office</a></li>
          <li role="presentation" id="pestañaDiseño"><a href="#packadobe" aria-controls="packadobe" role="tab" data-toggle="tab">Diseño</a></li>
          <li role="presentation" id="pestañaArqui"><a href="#autocad" aria-controls="autocad" role="tab" data-toggle="tab">Arquitectura</a></li>
        </ul>


        <!-- Tab panes -->
        <div class="panel-body"></div>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="producto">
              <br>
              <div class="form-horizontal">
                <div class='form-group'>
                  <label class='control-label col-xs-3' for=''>Artículo</label>
                  <div class='col-xs-2'>
                    <select name="select1" id="select1" class="form-control">
                      <option id="selectPC" value="PC - Escritorio">PC - Escritorio</option>
                      <option id="selectNotebook" value="Notebook">Notebook</option>
                      <option id="selectNetbook" value="Netbook">Netbook</option>
                      <option id="selectAllInOne" value="All in One">All in One</option>
                      <option id="selectMonitor" value="Monitor">Monitor</option>
                      <option id="selectImpresora" value="Impresora">Impresora</option>
                      <option id="textareaOtros" value="Otros">Otros</option>
                    </select>
                  </div><!-- Select Articulos -->
                  <div class="col-xs-2" id="select2">
                    <?php 
                      require_once 'php/conexion.php';
                      $consultaNotebook = "SELECT * FROM notebook ORDER BY nrovisita DESC";
                      $resultNotebook = mysqli_query($conexion, $consultaNotebook) or die("PROBLEMA CON LA CONSULTA DE NOTEBOOK.");
                    ?>
                    <select name="select2"class="form-control">
                        <option value="">Seleccionar</option>
                      <?php while ($row = mysqli_fetch_array($resultNotebook)) { ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>  
                      <?php 
                        }
                       ?> 
                    </select>
                  </div>
                   <div class="col-xs-2" id="select3">
                    <?php 
                      $consultaNetbook = "SELECT * FROM netbook ORDER BY nrovisita DESC";
                      $resultNetbook = mysqli_query($conexion, $consultaNetbook) or die("PROBLEMA CON LA CONSULTA DE NETBOOK.");
                     ?>
                    <select class="form-control" name="select3">
                        <option value="">Seleccionar</option>
                    <?php 
                      while ($row = mysqli_fetch_array($resultNetbook)) { ?> 
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div><!-- Select Netbook -->
                  <div class="col-xs-2" id="select4">
                  <?php 
                    $consultaMonitor = "SELECT * FROM monitor ORDER BY nombre";
                    $resultMonitor = mysqli_query ($conexion, $consultaMonitor) OR die("PROBLEMAS CON LA CONSULTA DE MONITOR");
                   ?>
                    <select name="select4"  class="form-control">
                    <option value="">Seleccionar</option>
                    <?php 
                      while ($row = mysqli_fetch_array($resultMonitor)) { 
                    ?>
                      <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php 
                      }
                     ?>
                    </select>
                  </div><!-- Select Monitor -->
                  <div class="col-xs-2" id="select6">
                    <select name="select6"  class="form-control">
                      <option value="">Seleccionar</option>
                      <option value="Acer">Acer</option>       
                      <option value="Asus">Asus</option>
                      <option value="Dell">Dell</option>
                      <option value="HP">HP</option>
                      <option value="LG">LG</option>
                      <option value="Lenovo">Lenovo</option>
                      <option value="Sony Vaio">Sony Vaio</option>
                      <option value="Toshiba">Toshiba</option>
                      <option value="Exo">Exo</option>
                    </select>
                  </div><!-- Select All In One -->
                  <div class="col-xs-2" id="select9">
                    <select name="select9"  class="form-control">
                      <option value="">Seleccionar</option>
                      <option value="HP">HP</option>       
                      <option value="Epson">Epson</option>
                      <option value="Brother">Brother</option>
                      <option value="Lexmark">Lexmark</option>
                      <option value="Dell">Dell</option>
                      <option value="Canon">Canon</option>
                      <option value="Panasonic">Panasonic</option>
                      <option value="Samsung">Samsung</option>
                      <option value="Toshiba">Toshiba</option>
                      <option value="Xerox">Xerox</option>            
                    </select>
                  </div><!-- Select9 Impresoras -->
                  <div class="col-xs-2" id="select10">
                    <input type="text" class="form-control" placeholder="Modelo" name="modeloImpresora" autocomplete="off">
                  </div>
                  <div class="col-xs-2" id="select5">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Bateria" id="optionsRadios1" value="Bateria" autocomplete="off">
                        Bateria
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Funda" id="optionsRadios2" value="Funda" autocomplete="off">
                        Funda
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Cargador" id="optionsRadios3" value="Cargador" autocomplete="off">
                        Cargador
                      </label>
                    </div>      
                  </div><!-- Select5 Checkbox Notbook y Netbook -->
                  <div class="col-xs-2" id="select7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Cargador" id="optionsRadios1" value="Cargador" autocomplete="off">
                        Cargador
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Teclado" id="optionsRadios2" value="Teclado" autocomplete="off">
                        Teclado
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Mouse" id="optionsRadios3" value="Mouse" autocomplete="off">
                        Mouse
                      </label>
                    </div>      
                  </div><!-- Select7 Checkbox  All in One-->
                  <div class="col-xs-2" id="select8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Tonner" id="optionsRadios1" value="Tonner" autocomplete="off">
                        Tonner
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="Cargador" id="optionsRadios2" value="Cargador" autocomplete="off">
                        Cargador
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="CableUSB" id="optionsRadios3" value="Cable USB" autocomplete="off">
                        Cable USB
                      </label>
                    </div>      
                  </div><!-- Select8 Checkbox Impresora -->    
                  <div class="col-xs-2" id="textarea1">
                    <textarea name="comentariosOtros"  cols="30" rows="2" placeholder="Observaciones Otros Articulos" class="form-control" autocomplete="off"></textarea>
                  </div>
                </div><!-- end div form-group Articulo-->
                <div class='form-group' id="ocultarAccesorio">
                  <label  class='control-label col-xs-3' for=''>Accesorios</label>
                  <div class='col-xs-5'>
                    <input type='text' class='form-control' name="accesorios">
                  </div>
                </div><!-- end div form-group Accesorios-->
                <div class='form-group'>
                  <label class='control-label col-xs-3' for=''>Estado del Equipo</label>
                  <div class='col-xs-5'>
                    <input type='text' class='form-control' name="estadoEquipo">
                  </div>
                </div><!-- end div form-group --> 
                <div class='form-group' id="ocultarCodigo">
                  <label class='control-label col-xs-3' for=''>Codigo</label>
                  <div class='col-xs-5'>
                    <input type='text' class='form-control' name="codigo">
                  </div>
                </div><!-- end div form-group -->
                <div class='form-group' id="ocultarSerial">
                  <label class='control-label col-xs-3' for=''>Serial</label>
                  <div class='col-xs-5'>
                    <input type='text' class='form-control' name="serial">
                  </div>
                </div><!-- end div form-group -->
                <div class='form-group' id="ocultarSerial">
                  <label class='control-label col-xs-3' for=''>Horario Llamada</label>
                  <div class='col-xs-5'>
                    <select name="horarioLlamada" id="" class="form-control">
                      <option value="">seleccionar horario</option>
                      <option value="Mañana - Tarde">Mañana - Tarde</option>
                      <option value="Mañana">Mañana</option>
                      <option value="Tarde">Tarde</option>
                    </select>
                  </div>
                </div><!-- end div form-group -->
                <div class='form-group'>
                  <label class='control-label col-xs-3' for=''>Falla del Cliente</label>
                  <div class='col-xs-5'>
                    <input type='text' name='fallaCliente' id='' class='form-control' autocomplete="off" required>
                  </div>
                </div><!-- end div form-group -->
                <input type='hidden' name='fechaIngreso' id=''  value="<?php $fecha2=time()-18000; echo date("Y-m-d_H:i:s",$fecha2); ?>">
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="so">
              <div class="panel-body">
                <div class="form-horizontal">
                  <div class="form-group">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-3">
                      <select name="sistemaOperativo" class="form-control" id="">
                        <option value="">Seleccionar S.O</option>
                        <option value="Windows 7">Windows 7</option>
                        <option value="Windows 8.1">Windows 8.1</option>      
                        <option value="Windows 10">Windows 10</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-xs-3"></div>
                  <div class="col-xs-3">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary">
                        <input type="radio" name="tipoArqui" id="optionsRadios1" value="x64" autocomplete="off">
                        X64
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="tipoArqui" id="optionsRadios2" value="x86" autocomplete="off">
                        X86
                      </label>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="office">
              <div class="panel-body">          
                <div class="col-xs-3"></div>
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-primary">
                    <input type="radio" name="office" autocomplete="off" value="Office 2007"> Office 2007
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="office" autocomplete="off" value="Office 2010"> Office 2010
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="office" autocomplete="off" value="Office 2013"> Office 2013
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="office" autocomplete="off" value="Office 2016"> Office 2016
                  </label>
                </div>
              </div> 
            </div>
            <div role="tabpanel" class="tab-pane" id="packadobe">
              <div class="panel-body">
                <div class="form-horizontal">
                  <div class="col-xs-3"></div>
                  <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary" >
                        <input type="checkbox" autocomplete="off" name="adobe" value="Pack Adobe"> Pack Adobe
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-3"></div>
                  <div class="form-group">
                    <select name="listaAdobe[]" multiple class="form-control packadobe" style="width: 50%;">
                      <option value=""></option>
                      <option value="Photoshop">Photoshop</option>
                      <option value="Photoshop Lightroom">Photoshop Lightroom</option>
                      <option value="Illustrator">Illustrator</option>
                      <option value="InDesign">InDesign</option>
                      <option value="Dreamweaver">Dreamweaver</option>
                      <option value="AfterEffects">After Effects</option>
                      <option value="InCopy">InCopy</option>
                      <option value="Acrobat">Acrobat</option>
                      <option value="Flash">Flash</option>
                      <option value="FlashProfessional">Flash Professional</option>
                      <option value="Bridge">Bridge</option>
                      <option value="PremierePro">Premiere Pro</option>
                    </select>
                  </div>    
                  <div class="col-xs-3"></div>
                  <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">  
                        <label class="btn btn-primary">
                          <input type="checkbox" autocomplete="off" name="corel" value="Corel Draw"> Corel Draw
                        </label>
                    </div>
                  </div>
                  <div class="col-xs-3"></div>
                  <div class="form-group"  id="listaCorel">
                    <select name="seleccionCorel" class="form-control" style="width: 50%;">
                      <option value=""></option>
                      <option value="Corel x5">x5</option>
                      <option value="Corel x6">x6</option>
                      <option value="Corel x7">x7</option>
                      <option value="Corel x8">x8</option>
                    </select>
                  </div>  
                </div>
              </div><!-- panel-body -->
            </div>
            <div role="tabpanel" class="tab-pane" id="autocad">
              <div class="panel-body">
                <div class="form-horizontal">
                  <div class="col-xs-3"></div>
                  <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">  
                      <label class="btn btn-primary">
                          <input type="checkbox" autocomplete="off" value="Google Sketshup" name="sketshup"> Google Sketshup
                        </label>
                    </div>
                    <div class="btn-group" data-toggle="buttons">  
                      <label class="btn btn-primary">
                          <input type="checkbox" autocomplete="off" value="V-Ray" name="vray"> V-Ray
                        </label>
                    </div>
                    <div class="btn-group" data-toggle="buttons">  
                      <label class="btn btn-primary">
                          <input type="checkbox" autocomplete="off" value="ArchiCAD" name="archi"> ArchiCAD
                        </label>
                    </div>
                  </div>
                  <div class="col-xs-3"></div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <select name="tipoAutoCad" class="form-control" id="" >
                        <option value="">Seleccionar</option>
                        <option value="AutoCad 2010">AutoCad 2010</option>
                        <option value="AutoCad 2011">AutoCad 2011 </option>
                        <option value="AutoCad 2012">AutoCad 2012 </option>
                        <option value="AutoCad 2013">AutoCad 2013 </option>
                        <option value="AutoCad 2014">AutoCad 2014 </option>
                        <option value="AutoCad 2015">AutoCad 2015 </option>
                        <option value="AutoCad 2016">AutoCad 2016 </option>
                      </select>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-3 col-md-offset-3">
            <button type="submit" class="btn btn-primary" aria-label="Left Align">
              <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar
            </button>
          </div>  
      </div> 
     </div>
    </form> 
  </div><!-- End Container Fluid -->

  <footer class="bd-footer text-muted">
    <div class="avbar navbar-default navbar-static-top">
      <div class="container">
          <center>
            <img src="img/ArwanLogoGris.jpg" alt="" width="32" class="img-circle">
            <p class="text-muted credit">
              <strong>E-mail: ventas@arwancomputacion.com.ar <br>Av. San Martin 83 | C.P. H3500CIA | Resistencia, Chaco | Tel.: (0362) 4411605 <br>
              <a href="http://www.arwancomputacion.com.ar">www.arwancomputacion.com.ar</a></strong>
            </p>
          </center>    
      </div>
    </div>
  </footer>
  <div>

   
</body>
</html>

<!-- Ventana Modal ALTA CLIENTE -->
<?php require 'php/conexion.php';
  $consultaProvincia = "SELECT * FROM provincia";
  $resultadosProvincia = mysqli_query($conexion, $consultaProvincia) or die("PROBLEMA CON LA CONSULTA DE PROVINCIA.");
?>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altaCliente">
  <form method="post" action="php/altaCliente.php" name="formulario" class="form-horizontal" id="form-alta">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel"><strong>Alta de Cliente</strong></h4>
      </div>
      
      <!-- Ventana MODAL -->
      <div class="modal-body">
        <div class="form-horizontal">
            <div class="row form-group">
              <p class="col-sm-8"><small><strong>*</strong>Campos Obligatorios</small></p>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-2">*Nombre</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Jose Juan" name="nombre" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-2">*Apellido</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Gomez" name="apellido" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-2">Direccion</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="direccion" placeholder="Av. San Martín 83" >
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-2">*Telefono</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Telefono" name="telefono" maxlength="10" placeholder="44202020" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-2">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="arwancomputacion@arwan.com" name="email">
              </div>
            </div>
            <div class="row form-group">
              <label for="" class="control-label col-sm-2">Localidad</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Resistencia" name="localidad">
              </div>
            </div>
            <div class="row form-group">
                <label for="" class="control-label col-sm-2">Provincia</label>
                <div class="col-sm-8">
                  <select class="form-control" name="provincia">

                        <option></option>
                        <?php 
                          while ($row = mysqli_fetch_array($resultadosProvincia)) {
                          if ($row['nombre'] == 'Chaco') {
                              echo "<option selected = 'selected'>".$row['nombre']."</option>";  
                          } else {
                              echo "<option>".$row['nombre']."</option>";  
                          }  
                        }
                        ?>
                  </select>      
                </div>
            </div>
        </div>
      </div>
      <br>            
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="boton-cerrar">Close</button>
        <button type="submit" class="btn btn-primary" aria-label="Left Align">
          <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
        </button>
      </div>

    </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->.
  </form>
</div><!-- /.modal -->

<script>
  $(document).ready(function() {

     $(".chosen").chosen();
     $(".packadobe").select2({
        placeholder: "Selecionar Items",
        allowClear: true,
        tags: true
     });
     $(".corelDraw").select2({
        placeholder: "Selecionar Items"
     });
    //Alta de Cliente --> Formulario
    $("#form-alta").submit(function(e) {
        var url = "php/clientes/altaCliente.php"; // the script where you handle the form input.
        $.ajax({
               type: "POST",
               url: url,
               data: $("#form-alta").serialize(), // serializes the form's elements.
               success: function(data)
               {
                  $("#form-alta")[0].reset();
                  location.reload();
               }
             });
        e.preventDefault(); // avoid to execute the actual submit of the form.       
    });
  });
</script>


