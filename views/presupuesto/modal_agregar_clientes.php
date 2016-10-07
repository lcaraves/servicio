<!-- Ventana Modal ALTA CLIENTE -->
<?php require '../../php/conexion.php';
  $consultaProvincia = "SELECT * FROM provincia";
  $resultadosProvincia = mysqli_query($conexion, $consultaProvincia) or die("PROBLEMA CON LA CONSULTA DE PROVINCIA.");
?>
<form method="post" action="../../php/altaCliente.php" name="formulario" class="form-horizontal" id="form-alta">
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="altaCliente">
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
              <div id="msj_ajax"></div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Jose Juan" name="nombre">
                </div>
              </div>
              <div class="row form-group">
                <label for="" class="control-label col-sm-2">*Apellido</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Gomez" name="apellido">
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
                  <input type="text" class="form-control" placeholder="Telefono" name="telefono" maxlength="10" placeholder="3624101010">
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
  </div><!-- /.modal -->
</form>